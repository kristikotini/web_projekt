<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <script src="assets\js\jquery-3.4.1.min.js"></script>
    <script src="assets\js\popper.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\fonts\all.min.js"></script>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
    <script type="text/javascript" src="assets/js/pedagog.js"></script>
    
   <title>Ndrysho note</title>
</head>
<body >

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


<div class="card" style="width: 500px;margin: 0 auto;">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Ndrysho Note</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">
    <form action="vep_ndryshimi.php" method="post">
   <select class="browser-default custom-select mb-4" name="lenda_select" id="select" style="margin-top: 40px;">
          <option value="" disabled="" selected="">Zgjidh Lende</option>        
          <?php
              include "shfaq_lende.php";
          ?>
      </select>
      <input class="form-control" type="text" id="emri" name='emri' placeholder="Vendos emrin e studentit" required><br>
      <input class="form-control" type="text" id="mbiemri" name='mbiemri' placeholder="Vendos mbiemrin e studentit" required><br>
      <input class="form-control" type="number" id="nota" name='nota' placeholder="Vendos noten" required><br>
      
      <input type='submit' name='ndrysho_not' value='Ndrysho Noten' class='btn btn-primary bt1' style='width:170px;'>
      </form>
</div>
</div>

<div>
        <?php if (isset($_SESSION['response'])){ ?>
        <div class="alert alert-<?= $_SESSION['res_type'];  ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;
        </button>
        <?= $_SESSION['response']; ?>
        </div>
        <?php } unset($_SESSION['response']); ?>
    </div>


<?php
    include "footer.php";
?>

</body>
</html>