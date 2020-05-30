<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <script src="assets\js\jquery-3.4.1.min.js"></script>
    <script src="assets\js\popper.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\fonts\all.min.js"></script>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
    <script type="text/javascript" src="assets/js/pedagog.js"></script>
    <script src="assets\js\jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
  
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["roli"]!=1){
            
    header("location:index.php");
    exit();
    }
    else if(!isset($_SESSION["loggedin"])){
    header("location:index.php");
    exit();
    }
    include "header.php";
    ?>

    <?php if (isset($_SESSION['response'])){ ?>
        <div class="alert alert-<?= $_SESSION['res_type'];  ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;
        </button>
        <?= $_SESSION['response']; ?>
        </div>
        <?php } unset($_SESSION['response']); ?>
       </div>
       
  <!--Material form login -->
<div class="card" style="width: 500px;margin: 0 auto;">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Ngarko Nota</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">


  
    <select class="browser-default custom-select mb-4" name="lenda_select" id="select" style="margin-top: 40px;">
          <option value="" disabled="" selected="">Zgjidh Lende</option>        
          <?php
              include "shfaq_lende.php";
          ?>
      </select>
      <div class="d-flex justify-content-around">
      </div>
      <!-- Gjenero button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" onclick="krijoTab()" > Gjenero Tabele</button>

      

  </div>

</div>
<form action="ngarko.php" method="POST" id="tab"></form>

<?php
    include "footer.php";
?>

    <script>
     var lende;

    $(document).ready(function(){
    $("#select").change(function(){
        lende = $(this).children("option:selected").val();
    });
});
     function krijoTab() {
       //alert(lende);
      if (typeof lende=="undefined") {
    alert ("Ju lutem zgjidhni nje lende.");
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
      xmlhttp.onload = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("tab").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET", "shfaq_tab.php?lende="+lende, true);
    xmlhttp.send();
  }
} 
    
    </script>
</body>
</html>

