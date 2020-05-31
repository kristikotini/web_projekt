<?php include 'db_connection.php'; 
session_start();?>
<!DOCTYPE html>
<html lang="en">   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <script src="assets\js\jquery-3.4.1.min.js"></script>
        <script src="assets\js\popper.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\fonts\all.min.js"></script>
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
       <script type="text/javascript" src="https://use.fontawesome.com/b9bdbd120a.js"></script> 
       <style>
        .body{
            display: flex;
            min-height: 80vh;
            max-height: 90vh;
        }
        .profile{
            display: inline;
            text-align: center;
            /* background-color: #e1d7ca; */
        }
        .main{
            display: inline;
            text-align: center;
            background-color: rgb(243, 239, 239);
            padding-top: 1em;
        }
        .photo{
            width: 100%;
            margin-top: 5em;
            max-height: 20em;
            padding-bottom: 2em;
            border-bottom: solid #ac997f  1px;
        }
        img{
            border-radius: 9px;
        }
        .user-data{
            text-align: left;
            margin: 1em 4em;
        }
        .line{
            display: block;
        }
        .settings{
            margin-top: 1em;
            color: #605c56 !important;
            background-color: rgb(243, 239, 239) !important;
            border-color: rgb(243, 239, 239) !important;
        }
        .settings:hover{
            color: #33322f !important;
            background-color: #d2cfcf !important;
            border-color: #d2cfcf !important;
        }
        .button-block{
            display: flex;
            justify-content: space-between;
            width: 90%;
            height: 100px;
            margin: 4em auto;
        }
        .link{
            display: inline-block;
            background-color: rgb(187, 31, 31);
            color: #fff;
            height: 100%;
            width: 47%;
            text-transform: uppercase;
            font-size: 20px;
            line-height: 4em;
            border-radius: 15px;
            font-weight: 400;
        }
    </style>
</head>
<body>
<?php
    include 'header.php';
  ?>
    <div class="body">
        <div class="profile col-lg-3">
            <div class="photo">
                <img src="https://img.icons8.com/bubbles/2x/system-administrator-female.png" alt="adm">
            </div>
            <div class="user-data">
                <div class="line"><b>Emri:</b> admin</div>
                <div class="line"><b>Email:</b> admin@gmail.com</div>
                <a class="btn btn-light settings" href="settings.php">Settings</a>
            </div>
        </div>
        <div class="main col-lg-9">
            <div class="button-block">
                <a href="menaxhoprogram.php" class="btn link">Menaxho Program</a>
                <a href="menaxholende.php" class="btn link">Menaxho Lëndë</a>
            </div>
            <div class="button-block">
                <a href="menaxhopedagog.php" class="btn link">Menaxho Pedagog</a>
                <a href="menaxhostd.php" class="btn link">Menaxho Student</a>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
  ?>
</body>
</html>