<?php
include 'db_connection.php';
session_start();

//var_dump($conn);

if(isset($_POST['add'])){
$emrilendes = $_POST['name'];
$vitilendes = $_POST['year'];
$niveli = $_POST['level'];
$kredite = $_POST['credits'];
$id_programi = $_POST['programid'];
$kohezgjatja = $_POST['duration'];



    {$result2 = sprintf("INSERT INTO lenda(emer,viti_lendes,niveli,kredite,id_programi_fk,kohezgjatja) 
      VALUES ('%s','%s','%s','%s','%s','%s');",$emrilendes,$vitilendes,$niveli,$kredite,$id_programi,$kohezgjatja);
       $flag2 = $conn->query($result2);
                  if($flag2)
                  {
                      echo "query successful";
                      header('location:menaxholende.php');
                      $_SESSION['response']="Databaza u plotesua me sukses!";
                      $_SESSION['res_type']="success";
                  }
                  else
                  {
                    header('location:menaxholende.php');
                    $_SESSION['response']="Pati një problem në plotësimin e databazës. Sigurohuni që progami ekziston!";
                    $_SESSION['res_type']="danger";
                  }}}
               
           


      if(isset($_POST['edit'])){
        $id = $_POST['id_lende'];
        $emrilendes = $_POST['name'];
        $vitilendes = $_POST['year'];
        $niveli = $_POST['level'];
        $kredite = $_POST['credits'];
        $id_programi = $_POST['programid'];
        $kohezgjatja = $_POST['duration'];
        $result1 = sprintf("UPDATE lenda SET emer = '%s', viti_lendes = '%s', niveli = '%s', kredite = '%s', id_programi_fk = '%s', kohezgjatja = '%s' WHERE id_lende='%s';",$emrilendes,$vitilendes,$niveli,$kredite,$id_programi,$kohezgjatja,$id);
  
        $flag1 = $conn->query($result1);
      
        if($flag1){
          $_SESSION['response']="Te dhënat u ruajtën me sukses!";
          $_SESSION['res_type']="success";
          header('location:menaxholende.php?edit='.$id);
        }else{
          $_SESSION['response']="Pati një problem! Të dhënat nuk u ruajtën. Sigurohuni që programi i vendosur ekziston.";
          $_SESSION['res_type']="danger";
          header('location:menaxholende.php?edit='.$id);
        }
      }


      if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $deletelende = "DELETE FROM lenda WHERE id_lende='$id'";
          if($conn -> query($deletelende)==TRUE)
            {
                header('location:menaxholende.php');
                $_SESSION['response']="Lënda u fshi me sukses!";
                $_SESSION['res_type']="success"; }
                else {
                  header('location:menaxholende.php');
                $_SESSION['response']="Pati një problem! Lënda nuk u fshi!";
                $_SESSION['res_type']="danger"; }
             }
      else{
            echo $conn->error;}

          
             
                  
            

     
      
    

?>