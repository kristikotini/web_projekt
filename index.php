<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <script src="assets\js\jquery-3.4.1.min.js"></script>
        <script src="assets\js\popper.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\fonts\all.min.js"></script>
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
    </head>

    <body>
    <?php
    session_start();
    include 'header.php';
   ?>
    <!-- Banner -->
    <img class="img-fluid home-banner" src="assets\images\uni-banner.jpg">
    <!-- Main Body-->
    <!-- Slogan-->
    <div class="container my-5 py-5 z-depth-1">
        <section class="text-center px-md-5 mx-md-5 dark-grey-text">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7 slogan">
                    <p>Nje vend ku mesoni, zbuloni, krijoni, shpreheni dhe diskutoni.</p>
                </div>
            </div>
        </section>
    </div>
    <!--First Article-->
    <div class="container my-5 py-5 z-depth-1">
        <section class="px-md-5 mx-md-5 dark-grey-text text-center text-lg-left">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center">
                    <img src="assets/images/first_artic.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h3 class="font-weight-bold">Rendesia Teknologjisë</h3>
                    <p class="font-weight-bold">Kujdesi qe i kushtohet ne USK</p>
                    <p class="text-muted">Teknologjia eshte e ardhmja dhe si kurr me par ritmet e zhvillimit
                        te saj jan gjithnje e me shume ne rritje. Ne ne USK i kushtojm nje rendesi te vecant metodave
                        dhe aplikimeve
                        me te fundit ne kete fushe dhe gjithmone jemi gati per sfida te reja me programet me konkuruese.
                    </p>
                </div>
            </div>
        </section>
    </div>
    <!-- Second Article-->
    <div class="container my-5 py-5 z-depth-1">
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3 class="font-weight-bold">Vizite ne USK</h3>
                    <p class="text-muted">Para fillimit te cdo sezoni ju keni mundesin te vini dhe te vizitoni godinen e
                        USK. USK mirëpret më shumë se 10,000 vizitorë në kampus çdo vit. Pavarësisht nëse jetoni
                        në lagje ose po vini nga larg, ne mezi presim t\'ju shohim këtu në shtepine tone.
                    </p>
                </div>
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="view overlay z-depth-1-half">
                        <img src="assets\images\images.jfif" class="img-fluid">
                        <a href="#">
                            <div class="mask rgba-white-light"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets\images\foto1_car.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block carosel-item">
                    <h1>Godina</h1>
                    <p>Nje godin e ndertuar ne vitin 2005, me nje arkitektur unike dhe me kushte komode.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets\images\foto2_car.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block carosel-item">
                    <h1>Studentet</h1>
                    <p>Studentet ne Universitetin tone jane mjaft perkrahes dhe gjithmon jane gati per te ndihmuar ne
                        zgjidhjen e problemeve.</p>
                </div>

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets\images\foto3_car.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block carosel-item">
                    <h1>Laburatoret</h1>
                    <p>Laburatore per zhvillimin e oreve mesimore ne kushte bashkohore.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets\images\foto4_car.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block carosel-item">
                    <h1>Stafi Pedagogeve</h1>
                    <p>Nje staf i perkushtuar gjithmon i pergatitur per sfida te reja.</p>
                </div>

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>

