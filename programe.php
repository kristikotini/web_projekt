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
    <?php   
    include 'header.php';
    include 'db_connection.php';
    ?>
<br>
    
<!-- <div class="container">
    <div id="tab_nota">
        <h3>Struktura akademike</h3>
        <?php
            // $sql3="SELECT emer,viti_lendes,kredite,kohezgjatja,nota.nota
            //        FROM lenda LEFT JOIN nota
            //        ON nota.id_perdorues_fk=$id AND lenda.id_lende=nota.id_lende_fk
            //        WHERE lenda.id_programi_fk=$program
            //        ORDER BY lenda.viti_lendes ";
            // $result3=mysqli_query($conn,$sql3);

            // $lendetarr=array();
            // array_push($lendetarr,array("Emri i lendes","Viti","Kredite","Kohezgjatja","Nota"));

            // while($row=mysqli_fetch_array($result3,MYSQLI_BOTH)){
            //      array_push($lendetarr,array($row["emer"],$row["viti_lendes"],$row["kredite"],$row["kohezgjatja"],$row["nota"]));
            // }
            
            // echo " <table class='table '>";
            //     echo "<thead class='thead-dark'>";
            //     echo "<tr>";
            //     for($j=0;$j<sizeof($lendetarr[0]);$j++){
            //         echo "<th>";
            //         echo $lendetarr[0][$j];
            //         echo "</th>";
            //     }
            //     echo "</tr>";
            //     echo "</thead>";
            //   for($i=1;$i<sizeof($lendetarr);$i++){
            //       echo "<tr>";
            //       for($j=0;$j<sizeof($lendetarr[0]);$j++){
            //           echo "<td>";
            //           echo $lendetarr[$i][$j];
            //           echo "</td>";
            //       }
            //       echo "</tr>";
            //   }
            // echo "</table>";
        ?>
    </div>
</div> -->
<br>

   <?php
    include 'footer.php';
    ?>
   </body>
   </html>