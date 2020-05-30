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

        $sql="update nota set nota=".$nota[$key]." where id_perdorues_fk=".$row['perdorues_id']." and id_lende_fk=".$_SESSION['id_lende'].";";
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
$_SESSION['response']="Notat u perditesuan me sukses!";
$_SESSION['res_type']="success";


header('location:nota1.php');
}
?>