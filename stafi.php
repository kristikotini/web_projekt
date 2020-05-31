<?php
    require_once "db_connection.php";
    $sql = "SELECT p.emer, p.mbiemer, p.gjini, ped.grada FROM perdorues p
            JOIN pedagog ped 
            WHERE p.perdorues_id = ped.id_pedagog_fk;";

    if($result = $conn -> query($sql)){
        $nr_of_rows = (ceil($result->num_rows/3));
        $i = 0;
        while($row = $result->fetch_assoc()){
            if($i % 3 ==0){
                echo('<div class="row">');
            }
            $emri=$row['emer'];
            $mbiemri=$row['mbiemer'];
            $file_pointer = 'assets/images/foto-pedagog/'.$emri.$mbiemri.'.jpg';
            if (file_exists($file_pointer)) {
                $src = $file_pointer;
            }else {
                $gjini=$row["gjini"];
                if($gjini =='f'){
                    $src = 'assets\images\foto-pedagog\unknown-women.jpg';
                }else $src = 'assets\images\foto-pedagog\unknown-men.jpg';
            }
            
            echo('
            <div class="col-md-4" style="width:800px">
                    <!--Card-->
                    <div class="card testimonial-card" style="width: 350px; margin-top: 30px;">
                    <!--Background color-->
                    <div class="card-up info-color"></div>
                    <!--Avatar-->
                    <div class="avatar mx-auto white">
                        <img src="'.$src.'" class="rounded-circle img-fluid">
                    </div>
                    <div class="card-body">
                        <!--Name-->
                        <a class="stafi-links" href="pedagog_info.php?emri='.$emri.'&mbiemri='.$mbiemri.'"><h4 class="font-weight-bold mb-4">'.$emri.' '.$mbiemri.'</h4></a>
                        <hr>
                        <!--Quotation-->
                        <p class="dark-grey-text mt-4">'.$row['grada'].'</p>
                    </div>
                </div>
            </div>');
            $i++;
            
        }
    }
?>