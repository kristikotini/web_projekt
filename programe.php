<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programet</title>
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
  <script src="assets\js\jquery-3.4.1.min.js"></script>
  <script src="assets\js\popper.min.js"></script>
  <script src="assets\js\bootstrap.min.js"></script>
  <script src="assets\fonts\all.min.js"></script>
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/loren.css">
  <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
  <style>
    #strukturaInfBSc {
      display: none;
      width: fit-content;
    }

    #strukturaTikBSc {
      display: none;
      width: fit-content;
    }

    #strukturaInfMSc {
      display: none;
      width: fit-content;
    }

    #strukturaTikMSc {
      display: none;
      width: fit-content;
    }

  </style>

</head>


<body>
  <?php
  include 'header.php';
  include 'db_connection.php';
  ?>
  <br>
  <div class="card mb-3 shadow lg-3 mb-5 bg-white rounded">
    <div class="card-body " id="bg">
      <h2 class="card-title text-center ">Programet Bachelor</h2><br>
      <?php
      $sql = "SELECT emer,pershkrimi
                   FROM program
                   WHERE nivel = 'Bachelor' ";

      $result = mysqli_query($conn, $sql);
      $c = 1;
      $tmp = 1;

      while ($row = mysqli_fetch_array($result)) {
        if ($c==1){
          $ahref = "#strukturaInfBSc";
          $pid = "BSc";

        }else if ($c==2){
          $ahref = "#strukturaTikBSc";  
          $pid = "TikBSc";
        }else{
          $ahref = "#";   
          $pid = "#";

        }
        $c++;
    echo'<div class="container mt-5">
        <section class="dark-grey-text">
          <div class="row align-items-center"> 
            <div class="col-lg-5 col-xl-4"> 
              <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                <img class="img-fluid" src="assets\images\photo-programe\programB'.$tmp.'.jpg" alt="Sample image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            </div>
            <div class="col-lg-7 col-xl-8">
              <h4 class="font-weight-bold mb-3 " style="color:#8E040E"><strong>' . $row["emer"] . '</strong></h4>
              <p class="dark-grey-text">' . $row["pershkrimi"] . '</p>
              <a href="'.$ahref.'"  class="btn btn-primary btn-md mx-0 btn-rounded btn-login" id="'.$pid.'">Shiko Strukturen</a>
            </div>     
          </div>
          <hr class="my-5">   
        </section>
      </div>';
      $tmp++;
      }

      ?>
      <br>
    </div>
    <div id="strukturaInfBSc">
      <h2 class='text-center'>Struktura Informatike</h2>
      <?php
      include 'strukturaInfBSc.php';
      ?>
    </div>
  </div>
  <div id="strukturaTikBSc"><br>
    <h2 class='text-center'>Struktura TIK</h2>
    <?php
    include 'strukturaTikBSc.php';

    ?>
  </div>
  <br>
  <div class="card mb-3 shadow lg-3 mb-5 bg-white rounded">
    <div class="card-body" id="bg2">
       <h1 class="card-title text-center offset-1">Programet Master</h1> 
      <?php
      $sql2 = "SELECT emer,pershkrimi
                   FROM program
                   WHERE nivel = 'Master i Shkencave' ";


      $result2 = mysqli_query($conn, $sql2);

      $c = 1;
      $tmp = 1;
      while ($row = mysqli_fetch_array($result2)) {
        if ($c==1){
          $ahref = "#strukturaInfMSc";
          $pid = "MSc";

        }else if ($c==2){
          $ahref = "#strukturaTikMSc";  
          $pid = "TikMSc";
        }else{
          $ahref = "#";   
          $pid = "#";

        }
        $c++;

        echo'<div class="container mt-5">
        <section class="dark-grey-text">
          <div class="row align-items-center"> 
            <div class="col-lg-5 col-xl-4"> 
              <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                <img class="img-fluid" src="assets\images\photo-programe\programM'.$tmp.'.jpg" alt="Sample image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            </div>
            <div class="col-lg-7 col-xl-8">
              <h4 class="font-weight-bold mb-3 " style="color:#8E040E"><strong>' . $row["emer"] . '</strong></h4>
              <p class="dark-grey-text">' . $row["pershkrimi"] . '</p>
              <a href="'.$ahref.'"  class="btn btn-primary btn-md mx-0 btn-rounded btn-login" id="'.$pid.'">Shiko Strukturen</a>
            </div>     
          </div>
          <hr class="my-5">   
        </section>
      </div>';
      $tmp++;
      }

      ?>
      
    </div> 
    <div id="strukturaInfMSc"><br>
      <h2 class='text-center'>Struktura Informatike MSc</h2>
      <?php
      include 'strukturaInfMSc.php';
      ?>
    </div>
    <div id="strukturaTikMSc"><br>
      <h2 class='text-center'>Struktura TIK MSc</h2>
      <?php
      include 'strukturaTikMSc.php';
      ?>
    </div>
  <br>
  <script>
    $(document).ready(function() {
      $("#BSc").click(function() {
        $("#strukturaInfBSc").toggle(500);
      });
    });
    $(document).ready(function() {
      $("#TikBSc").click(function() {
        $("#strukturaTikBSc").toggle(500);
      });
    });

    $(document).ready(function() {
      $("#MSc").click(function() {
        $("#strukturaInfMSc").toggle(500);
      });
    });
    $(document).ready(function() {
      $("#TikMSc").click(function() {
        $("#strukturaTikMSc").toggle(500);
      });
    });
  </script>
  </div>

  <?php
  include 'footer.php';
  ?>
</body>

</html>