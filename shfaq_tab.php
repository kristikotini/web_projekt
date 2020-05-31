<?php
include "db_connection.php";
session_start();

if(isset($_GET["lende"]) && isset($_GET["grupi"])){
   
    $lenda=$_GET["lende"]; 
    $grupi = $_GET["grupi"];
              // Marrja id se lendes
               $id_lende="select id_lende from lenda where emer='$lenda'";
               $res1 = $conn -> query($id_lende);
               $row = $res1->fetch_assoc();
               $id_lende=$row['id_lende'];
               $_SESSION['id_lende']=$id_lende;               
               // Marrja id se programit
               $qury_id_prog = 'select id_programi_fk from lenda where id_lende = '.$id_lende.'; ';
               $res1 = $conn -> query($qury_id_prog);
               $row = $res1->fetch_assoc();
               $id_programi=$row['id_programi_fk'];
               // Query kompleks                 
              $query_comp = 'select perdorues.emer, perdorues.mbiemer
              from student
              join perdorues
              on perdorues.perdorues_id=student.id_student_fk  and student.grupi="'.$grupi.'"
              inner join lenda
              on lenda.id_programi_fk=student.id_programi_fk and lenda.id_programi_fk='.$id_programi.' and lenda.id_lende='.$id_lende.'
              left join nota
              on student.id_student_fk=nota.id_perdorues_fk and nota.id_lende_fk='.$id_lende.'
              where nota.id_perdorues_fk is null
              group by student.id_student_fk
              order by student.id_student_fk;';
              echo "<table class='table table-hover'>";
              echo "<tbody>";
               $usersresult = $conn -> query($query_comp);
              if($usersresult->num_rows == 0){
                echo('<h6 style="align-items:center">Grupi i vendosur nuk eshte i sakte ose notat e ketij grupi jane vendosur.</h6>');
              }
               if ($usersresult->num_rows > 0) {
                 
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
      </tr>
       ";
     } 
     
 } 
 echo("
     <tr>
     <td colspan='3' >
     <strong><h6>Mbartes</h6></strong>
     </td>
     </tr>
     ");

                $users = "select a.emer, a.mbiemer
                              from perdorues a
                              JOIN nota
                             on perdorues_id=id_perdorues_fk and nota<5
                            and id_lende_fk=$id_lende";
              $usersresult = $conn -> query($users);   
              if ($usersresult->num_rows > 0) {
                while ($row = $usersresult->fetch_assoc()) { 
                  $emer=$row["emer"];
                  $mbiemer=$row["mbiemer"];
              echo "<tr>
              <td>
              <input type='text' name='emerb[]'  value=".$emer." readonly>
              </td>

              <td>
              <input type='text'  name='mbiemerb[]' value=".$mbiemer."  readonly>
              </td>

              <td>
              <input type='number' name='notab[]' min='1' max='10' required>
              </td>
              </tr>";
              } 
              
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

?>