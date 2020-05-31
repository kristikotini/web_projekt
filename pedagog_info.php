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
    <script type="text/javascript" src="assets/js/pedagog.js"></script>
    
   <title>Pedagog</title>
</head>
<body >
  <?php
    require_once 'db_connection.php';
    session_start();
    include "header.php";
    if(!isset($_GET["emri"]) || !isset($_GET["mbiemri"])){
      header("location:index.php");
      exit();
  }
 
  ?>
  <div class="container-fluid" >
    <div class="row">
      <div class="col-3" >
      <?php 
           $emri=$_GET['emri'];
           $mbiemri=$_GET['mbiemri'];
          $sql="select gjini
          from perdorues
          where emer='".$emri."' and mbiemer='$mbiemri'";
          $result=$conn->query($sql);
          $row = $result->fetch_assoc();
          $gjini = $row['gjini'];
           unset($_GET['emri']);
           unset($_GET['mbiemri']);

          $sql="SELECT perdorues_id from perdorues where  emer='".$emri."' and mbiemer='".$mbiemri."';";

          $result=$conn->query($sql);
          $row = $result->fetch_assoc();
          $id=$row['perdorues_id'];
            $file_pointer = 'assets/images/foto-pedagog/'.$emri.$mbiemri.'.jpg';
            if (file_exists($file_pointer)) {
                $src = $file_pointer;
            }else {
                if($gjini =='f'){
                    $src = 'assets\images\foto-pedagog\unknown-women.jpg';
                }else $src = 'assets\images\foto-pedagog\unknown-men.jpg';
            }

        echo '<img src="'.$src.'" class=" img img-thumbnail pt-3 m-3" id="profil" style="width: 250px; height: 250px; position: absolute;">';
      ?>
        

      </div>
      <div class="col-7 pt-3 mt-3">
        <?php
          echo  "<h1 class='display-4'>". $emri." ".$mbiemri."</h1>";
        ?>
        <div>
        <?php

            $sql="SELECT pershkrim from pedagog where id_pedagog_fk=".$id.";";
        
            $result=$conn->query($sql);
            if ($result->num_rows > 0) {
          
          while($row = $result->fetch_assoc()){
          echo  "<p >". $row['pershkrim']."</p>";}
        }
      
        ?>
        </div>

      </div>
      <div class="col-2 mt-3" style="background-color: rgb(187, 31, 31); color: whitesmoke; ">
        <h5 class="pt-3 font-weight-light">Aktiviteti mesimor</h5><hr>
        <div >
           <ul>
            <li id="lenda" style="list-style-type: none;color: gainsboro; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: x-large;">Lendet</li>
           <div id="lendet" style="color:whitesmoke;list-style-type:square; ">
           <?php

            $sql="SELECT DISTINCT l.emer from lenda l, mesimdhenia m where m.id_pedagog_fk=$id and l.id_lende=m.id_lende_fk";
        
            $result=$conn->query($sql);
            if ($result->num_rows > 0) {
          
          while($row = $result->fetch_assoc()){
       
            echo "<li>".$row['emer']."</li>";
          } 
        } 
                ?>

           </div>
          </ul>

       

        </div>

      </div>

    </div>



    <div class="row" style="background-color: rgb(243, 239, 239); ">
      <div class="col-1  pt-3 mt-5" style="color: cadetblue;">
        <ul style="list-style-type: none;">
          <li id="gradaa">Grada</li>
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
      <div class="col-9  pt-3 mt-5" >
          <?php

                $sql="SELECT grada, adresa, website, email, tel from perdorues,pedagog where (perdorues_id=$id and id_pedagog_fk=$id) ";
            
                $result=$conn->query($sql);
                if ($result->num_rows > 0) {
              
              while($row = $result->fetch_assoc()){  ?>

         <ul style="list-style-type: none;" >
          <li id="grada1"><?php echo $row['grada']; ?></li>
          <br>
          <li id="adr1"><?php echo $row['adresa']; ?></li>
          <br>
          <li id="web1"><?php echo $row['website']; ?></li>
          <br>
          <li id="em1"><?php echo $row['email']; ?></li>
          <br>
          <li id="tel1"><?php echo $row['tel']; ?></li>

        </ul>
        <?php
                      }
                    }
                  ?>
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
      </div>

    </div>

  </div>

                </div>
  <?php
    include 'footer.php';
  ?>


</body>
</html>