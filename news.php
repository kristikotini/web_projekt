<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lajme</title>
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <script src="assets\js\jquery-3.4.1.min.js"></script>
        <script src="assets\js\popper.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\fonts\all.min.js"></script>
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
    </head>

    <body>
    <?php
    session_start();
    include 'header.php';
   ?>
   
   <?php if (isset($_SESSION['response'])){ ?>
        <div class="alert alert-<?= $_SESSION['res_type'];  ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;
        </button>
        <?= $_SESSION['response']; ?>
        </div>
        <?php } unset($_SESSION['response']); ?>

       <div class="container my-5 py-5 z-depth-1 mx-auto ">
            <section class="text-center px-md-5 mx-md-5 dark-grey-text flex-grow-1">
            <h1 class="font-weight-bold">Lajme dhe Evente</h1>
            <?php 
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["roli"]==0){
                echo('  
                <button id="modalActivate" type="button" class="btn btn-danger btn-login" data-toggle="modal" data-target="#exampleModalPreview">
                Shto Lajme
              </button>
                ');
                echo('             
                    <!-- Modal -->
                    <div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalPreviewLabel">Shto Lajme</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="form-group">
                            <form action="shto_lajm.php" method="GET" autocomplete="off">
                            <!-- titulli -->
                            <label for="titulli">Titulli</label>
                                            <input type="text" id="titulli" name="titulli" class="form-control" required>
                            <!-- text area-->
                                <label for="pershkrimi">Pershkrimi</label>
                                <textarea class="form-control rounded-0" id="pershkrimi" name="pershkrimi" rows="10" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Mbyll</button>
                            <button type="submit" class="btn btn-primary btn-login">Ruaj Ndryshime</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    <!-- Modal -->
                ');
            }
            
        ?>
            </section>
        </div>

    <?php
    include 'show_news.php';
    include 'footer.php';
    ?>

</body>

</html>

