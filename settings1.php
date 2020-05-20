<?php
 session_start();

include 'db_connection.php';

     //$password = password_hash( $_POST['password'], PASSWORD_DEFAULT);
    // if($flag2)
    //               {
    //                   echo " query successful";
    //                   header('location:admin.php');
    //                 $_SESSION['response']="Databaza u plotesua me sukses!";
    //                 $_SESSION['res_type']="success";
    //               }

    
       if(isset($_POST['ndrysho'])){
           if(empty($_POST['pasi_vjeter'])){
               header('location:settings.php');
                   $_SESSION['response']="Ju lutem vendosni passwordin.";
                   $_SESSION['res_type']="danger";
           }
           else if(empty($_POST['pasi_ri'])){
            header('location:settings.php');
            $_SESSION['response']="Ju lutem vendosni passwordin e ri.";
            $_SESSION['res_type']="danger";
           }
           else if(empty($_POST['pasi_ri_konf'])){
            header('location:settings.php');
            $_SESSION['response']="Ju lutem konfirmoni passwordin e ri.";
            $_SESSION['res_type']="danger";
           }

        else{
            $id=$_SESSION["id"];
            $pv= $_POST["pasi_vjeter"];
            $pr=$_POST["pasi_ri"];
            $prk=$_POST["pasi_ri_konf"];
            
            $sql1="SELECT perdorues.password
            FROM perdorues
            WHERE perdorues.perdorues_id=$id";
            $result1=mysqli_query($conn,$sql1);


            while($row=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                $pasivj_db=$row["password"];
           }
           
           $password_v = password_hash($pv, PASSWORD_DEFAULT);

           if($password_v===$pasivj_db){
            header('location:settings.php');
            $_SESSION['response']="Passwordi i vendosur nuk eshte i sakte.";
            $_SESSION['res_type']="danger";
           }
           else if($pr!=$prk){
            header('location:settings.php');
            $_SESSION['response']="Ju lutem vendosni sakte passwordin e ri ne fushat e kerkuara.";
            $_SESSION['res_type']="danger";
           }
           else{
               $pasi_ri_db=password_hash($pr, PASSWORD_DEFAULT);

               $sql=sprintf("UPDATE perdorues 
                      SET perdorues.password='%s'
                      WHERE perdorues.perdorues_id=$id",$pasi_ri_db);

            if(mysqli_query($conn,$sql)){
                header('location:settings.php');
                $_SESSION['response']="Ndryshimi u krye.";
                $_SESSION['res_type']="success";
            }
            else{
                header('location:settings.php');
                $_SESSION['response']="Ndryshimi nuk mundi te kryhet.".mysqli_error($conn);
                $_SESSION['res_type']="danger";
            }
           }

       }
        }
        

       

      
    




?>