<!-- STRUKTURA MASTER -->
<html>
<head>
  <style>
    body {
      background: #f7f7f7;
      font-family: Arial;
      padding: 0px 0;

    }

    h4 {
      color: #3696dc;
      text-transform: uppercase;
      text-align: center;
      letter-spacing: 2px;
    }

    p {
      font-size: 14px;
      line-height: 24px
    }

    ul li {
      list-style: none
    }

    .container {
      width: 100%;
      margin: 0 auto;
      display: inside;
      list-style: none
    }

    .columns {
      margin: 0 6px 5px;
      padding: 50px 0px;
      box-shadow: 0 1px 3px rgb(0, 0, 0, 12),
        0 1px 3px rgb(0, 0, 0, 24);
      background: #fff;
      border-radius: 10px;
      flex-basis: 33%
    }

    .card {
      padding: 0px 20px
    }



    @media screen and (max-width: 768px) {
      .container {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>
<?php   
    include 'db_connection.php';
    ?>
<div class="container text-center">
        <?php
        $akm=1;
        $sql3="SELECT emer,viti_lendes,kredite,kohezgjatja
        FROM lenda 
        WHERE id_programi_fk = 8
        ORDER BY lenda.viti_lendes ";
                   
            $result3=mysqli_query($conn,$sql3);

            $lendetarr=array();

        ?>
    
</div>



<div class="container">
<div class="columns">
<div class="card">

<?php
echo "<h4>Viti i pare</h4>";
array_push($lendetarr,array("Emri i lendes","Viti", "Kredite","Kohezgjatja"));

while($row=mysqli_fetch_array($result3,MYSQLI_BOTH)){
     array_push($lendetarr,array($row["emer"],$row["viti_lendes"],$row["kredite"],$row["kohezgjatja"]));
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
      if($lendetarr[$i][1]!=$lendetarr[$i+1][1]){
        $vazhd=$i+1;
        break;
    }
  }
echo "</table>";

?>
</div>
</div>


<div class="columns">
<div class="card">
<?php
            echo "<h4>Viti i dyte</h4>";

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
              ?>
</div>
</div>
</div>
</body>
</html>