<?php
include 'db_connection.php';
session_start();

//var_dump($conn);

if(isset($_POST['add'])){
$emer = $_POST['name'];
$mbiemer = $_POST['lastname'];
$gjini = $_POST['gender'];
$datelindje = $_POST['date'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash( $_POST['password'], PASSWORD_DEFAULT);
$roli = 2;
$grupi = $_POST['group'];
$data_regjistrimit = $_POST['regdate'];
$viti = $_POST['year'];
$id_programi = $_POST['programid'];
$niveli = $_POST['level'];
//$last_id = $conn->insert_id; mund te me duhet per te marre id e fundit te ndonje tab
//password_hash("rasmuslerdorf", PASSWORD_DEFAULT);


$result1 = sprintf("INSERT INTO perdorues(emer,mbiemer,gjini,datelindje,username,email,password,roli) 
VALUES ('%s','%s','%s','%s','%s','%s','%s','%s');",$emer,$mbiemer,$gjini,$datelindje,$username,$email,$password,$roli);
$flag1 = $conn->query($result1);


          if ($flag1)
      {       $sql = "SELECT perdorues_id FROM perdorues WHERE username='$username' ";
              $result = $conn -> query($sql);
            if ($result->num_rows > 0) 
                   // output data of each row
             {      while($row = $result->fetch_assoc()) 
                {  $result2 = sprintf("INSERT INTO student(id_student_fk,grupi,data_regjistrim,viti_std,id_programi_fk,niveli) 
                  VALUES ('%s','%s','%s','%s','%s','%s');",$row["perdorues_id"],$grupi,$data_regjistrimit,$viti,$id_programi,$niveli);
                   //echo "<br> id: ". $row["perdorues_id"]. " - Name: ". $username . "<br>";
                  $flag2 = $conn->query($result2);
              if($flag2)
                  {
                      echo " query successful";
                      header('location:menaxhostd.php');
                    $_SESSION['response']="Databaza u plotesua me sukses!";
                    $_SESSION['res_type']="success";
                  }
                  else
                  {
                      echo $conn->error;
                      $del="DELETE FROM perdorues WHERE username='$username' ";
                      $resultdelete=$conn -> query($del);
                      header('location:menaxhostd.php');
                    $_SESSION['response']="Sigurohuni që programi i vendosur ekziston!";
                    $_SESSION['res_type']="danger";
                      
                  }
                }
             }
            else 
            {
            echo "0 results";
            }
      }
      else
      {    echo $conn->error;
        
        //Duplicate entry 'klaudia.musollari' for key 'username'
        //Duplicate entry 'klaudia.b@ushkpedagog.info' for key 'email'
        if ($conn->error=="Duplicate entry".$username."for key 'username'"){
            echo header('location:menaxhostd.php');
            $_SESSION['response']="Email ose Username ekziston!";
            $_SESSION['res_type']="danger";
        }
        else
        {
            echo header('location:menaxhostd.php');
            $_SESSION['response']="Email ose Username ekziston!";
            $_SESSION['res_type']="danger";
        }
      }}


      if(isset($_POST['edit'])){
        $id = $_POST['user_id'];
        $emer = $_POST['name'];
        $mbiemer = $_POST['lastname'];
        $email = $_POST['email'];
        $grupi = $_POST['group'];
        $data_regjistrimit = $_POST['regdate'];
        $viti = $_POST['year'];
        $id_programi = $_POST['programid'];
        $niveli = $_POST['level'];
        $result1 = sprintf(
          "UPDATE perdorues
          SET emer = '%s', mbiemer = '%s', email = '%s' 
          WHERE perdorues_id=%s;",
          $emer,$mbiemer,$email,$id
        );
        
        $result2 = sprintf("UPDATE student SET grupi = '%s', data_regjistrim = '%s', viti_std = '%s', id_programi_fk = '%s', niveli = '%s' WHERE id_student_fk='%s';",$grupi,$data_regjistrimit,$viti,$id_programi,$niveli,$id
        );
      // die($result1);
        $flag1 = $conn->query($result1);
        $flag2 = $conn->query($result2);
      
        if($flag1 && $flag2){
          $_SESSION['response']="Te dhënat u ruajtën me sukses!";
          $_SESSION['res_type']="success";
          header('location:menaxhostd.php?edit='.$id);
        }else{
          $_SESSION['response']="Pati nje problem! Të dhënat nuk u ruajtën. Sigurohuni që programi i vendosur ekziston.";
          $_SESSION['res_type']="danger";
          header('location:menaxhostd.php?edit='.$id);
        }
      }


      if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $deletestudent = "DELETE FROM student WHERE id_student_fk='$id'";
          if($conn -> query($deletestudent)==TRUE)
            {
              $deleteperdorues = "DELETE FROM perdorues WHERE perdorues_id='$id'";
                if($conn -> query($deleteperdorues)==TRUE){
                header('location:menaxhostd.php');
                $_SESSION['response']="Perdoruesi u fshi me sukses!";
                $_SESSION['res_type']="success"; }
                else {
                  header('location:menaxhostd.php');
                  $_SESSION['response']="Pati një problem! Perdoruesi nuk u fshi.";
                  $_SESSION['res_type']="danger";
                  }
            }
         }
      else{
            echo $conn->error;}

          
             
                  
            

     
      
    

?>