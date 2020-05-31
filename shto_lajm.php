<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rreth Nesh</title>
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <script src="assets\js\jquery-3.4.1.min.js"></script>
        <script src="assets\js\popper.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\fonts\all.min.js"></script>
        <script src="assets/js/map.js"></script>
        <link rel="stylesheet" href="assets\css\custom.css">
        <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
        <style>
            #map {
            height: 500px;
            padding: 3px;
        }
        </style>
        
    </head>

    <body>
    <?php
        session_start();
        include 'header.php';
    ?>
       <div class="form-group" style="width:500px">
  <label for="exampleFormControlTextarea1">Pershkrimi</label>
  <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"></textarea>
</div>
        
        
    <?php
        include 'footer.php';
    ?>
</body>


</html>

