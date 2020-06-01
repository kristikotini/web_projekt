<?php
include "db_connection.php";
session_start();
 
  if(isset($_POST['emer'])&&isset($_POST['mbiemer'])&&isset($_POST['nota'])){             
$emer = $_POST['emer'];
$mbiemer = $_POST['mbiemer'];
$nota = $_POST['nota'];

foreach( $emer as $key => $n ) {
  
     $idja="select perdorues_id from perdorues where emer='$n' and mbiemer='$mbiemer[$key]'";
     $usersresult = $conn -> query($idja);  
     if($usersresult){
        $row = $usersresult->fetch_assoc() ; 
        // $row['perdorues_id'];
        // $nota[$key];
        // $_SESSION['id_lende'];
        $sql="insert into nota values (".$row['perdorues_id'].",".$_SESSION['id_lende'].",".$nota[$key].");";
     }
     else{
    $_SESSION['response']="Sigurohuni që nuk ka ndodhur ndonje gabim gjate hedhjes se notave!";
    $_SESSION['res_type']="danger";
    header('location:nota1.php');
     }
    
    $res2 = $conn -> query($sql);  
    if(! $res2){
        $_SESSION['response']="Sigurohuni që nuk ka ndodhur ndonje gabim gjate hedhjes se notave!";
         $_SESSION['res_type']="danger";
         header('location:nota1.php');
    }
}
  }

//query sql per studentet mbartes...
if(isset($_POST['emerb'])&&isset($_POST['mbiemerb'])&&isset($_POST['notab'])){             
  $emer = $_POST['emerb'];
  $mbiemer = $_POST['mbiemerb'];
  $nota = $_POST['notab'];

foreach( $emer as $key => $n ) {
  
  $idja="select perdorues_id from perdorues where emer='$n' and mbiemer='$mbiemer[$key]'";
  $usersresult = $conn -> query($idja);  
  if($usersresult){
     $row = $usersresult->fetch_assoc() ; 
     // $row['perdorues_id'];
     // $nota[$key];
     // $_SESSION['id_lende'];
     $sql="update nota set nota=".$nota[$key]." where id_perdorues_fk=".$row['perdorues_id']." and id_lende_fk=".$_SESSION['id_lende'].";";
  }
  else{
 $_SESSION['response']="Sigurohuni që nuk ka ndodhur ndonje gabim gjate hedhjes se notave!";
 $_SESSION['res_type']="danger";
 header('location:nota.php');
  }
 
 $res2 = $conn -> query($sql);  
 if(! $res2){
     $_SESSION['response']="Sigurohuni që nuk ka ndodhur ndonje gabim gjate hedhjes se notave!";
      $_SESSION['res_type']="danger";
      header('location:nota.php');
 }
}
}
$_SESSION['response']="Notat u perditesuan me sukses!";
$_SESSION['res_type']="success";
header('location:nota.php');
?>