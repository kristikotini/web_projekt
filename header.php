<?php
 #<!-- Navbar -->
 echo ('<nav class="navbar navbar-expand-lg navbar-light nav-wrapper"> 
    <a class="navbar-brand  text-light" href="index.html">Universiteti Shkencave Kompjuterike</a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
    </button> 

    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <ul class="navbar-nav custom-nav"> 
            <li class="nav-item active"> 
                <a class="nav-link" href="index.html">Kryefaqe <span class="sr-only">(current)</span></a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="#">Lajme</a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="#">Rreth Nesh</a> 
            </li> 
            <li class="nav-item dropdown "> 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"  
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    Programe 
                </a> 
                <div class="dropdown-menu dropright" aria-labelledby="navbarDropdown">  
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown2" role="button" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        Bachelor 
                    </a> 
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown2"> 
                        <a class="dropdown-item " href="#">Informatik Bachelor</a> 
                        <a class="dropdown-item " href="#">TIK Bachelor</a> 
                    </div> 
                    <div class="dropdown-divider"></div> 

                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown3" role="button" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        Master 
                    </a> 
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3"> 
                        <a class="dropdown-item " href="#">Informatik MSc.</a> 
                        <a class="dropdown-item " href="#">TIK MSc.</a> 
                    </div> 
                </div> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="#">Login</a> 
            </li> 
        </ul>
        <form class="form-inline my-2 my-lg-0"> 
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> 
            <button class="btn  my-2 my-sm-0 nav-search" type="submit"><i 
                    class="fa fa-search nav-search"></i></button> 
        </form> 
    </div> 
</nav> ');


?>