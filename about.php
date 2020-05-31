<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rreth Nesh</title>
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <script src="assets\js\jquery-3.4.1.min.js"></script>
        <script src="assets\js\popper.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\fonts\all.min.js"></script>
        <script src="assets/js/map.js"></script>
        <link rel="stylesheet" href="assets\css\custom.css">
        <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
        <style>
            #map {
            height: 500px;
            padding: 3px;
        }
        </style>
        
    </head>

    <body>
    <?php
        session_start();
        include 'header.php';
    ?>
    <div class="container my-5 py-5 z-depth-1">
        <section class="px-md-5 mx-md-5 dark-grey-text text-center" id="misioni">
        <h1 class="text-center">MISIONI</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="row" >
                    <!--/Grid row-->
                    <h2>Misioni  i Universitetit të Shkencave Kompjuterike është të zgjerojë dhe të
                    diversifikojë profesionistë të specializuar në informatikë dhe teknologji informacioni
                    dhe të çojë përpara njohuritë në sisteme dhe shkencat kompjuterike duke siguruar mësimdhënie 
                    me cilësi të lartë si dhe të drejtojë kërkime shkencore që adresojnë sfida në  fusha aktuale 
                    informatike dhe probleme sociale.</h2>
                </div>
            </div>
        </div>
        </section>
    </div>
    
    <div class="container my-5 py-5 z-depth-1">
  <!--Section: Content-->
  <section class="dark-grey-text text-center" id="projekte"> 
    <h1 class="font-weight-bold pt-4 mb-4">Projekte</h1>   
    <h5 class="font-weight-bold font-italic mb-5">Ndër vite USHK ka ndihmuar studentët në krijimin e projekteve të mëposhtme.</h5>
    <div class="row mx-lg-5 mx-md-3">
      <div class="col-md-6 mb-4">      
        <div class="view mb-5">
          <img src="assets\images\ocarina.png" class="img-fluid" alt="ocarina image">
        </div>
        <h2 class="font-weight-normal text-muted" style="padding:35px;">Ocarina: Flauti Magjik i IPhone</h2>
        <h5 class="font-weight-normal text-muted">Ocarina, krijuar në vitin 2008 për iPhone,
            është një nga artifaktet e para muzikore në epokën e aplikacioneve. Ajo paraqet një ndërveprim fizik të ngjashëm me flautin duke përdorur 
            mikrofonin, multitouch dhe përshpejtuesit - dhe një dimension shoqëror që lejon përdoruesit të dëgjojnë 
            njëri-tjetrin në të gjithë botën. Deri më tani, Ocarina ka mbi 10 milion përdorues në të gjithë botën, dhe
            ishte renditur e para në Sallën e Famës së Apple.</h5>
     	</div>
     	<div class="col-md-6 mb-4">
        <div class="view mb-5">
          <img src="assets\images\quickdraw.png" class="img-fluid" alt="quickdraw image">
        </div>
        <h2 class="font-weight-normal text-muted">Quick, Draw!</h2>
        <h5 class="font-weight-normal text-muted">Një lojë që sfidon lojtarët
            të vizatojnë një figurë të një objekti ose ideje dhe më pas përdor një rrjet
            inteligjent artificial për të hamendësuar se çfarë përfaqësojnë vizatimet. 
            AI mëson nga secili vizatim, duke rritur aftësinë e tij për të gjetur saktë 
            në të ardhmen. Loja është e ngjashme me Pictonary në atë që lojtari ka vetëm një kohë 
            të kufizuar për të vizatuar (20 sekonda). Konceptet që supozohet se mund të jenë të thjeshta, 
            si 'këmbë', ose më të ndërlikuara, si 'migrimi i kafshëve'. Kjo lojë është një nga shumë lojëra të 
            thjeshta të krijuara që janë bazuar në AI si pjesë e një projekti të njohur si 'A.I. Eksperimentet '.</h5>
      </div>
    </div>
  </section>
  <!--Section: Content-->
</div>
 
<div class="container my-5 p-5 z-depth-1">
  <section class="dark-grey-text" id="objektivat">
    <h1 class="text-center font-weight-bold mb-4 pb-2">OBJEKTIVAT</h1>
    <p class="text-center lead grey-text mx-auto mb-5">Me përkushtim dhe punë të palodhur USHK ka si fokus primar plotësimin
        e objektivave të mëposhtme.</p>
    <div class="row">
      <div class="col-md-4 mb-md-0 mb-5">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-2">
            <i class="fas fa-university fa-2x"></i>
          </div>
          <div class="col-lg-10 col-md-9 col-10">
            <h4 class="font-weight-bold">Studimi</h4>
            <p class="grey-text">Promovimin e kërkimit dhe studimeve të avancuara në fusha të ndryshme 
                teorike dhe aplikative në informatikë si dhe 
                fushave multidisiplinare të lidhura me të.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md-0 mb-5">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-2">
            <i class="fas fa-users fa-2x"></i>
          </div>
          <div class="col-lg-10 col-md-9 col-10">
            <h4 class="font-weight-bold">Ambjenti</h4>
            <p class="grey-text">Të sigurojë një ambient kërkimi stimulus për individët të cilët të
                jenë drejtues  në industri dhe akademi në aplikime të informatikës dhe z
                hvillimin e teknologjive të reja për të mirën e shoqërisë.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-2">
          <i class="fas fa-graduation-cap fa-2x"></i>
          </div>
          <div class="col-lg-10 col-md-9 col-10">
            <h4 class="font-weight-bold">E Ardhmja</h4>
            <p class="grey-text">Studentët  e diplomuar në programet e studimit të USHK të jenë të aftë 
                të demostrojnë kopetenca teknike në shkencat kompjuterike në dizenjimin dhe analizimin e situatave reale.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Stafi -->
<h1 class="font-weight-bold mb-4 pb-2 text-center" id="stafi">Stafi Akademik</h1>
<div class="container" style="overflow-y:auto; height:850px;">
      <section class="text-center dark-grey-text">
        <?php
          include "stafi.php";
        ?>
      </section>
    </div>

<!-- stafi-->

    <div class="container my-5 p-5 z-depth-1" id="harta">
    <h1>Harta</h1>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0P1B_IRah27-G3gwgpGJhRCdHNG-rrN4&callback=initMap">
        </script>
        <div id="map"></div>
        <script src="assets/js/map.js"></script>
    </div>

    
    <?php
        include 'footer.php';
    ?>
</body>


</html>

