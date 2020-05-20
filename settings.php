<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Settings</title>
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <script src="assets\js\jquery-3.4.1.min.js"></script>
        <script src="assets\js\popper.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\fonts\all.min.js"></script>
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/megan.css">
        <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
    </head>

    <body>
    
    <?php
      session_start();
        if(!isset($_SESSION["loggedin"])){
        header("location:index.php");
        exit();
    }
   
    include 'header.php';
    include 'db_connection.php';
    ?>
    <br>
    <div class="container">
        <div class="row">
            <h3>Ju mund te ndryshoni te dhenat e lejuara:</h3>
        </div>
    </div>
   <div class="container">
       <div class="row">
            <form method='POST' action="settings1.php">
            Vendosni password-in aktual:<br>
            <input type="text" id='passvj' name="pasi_vjeter"><br>
            Vendosni password-in e ri:<br>
            <input type='text' id='passri' name='pasi_ri'><br>
            Konfirmoni password-in e ri:<br>
            <input type='text' id='passrikonf' name='pasi_ri_konf'><br><br>
            <input type='submit' value='Ndrysho'name='ndrysho' ><br><br>
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
    include 'footer.php';
    ?>
   </body>
   </html>