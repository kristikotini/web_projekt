<?php
include 'db_connection.php';
session_start();

//var_dump($conn);

if(isset($_POST['add'])){
$emriprogramit = $_POST['name'];
$niveli = $_POST['level'];
$pershkrimi = $_POST['description'];

     {$result2 = sprintf("INSERT INTO program(emer,nivel,pershkrimi) 
      VALUES ('%s','%s','%s');",$emriprogramit,$niveli,$pershkrimi);
       $flag2 = $conn->query($result2);
                  if($flag2)
                  {
                      echo "query successful";
                      header('location:menaxhoprogram.php');
                      $_SESSION['response']="Databaza u plotesua me sukses!";
                      $_SESSION['res_type']="success";
                  }
                  else
                  {
                    header('location:menaxhoprogram.php');
                    $_SESSION['response']="Problem në plotësimin e databazës!";
                    $_SESSION['res_type']="danger";
                  }}}
               
        


      if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $deleteprogram = "DELETE FROM program WHERE id_programi='$id'";
          if($conn -> query($deleteprogram)==TRUE)
            {
                header('location:menaxhoprogram.php');
                $_SESSION['response']="Programi u fshi me sukses!";
                $_SESSION['res_type']="success"; }
                else {
                  header('location:menaxhoprogram.php');
                $_SESSION['response']="Pati një problem! Programi nuk u fshi!";
                $_SESSION['res_type']="danger"; }
             }
      else{
            echo $conn->error;}

          
             
                  
            

     
      
    

?>