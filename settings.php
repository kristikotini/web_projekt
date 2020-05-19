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
            <form method='POST' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Vendosni password-in aktual:<br>
            <input type="text" id='passvj' name="pasi_vjeter"><br>
            Vendosni password-in e ri:<br>
            <input type='text' id='passri' name='pasi_ri'><br>
            Konfirmoni password-in e ri:<br>
            <input type='text' id='passrikonf' name='pasi_ri_konf'><br><br>
            <input type='submit' value='Ndrysho' ><br><br>
            </form>
        </div>
    </div>

    <?php
         $id=$_SESSION["id"];
         if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $pv= $_POST["pasi_vjeter"];
            $sql1="SELECT password
            FROM perdorues
            WHERE perdorues.perdorues_id=$id";
            $result1=mysqli_query($conn,$sql1);

            if(empty($_POST["inputPassword"])){
                header('location:settings.php');
                    $_SESSION['response']="Please enter your password.";
                    $_SESSION['res_type']="success";
            }

            while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
             if($row!='' && $row!=$pv){
              echo "<p>pasii gabim</p>";
            }
        }
         }

         
    ?>
    

<?php
    include 'footer.php';
    ?>
   </body>
   </html>