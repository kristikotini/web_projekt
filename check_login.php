<?php

//Lidhja me database
require_once "db_connection.php";
 
$username = $password = "";
$username_err = $password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["inputEmailUsername"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["inputEmailUsername"]);
    }
    
    if(empty(trim($_POST["inputPassword"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["inputPassword"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT perdorues_id, username, password,email,roli FROM perdorues WHERE username = ? OR email = ?";
        if($stmt = $conn->prepare($sql)){
            $stmt->bind_param("ss", $param_username,$param_username);
            $param_username = $username;

            if($stmt->execute()){
                $stmt->store_result();
                if($stmt->num_rows == 1){                    
                    $stmt->bind_result($id, $username, $hashed_password,$email,$roli);
                    if($stmt->fetch()){
                        if($password == $hashed_password){
                            session_start();
                             // Ruajta variablave ne session
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["roli"] = $roli;                            
                            header("location: index.php");
                        } else{
                            // Password gabim
                            echo ("Password gabim.");
                            sleep(2);
                            header("location:login.php");
                        }
                    }
                } else{
                    // Username ose Email gabim
                    echo ("Username ose Email gabim.");
                    sleep(2);
                    header("location:login.php");
                }
            } else{
                //Gabim ne query
                echo ("Oops gabim gjate procedimit.");
                sleep(2);
                header("location:login.php");
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $conn->close();
}
?>