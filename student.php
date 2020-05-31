<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil Student</title>
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
    <!-- fillimi i sesionit dhe kontrollimi i rolit -->
    
    <?php
      session_start();
     if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["roli"]!=2){
         
             header("location:index.php");
             exit();
         }
         else if(!isset($_SESSION["loggedin"])){
            header("location:index.php");
            exit();
        }
    
         
    include 'header.php';
    include 'db_connection.php';
    ?>


<br>
<div class="container text-center">

<div class="col-md-4 float-right">
  <button  class="btn btn-primary bt1"  onclick="window.location.href='log_out.php'">Logout</button>
  <button  class="btn btn-primary bt1" onclick="window.location.href='settings.php'">Settings</button>
 
  </div>
    <div class="row">
     
        <div id="te_dhena">
        <?php
            $id=$_SESSION["id"];

            $sql1="SELECT emer,mbiemer,gjini
                  FROM perdorues
                  WHERE perdorues.perdorues_id=$id";
            $result1=mysqli_query($conn,$sql1);

            while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                $emri=$row["emer"];
                $mbiemri=$row["mbiemer"];
                $gjini=$row["gjini"];
            }
        ?>
        <div class="col-md-2 float-left">
        <?php
            if($gjini=='f'){
                echo "<img src='assets\images\student.png' class=' rounded' alt='Student logo' width='100' height='100'> ";
            }
            else{
                echo "<img src='assets\images\student1.png' class=' rounded' alt='Student logo' width='100' height='100'> ";
            }
        ?>
        </div>

        <div class="col-md-10 float-right">
        <?php

            echo "<h2 class='text-center text-dark mt-2'>".$emri." ".$mbiemri."</h2>";


            $sql2="SELECT grupi,data_regjistrim,program.emer,program.nivel,viti_std,id_programi_fk
                  FROM student JOIN program
                  ON student.id_programi_fk=program.id_programi
                  WHERE student.id_student_fk=$id";
            $result2=mysqli_query($conn,$sql2);
        
            while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                echo "<h6 class='text-center text-dark mt-2'>Grupi: ".$row["grupi"].", "."Regjistruar me: ".
                $row["data_regjistrim"].", ".$row["emer"].", ".$row["nivel"].", Ne vitin: ". $row["viti_std"]."</h6>";
                $program=$row["id_programi_fk"];
                $viti_st=$row["viti_std"];
            }

        ?> 
        
        </div>  
        
    </div>
</div>


    
<div class="container text-center">
    <div id="tab_nota">
        <h3 class='text-center text-dark mt-2'>Struktura Akademike</h3>
        <?php
        $akm=1;
            $sql3="SELECT emer,viti_lendes,kredite,kohezgjatja,nota.nota
                   FROM lenda LEFT JOIN nota
                   ON nota.id_perdorues_fk=$id AND lenda.id_lende=nota.id_lende_fk
                   WHERE lenda.id_programi_fk=$program
                   ORDER BY lenda.viti_lendes ";
            $result3=mysqli_query($conn,$sql3);

            $lendetarr=array();
            echo "<h4 class='text-center text-dark mt-2'>Viti i pare</h4>";
            array_push($lendetarr,array("Emri i lendes","Viti","Kredite","Kohezgjatja","Nota"));

            while($row=mysqli_fetch_array($result3,MYSQLI_BOTH)){
                 array_push($lendetarr,array($row["emer"],$row["viti_lendes"],$row["kredite"],$row["kohezgjatja"],$row["nota"]));
            }
            
            echo " <table class='table '>";
                echo "<thead class='thead-dark'>";
                echo "<tr>";
                for($j=0;$j<sizeof($lendetarr[0]);$j++){
                    echo "<th>";
                    echo $lendetarr[0][$j];
                    echo "</th>";
                }
                echo "</tr>";
                echo "</thead>";

              for($i=1;$i<sizeof($lendetarr);$i++){
                  
                echo "<tr>";
                  for($j=0;$j<sizeof($lendetarr[0]);$j++){
                      echo "<td>";
                      if($j==4){
                        if($lendetarr[$i][4]=='')echo "-";
                        else if($lendetarr[$i][4]<5) echo "<h6 style='color: red'>".$lendetarr[$i][$j]."</h6>";
                        else echo $lendetarr[$i][4];
                    }
                        else
                      echo $lendetarr[$i][$j];
                      echo "</td>";
                  }
                  echo "</tr>";
                  if($lendetarr[$i][1]!=$lendetarr[$i+1][1]){
                    $vazhd=$i+1;
                    break;
                }
              }
            echo "</table>";

            echo "<h4 class='text-center text-dark mt-2'>Viti i dyte</h4>";

            echo " <table class='table '>";
                echo "<thead class='thead-dark'>";
                echo "<tr>";
                for($j=0;$j<sizeof($lendetarr[0]);$j++){
                    echo "<th>";
                    echo $lendetarr[0][$j];
                    echo "</th>";
                }
                echo "</tr>";
                echo "</thead>";

              for($i=$vazhd;$i<sizeof($lendetarr);$i++){
                  
                echo "<tr>";
                  for($j=0;$j<sizeof($lendetarr[0]);$j++){
                      echo "<td>";
                      if($j==4){
                        if($lendetarr[$i][4]=='')echo "-";
                        else if($lendetarr[$i][4]<5) echo "<p style='color: red'>".$lendetarr[$i][$j]."</p>";
                        else echo $lendetarr[$i][4];
                    }
                        else
                      echo $lendetarr[$i][$j];
                      echo "</td>";
                  }
                  echo "</tr>";
                  if( ($i+1)!=sizeof($lendetarr) && $lendetarr[$i][1]!=$lendetarr[$i+1][1] ){
                    $vazhd=$i+1;
                    $akm=0;
                    break;
                }
              }
            echo "</table>";

            if($akm==0){

                echo "<h4 class='text-center text-dark mt-2'>Viti i trete</h4>";

                echo " <table class='table '>";
                    echo "<thead class='thead-dark'>";
                    echo "<tr>";
                    for($j=0;$j<sizeof($lendetarr[0]);$j++){
                        echo "<th>";
                        echo $lendetarr[0][$j];
                        echo "</th>";
                    }
                    echo "</tr>";
                    echo "</thead>";
    
                  for($i=$vazhd;$i<sizeof($lendetarr);$i++){
                      
                    echo "<tr>";
                      for($j=0;$j<sizeof($lendetarr[0]);$j++){
                          echo "<td>";
                      
                       if($j==4){
                        if($lendetarr[$i][4]=='')echo "-";
                        else if($lendetarr[$i][4]<5) echo "<p style='color: red'>".$lendetarr[$i][$j]."</p>";
                        else echo $lendetarr[$i][4];
                    }
                    else
                          echo $lendetarr[$i][$j];
                          echo "</td>";
                      }
                      echo "</tr>";
                   
                  }
                echo "</table>";

            }
           
        ?>
    </div>

    <div class='row'>
    <div class="col-md-12 float-right">
        <?php
            $mesatarja;
            $shuma=0;
            $kredite=0;
            for($i=1;$i<sizeof($lendetarr);$i++){
                if($lendetarr[$i][4]!="" && $lendetarr[$i][4]>4){
                    $shuma=$shuma+($lendetarr[$i][2]*$lendetarr[$i][4]);
                    $kredite+=$lendetarr[$i][2];
                }
            }

            if($kredite>0){
                $mesatarja=$shuma/$kredite;
                $mesatarja=round($mesatarja,3);
                echo " <table class='table '>";
                    echo "<thead class='thead-dark float-right'>";
                    echo "<tr>";
                    echo "<th>";
                echo "Mesatarja e ponderuar: ".$mesatarja;
                echo "</th>";
                echo "</tr>";
                echo "</thead>";
                echo "</table>";
            }
            
        ?>
        </div>
    </div>
    </div> 
</div>


<div>
   <?php
    include 'footer.php';
    ?>

</div>
   </body>
</html>
