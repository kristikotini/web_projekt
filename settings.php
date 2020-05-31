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
        <div class="row justify-content-center">
            <h3 class='text-center text-dark mt-2'>Ju mund te ndryshoni te dhenat e lejuara:</h3>
        </div>
    </div>
   <div class="container">
       <div class="row">
       <div class="form-group">
            <form method='POST' action="settings1.php">
            <label>Vendosni password-in aktual:<span id='ylli'>*</span></label> <br>
            <input type="password" id='passvj' name="pasi_vjeter" required><br>
            <label>Vendosni password-in e ri:<span id='ylli'>*</span></label><br>
            <input type='password' id='passri' name='pasi_ri' required><br>
            <label>Konfirmoni password-in e ri:<span id='ylli'>*</span></label><br>
            <input type='password' id='passrikonf' name='pasi_ri_konf' required><br><br>
            <input type='submit' value='Ndrysho Password'name='ndrysho' class="btn btn-primary bt1"><br>
            </form>

        </div>
      <div class="container">
      <div class="row">
           <?php

              $roli=$_SESSION["roli"];
              if($roli==1){
                  echo "<div class='form-group'>";
                  echo "<form method='POST' action='settings1.php'>";
                  echo "<label>Ndryshoni pershkrimin tuaj:<span id='ylli'>*</span></label> <br>";
                  echo "<textarea name='pershkrim' rows='3' cols='50' required></textarea><br><br>";
                  echo "<input type='submit' value='Ndrysho Pershkrim' name='ndrysho_p' class='btn btn-primary bt1'><br>";
                  echo "</form>";
                  echo "</div>";
                  ?>
                  </div>
                  <div class='row'>
                  <div class='form-group'>
                <form action="settings1.php" method="post" enctype="multipart/form-data">
                    <label>Ndryshoni foton e profilit:<span id='ylli'>*</span></label><br>
                    <input type="file" name="fileToUpload" id="fileToUpload"class="form-control-file border" required><br>
                    <input type="submit" value="Ndrysho Foto" name="ndrysho_foto" class='btn btn-primary bt1'>
                </form>

                </div>
                </div>
                <div class='row'>
                <div class='form-group'>
                <form action="settings1.php" method="post" enctype="multipart/form-data">
                <input type="submit" value="Fshi Foto" name="fshi_foto" class='btn btn-primary bt1'>
                </form>
                </div>
                </div>
            <?php
              }
           ?>
           </div>
           </div>
        </div>
        
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