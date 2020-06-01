
 <!-- Navbar -->
    
    
    <div class="navbar-mask"></div>
    <nav class="navbar navbar-expand-lg navbar-light nav-wrapper"> 
    <a class="navbar-brand  text-light" href="index.php">Universiteti Shkencave Kompjuterike</a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button> 

    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <ul class="navbar-nav custom-nav"> 
            <li class="nav-item active"> 
                <a class="nav-link" href="index.php">Kryefaqe <span class="sr-only">(current)</span></a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="news.php">Lajme</a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="about.php">Rreth Nesh</a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="programe.php" type="button">Programe</a>
            </li> 
            <li class="nav-item"> 
                <?php
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        if($_SESSION["roli"] === 0){
                            echo("<a class='nav-link' href='admin.php'>Profili Admin</a>");
                        }
                        if($_SESSION["roli"] === 1){
                            echo("<a class='nav-link' href='pedagog.php'>Profili Pedagog</a>");
                        }
                        if($_SESSION["roli"] === 2){
                            echo("<a class='nav-link' href='student.php'>Profili Student</a>");
                        }
                    }
                    else{
                        echo("<a class='nav-link' href='login.php'>Login</a>");
                    }
                ?> 
            </li> 
        </ul>
        <form class="form-inline my-2 my-lg-0"> 
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> 
            <button class="btn  my-2 my-sm-0 nav-search" type="submit"><i 
                    class="fa fa-search nav-search"></i></button> 
        </form> 
    </div> 
</nav> 
