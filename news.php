<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kryefaqe</title>
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
       <div class="container my-5 py-5 z-depth-1 mx-auto ">
            <section class="text-center px-md-5 mx-md-5 dark-grey-text flex-grow-1">
            <h1 class="font-weight-bold">Lajme dhe Evente</h1>
            </section>
        </div>

    <?php
    include 'show_news.php';
    include 'footer.php';
    ?>
</body>

</html>

