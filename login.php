
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <script src="assets\js\jquery-3.4.1.min.js"></script>
    <script src="assets\js\popper.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\fonts\all.min.js"></script>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
</head>

<body >

    <div class="page-wrapper">
    <!--Navbar-->
<?php
    include "header.php";

 
 if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
     header("location: index.php");
     exit;
 }
 
?>
<!--Login Form-->
<div class="d-flex align-items-center justify-content-center flex-grow-1" style="background-image: url(assets/images/uni-banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5 login-card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-signin" action="check_login.php" method="POST">
                            <div class="form-label-group">
                                <label for="inputEmailUsername">Email address / Username</label>
                                <input type="text" name="inputEmailUsername" id="inputEmailUsername" class="form-control"
                                    placeholder="Email address/Username" required autofocus>
                            </div>
                            <div class="form-label-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password"
                                    required>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase mt-4 btn-login" type="submit">Sign
                                in </button>
                            <?php
                                
                                if(isset($_SESSION["password_err"])){
                                    $msg =implode($_SESSION["password_err"]) ;
                                    echo($msg);
                                }
                                    else if(isset($_SESSION["username_err"])){
                                        $msg =implode($_SESSION["username_err"]);
                                        echo($msg);
                                    }else if(isset($_SESSION["sql_err"])){
                                        $msg =implode($_SESSION["sql_err"]);
                                        echo($msg);
                                    }
                                    session_unset();

                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
</div>
</body>

</html>