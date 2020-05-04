<?php
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
//Lidhja me database
require_once "db_connection.php";
 
$username = $password = "";
$username_err = $password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["inputEmailUsername"]))){
        $_SESSION["username_err"] = "Please enter username.";
        header("location:login.php");
    } else{
        $username = ($_POST["inputEmailUsername"]);
    }
    
    if(empty($_POST["inputPassword"])){
        $_SESSION["password_err"] = "Please enter your password.";
        header("location:login.php");
    } else{
        $password = ($_POST["inputPassword"]);
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
                        if(password_verify ( $password , $hashed_password )){
                            session_start();
                             // Ruajta variablave ne session
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["roli"] = $roli;                            
                            header("location: index.php");
                        } else{
                            // Password gabim
                            $_SESSION["password_err"] = array("Password gabim.");
                            header("location:login.php");
                        }
                    }
                } else{
                    // Username ose Email gabim
                    $_SESSION["username_err"] = array("Username ose Email gabim.");
                    header("location:login.php");
                }
            } else{
                //Gabim ne query
                $_SESSION["sql_err"] =array("Oops gabim gjate procedimit.");
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