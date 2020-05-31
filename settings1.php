<?php
 session_start();

include 'db_connection.php';

    
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
           
           if(!password_verify ( $pv , $pasivj_db )){
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
              if($sql= mysqli_prepare($conn, "UPDATE perdorues SET perdorues.password=? WHERE perdorues.perdorues_id=$id")) 
                {
                    mysqli_stmt_bind_param($sql, "s", $pasi_ri_db);
                    if(mysqli_stmt_execute($sql)){
                        header('location:settings.php');
                        $_SESSION['response']="Ndryshimi u krye.";
                        $_SESSION['res_type']="success";
                    }
                    else{
                        header('location:settings.php');
                        $_SESSION['response']="Ndryshimi nuk mundi te kryhet.";
                        $_SESSION['res_type']="danger";
                    }
                    mysqli_stmt_close($sql);

                }
              
            else{
                header('location:settings.php');
                $_SESSION['response']="Ndryshimi nuk mundi te kryhet.";
                $_SESSION['res_type']="danger";
            }
           }

       }
        }


        if(isset($_POST['ndrysho_p'])){

            if(empty($_POST['pershkrim'])){
                header('location:settings.php');
                    $_SESSION['response']="Ju lutem vendosni pershkrimin.";
                    $_SESSION['res_type']="danger";
            }
            else{
                $pershkrim=$_POST['pershkrim'];
                $id=$_SESSION['id'];
                if($sql= mysqli_prepare($conn, "UPDATE pedagog SET pedagog.pershkrim=? WHERE pedagog.id_pedagog_fk=$id")) 
                {
                    mysqli_stmt_bind_param($sql, "s", $pershkrim);
                    if(mysqli_stmt_execute($sql)){
                        header('location:settings.php');
                        $_SESSION['response']="Ndryshimi u krye.";
                        $_SESSION['res_type']="success";
                    }
                    else{
                        header('location:settings.php');
                        $_SESSION['response']="Ndryshimi nuk mundi te kryhet.";
                        $_SESSION['res_type']="danger";
                    }
                    mysqli_stmt_close($sql);

                }

              
                else{
                    header('location:settings.php');
                    $_SESSION['response']="Ndryshimi nuk mundi te kryhet.";
                    $_SESSION['res_type']="danger";
                }

            }
        }
        
        
        if(isset($_POST['ndrysho_foto'])){
            
            $id=$_SESSION["id"];
            $sql4 = "SELECT p.emer, p.mbiemer FROM perdorues p
            WHERE p.perdorues_id = $id;";
            $result4=mysqli_query($conn,$sql4);

            while($row=mysqli_fetch_array($result4,MYSQLI_ASSOC)){
                $emri=$row["emer"];
                $mbiemri=$row["mbiemer"];
            }
            $target_dir = 'assets/images/foto-pedagog/';
            $target_file = $target_dir.$emri.$mbiemri.'.jpg';
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $uploadOk = 1;

            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }

            if($imageFileType !='jpg'){
                $uploadOk = 0;
            }

            if ($uploadOk == 0) {
                    header('location:settings.php');
                    $_SESSION['response']="Ndryshimi nuk mundi te kryhet.";
                    $_SESSION['res_type']="danger";
              } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    header('location:settings.php');
                    $_SESSION['response']="Ndryshimi u krye.";
                    $_SESSION['res_type']="success";
                    
                } else {
                    header('location:settings.php');
                    $_SESSION['response']="Ndryshimi nuk mundi te kryhet.";
                    $_SESSION['res_type']="danger";
                }
              }

        }
        if(isset($_POST['fshi_foto'])){
            $id=$_SESSION["id"];
            $sql4 = "SELECT p.emer, p.mbiemer FROM perdorues p
            WHERE p.perdorues_id = $id;";
            $result4=mysqli_query($conn,$sql4);

            while($row=mysqli_fetch_array($result4,MYSQLI_ASSOC)){
                $emri=$row["emer"];
                $mbiemri=$row["mbiemer"];
            }
            $target_dir = 'assets/images/foto-pedagog/';
            $target_file = $target_dir.$emri.$mbiemri.'.jpg';
            if (file_exists($target_file)) {
                unlink($target_file);
                header('location:settings.php');
                $_SESSION['response']="Foto u fshi.";
                $_SESSION['res_type']="success";
              }
              else{
                header('location:settings.php');
                $_SESSION['response']="Ju nuk keni foto.";
                $_SESSION['res_type']="danger";
              }
        }

       

      
    




?>