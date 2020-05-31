<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lajm</title>
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <script src="assets\js\jquery-3.4.1.min.js"></script>
        <script src="assets\js\popper.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\fonts\all.min.js"></script>
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
    </head>

    <body style="height:100%">
    <?php
    
    session_start();
    include 'header.php';
    if(isset($_GET['data'])){
        $data = $_GET['data'];
        $directory = 'lajme';
  echo('     <div class="container mt-5">
              <section class="text-justify">');
              $myfile = fopen($directory.'/'.$data.'.txt', "r") or die("Unable to open file!");
              $row = 0;
              $p =1;
              while(!feof($myfile)) {
                  $info =  fgets($myfile);
                  if($row == 0) {}
                  else if($row ==1){
                      echo(
                          '<h4>'.$info.'</h4>'
                      );
                  }else if($row ==2){
                      echo(' <h1 class="font-weight-bold">'.$info.'</h1>');
                  }else {echo('<p>'.$info.'</p>');}
                  $row++;
                }
                fclose($myfile);
                echo(
                  '                  </section>
                  <!--Section: Content-->
                  </div>'
                );
          }else header("location:news.php");
   ?>

    <?php
    include 'footer.php';
    ?>

</body>

</html>

