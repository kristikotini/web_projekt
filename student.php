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

<div class="container-fluid">
    <div class="row">
        <!--<div class="col-sm-8">-->
        <!--</div>-->
        <div class="col-sm-4">
        <img src="assets\images\student.png" class="float-left rounded" alt="Student logo" width="100" height="100"> 

        <div id="te_dhena">
        <?php
            $id=$_SESSION["id"];

            $sql1="SELECT emer,mbiemer
                  FROM perdorues
                  WHERE perdorues.perdorues_id=$id";
            $result1=mysqli_query($conn,$sql1);

            while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                echo "<h2>".$row["emer"]." ".$row["mbiemer"]."</h2>";
            }

            $sql2="SELECT grupi,data_regjistrim,program.emer,program.nivel,viti_std,id_programi_fk
                  FROM student JOIN program
                  ON student.id_programi_fk=program.id_programi
                  WHERE student.id_student_fk=$id";
            $result2=mysqli_query($conn,$sql2);
        
            while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                echo "<p> Grupi: ".$row["grupi"].", "."Regjistruar me: ".
                $row["data_regjistrim"].", ".$row["emer"].", ".$row["nivel"].", Ne vitin: ". $row["viti_std"]."</p>";
                $program=$row["id_programi_fk"];
            }

        ?>   
    </div>
        </div>
    </div>
</div>
    
<div class="container">
    <div id="tab_nota">
        <h3>Struktura akademike</h3>
        <?php
            $sql3="SELECT emer,viti_lendes,kredite,kohezgjatja,nota.nota
                   FROM lenda LEFT JOIN nota
                   ON nota.id_perdorues_fk=$id AND lenda.id_lende=nota.id_lende_fk
                   WHERE lenda.id_programi_fk=$program
                   ORDER BY lenda.viti_lendes ";
            $result3=mysqli_query($conn,$sql3);

            $lendetarr=array();
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
                      echo $lendetarr[$i][$j];
                      echo "</td>";
                  }
                  echo "</tr>";
              }
            echo "</table>";
        ?>
    </div>
</div>

<div class="container">

<br>
    </div id="mesatarja">
        <?php
            $mesatarja;
            $shuma=0;
            $kredite=0;
            for($i=1;$i<sizeof($lendetarr);$i++){
                if($lendetarr[$i][4]!=""){
                    $shuma=$shuma+($lendetarr[$i][2]*$lendetarr[$i][4]);
                    $kredite+=$lendetarr[$i][2];
                }
            }

            if($kredite>0){
                $mesatarja=$shuma/$kredite;
                echo "<p>Mesatarja e ponderuar: ".$mesatarja."</p>";
            }
            
        ?>
    </div>
</div>
<div class="container ">
    <div id="logout">
        <button  class="btn btn-dark " ><a href="log_out.php">LogOut</a></button>
    </div>
</div>


<br>

   <?php
    include 'footer.php';
    ?>
   </body>
   </html>