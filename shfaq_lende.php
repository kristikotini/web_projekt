<?php
    include "db_connection.php";
                            
     $id=$_SESSION['id'];

     $sql="SELECT distinct emer FROM lenda, mesimdhenia where id_pedagog_fk=$id and id_lende=id_lende_fk";
                          
    $result=$conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $i=$row['emer'];
                echo " <option value='".$i."'>".$i."</option>";
            }
        }
?>