<?php
session_start();

if(isset($_GET['artikulli']) && isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["roli"]==0){
    $file_pointer='lajme/'.$_GET['artikulli'].'.txt';
    if (!unlink($file_pointer)) {  
        $_SESSION['response']="Ndodhi nje gabim gjate fshirjes se artikullit!";
      $_SESSION['res_type']="danger";
      header('location:news.php');
    }  
    else {  
        $_SESSION['response']="Artikulli u fshi me sukses!";
$_SESSION['res_type']="success";
header('location:news.php');
    }  
}else(header("location:news.php"))

?>

