<?php
 session_start();

include 'db_connection.php';

if(isset($_POST['ndrysho_not'])){

    if(!isset($_POST['lenda_select'])) {
        header('location:ndrysho_not.php');
        $_SESSION['response']="Ju lutem zgjidhni lenden.";
        $_SESSION['res_type']="danger";
    }
    else{
        $lenda=$_POST['lenda_select'];
        $emri=$_POST['emri'];
        $mbiemri=$_POST['mbiemri'];
        $nota=$_POST['nota'];

        $sql="select lenda.id_lende from lenda where lenda.emer='$lenda';";

        $result=mysqli_query($conn,$sql);


        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $id_lende=$row["id_lende"];
        }

        $sql1="select perdorues.perdorues_id from perdorues where perdorues.emer='$emri' and perdorues.mbiemer='$mbiemri'";

        $result1=mysqli_query($conn,$sql1);
        while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
            $id_student=$row["perdorues_id"];
        }
        $sql3="select nota.nota from nota WHERE id_perdorues_fk=$id_student and id_lende_fk=$id_lende";
        $result3=mysqli_query($conn,$sql3);
        $row=mysqli_fetch_array($result3,MYSQLI_ASSOC);
        if(mysqli_num_rows($result3)==0){
            header('location:ndrysho_not.php');
            $_SESSION['response']="Nota nuk u ndyshua. Ju lutem sigurohuni qe te dhenat jane te sakta.";
            $_SESSION['res_type']="danger";
        }
        else{
        $nota_vjeter = $row['nota'];
        $sql2="UPDATE nota SET nota=$nota WHERE id_perdorues_fk=$id_student and id_lende_fk=$id_lende";
         if(mysqli_query($conn,$sql2)){
            header('location:ndrysho_not.php');
            $_SESSION['response']="Nota u ndryshua nga ".$nota_vjeter." ne ".$nota.".";
            $_SESSION['res_type']="success";
        }
        else{
           header('location:ndrysho_not.php');
            $_SESSION['response']="Nota nuk u ndyshua. Ju lutem sigurohuni qe te dhenat jane te sakta.";
            $_SESSION['res_type']="danger";
        }
    }


    }
}

?>