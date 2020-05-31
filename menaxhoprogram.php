<?php 
include 'db_connection.php';
include 'crdprogram.php';
?>
<?php
# session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["roli"]!=0){

  header("location:index.php");
  exit();
  }
  else if(!isset($_SESSION["loggedin"])){
  header("location:index.php");
  exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <script src="assets\js\jquery-3.4.1.min.js"></script>
        <script src="assets\js\popper.min.js"></script>
        <script src="assets\js\bootstrap.min.js"></script>
        <script src="assets\fonts\all.min.js"></script>
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.css">
        <script type="text/javascript" src="https://use.fontawesome.com/b9bdbd120a.js"></script>
        <!--  jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  </head> 
  <body>
  <?php
    include 'header.php';
  ?>
<div class="container-fluid">
       <div class="row justify-content-center">
        <div class="col-md-10">
        <h3 class="text-center text-dark mt-2">
            Ploteso të dhënat e mëposhtme për të shtuar program
        </h3><hr>
        <?php if (isset($_SESSION['response'])){ ?>
        <div class="alert alert-<?= $_SESSION['res_type'];  ?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;
        </button>
        <?= $_SESSION['response']; ?>
        </div>
        <?php } unset($_SESSION['response']); ?>
       </div>
       </div>
<div class="row">
<div class="col-md-4">

<h5 class="text-center text-info">Shto Program</h5>
<form action="crdprogram.php" method="post" enctype="multipart/form-data">
                    <!-- Emri i programit -->
                          <div class="form-group">
                          <label for="name">Emri i programit:</label>
                          <input type="text" class="form-control" id="name" placeholder="Vendos Emrin e Programit"  name="name" required>
                          </div>
                     <!--Niveli i programit-->
                         <div class="form-group">
                          <label for="level">Niveli i programit:</label>
                          <div class="form-check-inline">
                          <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="level"  value="Bachelor" required>Bachelor
                          </label>
                          </div>
                          <div class="form-check-inline">
                          <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="level" value="Master" required >Master
                          </label>
                          </div>
                          </div>   
                      <!--Pershkrimi-->    
                        <div class="form-group">
                        <label for="pershkrim">Përshkrimi:</label>
                        <textarea class="form-control" id="pershkrim" placeholder="Vendos Përshkrim" name="description" rows="5" required></textarea>
                        </div>
                     <!--Submit Button-->
                          <div class="form-group">
                          <input type="submit" name="add" class="btn btn-primary btn-block btn-login" value="Shto program">
                          </div>
                          </div>  
                        
</form>

        <div class="col-md-8">
        <h5 class="text-center text-info">Rekordet e databazes</h5>
        <table class="table table-hover">
        <?php
      
        $users = "SELECT id_programi, emer, nivel FROM program";
        $usersresult = $conn -> query($users);
        if ($usersresult->num_rows > 0) {
          while ($row = $usersresult->fetch_assoc()) { ?>
        <tbody>
      <tr>
        <?php if($usersresult){?>
        <td><?php echo $row["id_programi"] ?></td>
        <td><?php echo $row["emer"] ?></td>
        <td><?php echo $row["nivel"] ?></td>
        <td>
            <a href="crdprogram.php?delete=<?php echo $row["id_programi"] ?>" class="badge badge-danger p-2">Delete</a> 
        </td>
      </tr>
    </tbody>   <?php  } } }  ?>
        
      </div>
    </div>
  </div>      
    <thead>
      <tr>
        <th>#</th>
        <th>Emri i programit</th>
        <th>Niveli</th>
        <th>Action</th>
      </tr>
    </thead>
  </table>
        </div>
    </div>
</div>  
</div>

 


<?php
    include 'footer.php';
  ?>
</body>
</html>