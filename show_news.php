<?php
    $directory = 'lajme';
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
    foreach ($scanned_directory as $news) {
        $myfile = fopen($directory.'/'.$news.'', "r") or die("Unable to open file!");
        $row = 1;
        $p =1;
        while(!feof($myfile)) {
            $info =  fgets($myfile);
            if($row ==1){
                echo(
                    '<div class="container mt-5">
                        <section class="">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 mb-md-0 mb-4 mt-xl-4">
      	                        <h4 class="font-weight-normal mb-4">'.$info.'</h4>'
                );
            }else if($row ==2){
                echo('<h1 class="font-weight-normal mb-4">'.$info.'</h1>');
            }else 
                if ($p==1) {echo('<p>');  echo($info); $p++;}
                else echo($info);
            $row++;
          }
          fclose($myfile);
          echo(
            '                   </p>
                                <a class="btn btn-outline-primary mx-0 btn-lajme" href="#">Read More <i class="fas fa-arrow-right fs-9 ml-2"></i></a>
                            </div>
                        </section>
                     </div> '
          );
    }
?>








<!-- 
         <a class="btn btn-outline-primary mx-0" href="#">Read More <i class="fas fa-arrow-right fs-9 ml-2"></i></a>
      </div>
    </div>
  </section>
</div> 

-->