<?php
    if(isset($_GET["titulli"]) && isset($_GET["pershkrimi"])){
        $titulli = htmlspecialchars($_GET["titulli"]);
      $pershkrimi = htmlspecialchars($_GET["pershkrimi"]);
      $pershkrimi = str_split($pershkrimi, 100);
        $data1 =  date("Y-m-d_H-i-s");  
        echo($data1 )  ;
       $data2 =  "".date("d.m.Y");
        $direc = 'lajme';

        $file = 'lajme/'.$data1.'.txt';
        $flag=true;
        $tmp = 1;
        while($flag){
            if(!is_file($file)){
                file_put_contents($file,  $data1.PHP_EOL);
                file_put_contents($file, $data2.PHP_EOL,FILE_APPEND);
                file_put_contents($file, $titulli.PHP_EOL,FILE_APPEND);
                foreach ($pershkrimi as $s){
                    file_put_contents($file, $s.PHP_EOL,FILE_APPEND);
                }
                $flag = false;
            }else{
                $file = 'lajme/'.$data1.'_'.$tmp.'txt';
                $tmp ++;
            }
        }
        header("location:news.php");
    }

?>