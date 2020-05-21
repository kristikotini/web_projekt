<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <script src="assets\js\jquery-3.4.1.min.js"></script>
    <script src="assets\js\popper.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\fonts\all.min.js"></script>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
    <script type="text/javascript" src="js/pedagog.js"></script>
    
   <title>Pedagog</title>
   <style>
    
    .carousel-inner img {
      width: 700px;
      height: 400px;
    }
    </style>
</head>
<body >
<?php
    include 'header.php';
  ?>
  <div class="container-fluid" >
    <div class="row">
      <div class="col-3" >
        <img src="assets/images/pedagog/rami1.jpg" class=" img img-thumbnail pt-3 m-3" id="profil" style="width: 250px; height: 250px; position: absolute;">

      </div>
      <div class="col-7 pt-3 mt-3">
        <h1 class="display-4">Louis Dega</h1>
        <p class="font-weight-light">Ka mbaruar studimet Bachelor dhe Master në Universitetin Shtetëror të Voronezhit, Rusi, në profilin "Siguria e Sistemeve të Informacionit", si dhe vazhdon studimet e doktoraturës pranë Fakultetit të Shkencave të Natyrës, Universiteti i Tiranës.</p>
    
        <h5>Ideal</h5>
        
        <p class="font-weight-light"><i>Man grows used to everything, the scoundrel.
          To live without Hope is to Cease to live.
          If there is no God, everything is permitted.</i>  </p>

      </div>
      <div class="col-2 mt-3" style="background-color: rgb(187, 31, 31); color: whitesmoke; ">
        <h5 class="pt-3 font-weight-light">Aktiviteti mesimor</h5><hr>
        <div >
           <ul>
            <li id="lenda" style="list-style-type: none;color: gainsboro; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: x-large;">Lendet</li>
           <div id="lendet" style="color:whitesmoke;list-style-type:square; ">
            <li>Algjeber</li>
            <li>Matematike e Aplikuar</li>
            <li>Databaze ne Oracle</li>
            <li>Algjeber</li>
           
           </div>
          </ul>
          
          

        </div>

      </div>

    </div>



    <div class="row" style="background-color: rgb(243, 239, 239); ">
      <div class="col-1  pt-3 mt-5" style="color: cadetblue;">
        <ul style="list-style-type: none;">
          <li id="grada">Grada</li>
          <br>
          <li id="adr">Adresa</li>
          <br>
          <li id="web">Website</li>
          <br>
          <li id="em">Email</li>
          <br>
          <li id="tel">Tel</li>

        </ul>
      </div>
      <div class="col-2  pt-3 mt-5" >
        <ul style="list-style-type: none;" >
          <li id="grada1">Prof.Dr</li>
          <br>
          <li id="adr1">Godina C/204</li>
          <br>
          <li id="web1">www.obobo.com</li>
          <br>
          <li id="em1">cheguevara@gmail.com</li>
          <br>
          <li id="tel1">000 xxxxxxx</li>

        </ul>
      </div>

  
    <div class="col-7 " >
     <!--
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 8s00px;padding-left: 90px;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
         <a href="botime.html" target="_blank"><img class="d-block w-100" src="assets/images/pedagog/rami1.jpg" alt="First slide"></a>   
          </div>
          <div class="carousel-item">
            <a href="botime.html" target="_blank"><img class="d-block w-100" src="assets/images/pedagog/rami1.jpg" alt="Second slide"></a>   
          </div>
          <div class="carousel-item">
         <a href="botime.html" target="_blank"><img class="d-block w-100" src="assets/images/pedagog/rami1.jpg" alt="Third slide"></a>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      -->
    </div>
     

     <div class="col-2 mb-3"  style="background-color: rgb(187, 31, 31)">
       <div class="pt-3 mt-3">
        <div >
          <ul>
           <li id="lenda" class="prog" style="list-style-type: none;color: gainsboro; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: x-large;">Programe</li>
            
           <div id="lendet" style="color:whitesmoke;list-style-type:square; ">
           <li id="bach">Bachelor
             <ul id="bachel">
               <li>Informatike</li>
               <li>TIK</li>
             </ul>
           </li>
           <li id="mast">Master
             <ul id="mastel">
               <li>Shkencor</li>
               <li>Profesional</li>
             </ul>
           </li>
          </div>
         </ul>
         
         

       </div>

        <a href="nota.php" class="btn btn-outline-danger btn-block  mt-5 mb-5" >Ngarko nota</a>
       </div>
       <div class="pt-3 mt-3 " style="position: absolute; bottom: 0; right: 15px; color: whitesmoke;">
         <p><a href="#"  style="color: whitesmoke;">Settings</a></p>
        
       </div>




      </div>

    </div>

  </div>
  <?php
    include 'footer.php';
  ?>


</body>
</html>