<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <script src="assets\js\jquery-3.4.1.min.js"></script>
    <script src="assets\js\popper.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\fonts\all.min.js"></script>
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
    <script type="text/javascript" src="assets/js/pedagog.js"></script>
    <script src="assets\js\jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Nota</title>
  
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["roli"]!=1){
            
    header("location:index.php");
    exit();
    }
    else if(!isset($_SESSION["loggedin"])){
    header("location:index.php");
    exit();
    }
    include "header.php";
    ?>

    <?php if (isset($_SESSION['response'])){ ?>
        <div class="alert alert-<?= $_SESSION['res_type'];  ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;
        </button>
        <?= $_SESSION['response']; ?>
        </div>
        <?php } unset($_SESSION['response']); ?>
       </div>
       
  <!--Material form login -->
<div class="card" style="width: 500px;margin: 0 auto;">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Ngarko Nota</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">


  
    <select class="browser-default custom-select mb-4" name="lenda_select" id="select" style="margin-top: 40px;">
          <option value="" disabled="" selected="">Zgjidh Lende</option>        
          <?php
              include "shfaq_lende.php";
          ?>
      </select>
      <input class="form-control" type="text" id="grupi" placeholder="Vendos Grupin" required>
      <div class="d-flex justify-content-around">
      </div>
      <!-- Gjenero button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" onclick="krijoTab()" > Gjenero Tabele</button>

      

  </div>

</div>
<form action="ngarko.php" method="POST" id="tab"></form>

<?php
    include "footer.php";
?>

    <script>
     var lende;
     var grupi;
    $(document).ready(function(){
    $("#select").change(function(){
        lende = $(this).children("option:selected").val();
        });
    });
    $(document).ready(function(){
        $("#grupi").on("change keyup paste", function(){
          grupi = $(this).val();
        });
        
    });
     function krijoTab() {
       //alert(lende);
      if (typeof lende=="undefined") {
    alert ("Ju lutem zgjidhni nje lende.");
    return;
  }else if(grupi == "" || typeof grupi=="undefined"){
    alert ("Ju lutem zgjidhni nje grup.");
    return;
  } 
  else {
    var xmlhttp = new XMLHttpRequest();
      xmlhttp.onload = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("tab").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET", "shfaq_tab.php?lende="+lende+"&grupi="+grupi, true);
    xmlhttp.send();
  }
} 
    
    </script>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPoll-1">Launch
  modal</button>

<!-- Modal: modalPoll -->
<div class="modal fade right" id="modalPoll-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">Feedback request
        </p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <i class="far fa-file-alt fa-4x mb-3 animated rotateIn"></i>
          <p>
            <strong>Your opinion matters</strong>
          </p>
          <p>Have some ideas how to improve our product?
            <strong>Give us your feedback.</strong>
          </p>
        </div>

        <hr>

        <!-- Radio -->
        <p class="text-center">
          <strong>Your rating</strong>
        </p>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group1" type="radio" id="radio-179" value="option1" checked>
          <label class="form-check-label" for="radio-179">Very good</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="group1" type="radio" id="radio-279" value="option2">
          <label class="form-check-label" for="radio-279">Good</label>
        </div>

        <div class="form-check mb-4">
          <input class="form-check-input" name="group1" type="radio" id="radio-379" value="option3">
          <label class="form-check-label" for="radio-379">Mediocre</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group1" type="radio" id="radio-479" value="option4">
          <label class="form-check-label" for="radio-479">Bad</label>
        </div>
        <div class="form-check mb-4">
          <input class="form-check-input" name="group1" type="radio" id="radio-579" value="option5">
          <label class="form-check-label" for="radio-579">Very bad</label>
        </div>
        <!-- Radio -->

        <p class="text-center">
          <strong>What could we improve?</strong>
        </p>
        <!--Basic textarea-->
        <div class="md-form">
          <textarea type="text" id="form79textarea" class="md-textarea form-control" rows="3"></textarea>
          <label for="form79textarea">Your message</label>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-primary waves-effect waves-light">Send
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalPoll -->








</body>
</html>

