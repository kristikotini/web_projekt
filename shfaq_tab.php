<?php
include "db_connection.php";
session_start();
if(isset($_GET["lende"])){
   
    $lenda=$_GET["lende"]; 
    
               $id_lende="select id_lende from lenda where emer='$lenda'";
               $res1 = $conn -> query($id_lende);
               $row = $res1->fetch_assoc();
               $id_lende=$row['id_lende'];
               $_SESSION['id_lende']=$id_lende;
               $users = "select a.emer, a.mbiemer
               from perdorues a
               JOIN nota
               on perdorues_id=id_perdorues_fk and nota<5
               and id_lende_fk='$id_lende'";
                 
            
               $usersresult = $conn -> query($users);
               if ($usersresult->num_rows > 0) {
                 echo "<table class='table table-hover'>";
                 echo "<tbody>";
                 while ($row = $usersresult->fetch_assoc()) { 
                   $emer=$row["emer"];
                   $mbiemer=$row["mbiemer"];
                
    
   
      echo "<tr>
     
      <td>
      <input type='text' name='emer[]'  value=".$emer." readonly>
      </td>

      <td>
      <input type='text'  name='mbiemer[]' value=".$mbiemer."  readonly>
      </td>
              
      <td>
      <input type='number' name='nota[]' min='1' max='10' required>
      </td>
       </tr>";
     
     } 
     echo " <td>
     <input type='submit' name='shto_note' value='Shto' class='btn btn btn-outline-danger ml-5'>
     </td>";
    echo  "</tbody>
    <thead>
                 <tr>
                   <th>Emër</th>
                   <th>Mbiemër</th>
                   <th>Nota</th>
                 </tr>
     </thead>
    </table> ";
 } 
         
}

?>