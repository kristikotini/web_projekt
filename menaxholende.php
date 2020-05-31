<?php 
include 'db_connection.php';
include 'crudlende.php';
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
            Ploteso të dhënat e mëposhtme për të shtuar lëndë
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

<?php if(isset( $_GET['edit'])):?>

<?php
  $users = "SELECT * FROM lenda WHERE id_lende = {$_GET['edit']}";
  $usersresult = $conn->query($users);
  while ($row = $usersresult->fetch_assoc()):
?>
<h5 class="text-center text-info">Ndrysho/Shiko te dhenat e <?=$row['emer']?></h5>
<form action="crudlende.php" method="post" enctype="multipart/form-data">
        <!-- ID -->
          <input type="hidden" id="id_lende" value="<?=$row['id_lende']?>" name="id_lende" required>
      <!-- Emri -->
          <div class="form-group">
          <label for="name">Emri i lëndës:</label>
          <input type="text" class="form-control" id="name" placeholder="Vendos Emrin e Lëndës:" value="<?=$row['emer']?>" name="name" required>
          </div>
        <!--Viti lendes--> 
          <div class="form-group" >
          <label for="year">Viti:</label>
          <div class="form-check-inline">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" name="year" value="1" <?=($row['viti_lendes'] == '1') ? 'checked="checked"' : ''?> required>1
          </label>
          </div>
          <div class="form-check-inline">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" value="2"  name="year" <?=($row['viti_lendes'] == '2') ? 'checked="checked"' : ''?> required>2
          </label>
          </div>
          <div class="form-check-inline">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" value="3"  name="year" <?=($row['viti_lendes'] == '3') ? 'checked="checked"' : ''?> required>3
          </label>
          </div>
          </div>
        <!--Niveli--> 
          <div class="form-group" >
          <label for="level">Niveli:</label>
          <div class="form-check-inline">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" name="level" value="1" <?=($row['niveli'] == '1') ? 'checked="checked"' : ''?> required>1
          </label>
          </div>
          <div class="form-check-inline">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" value="2"  name="level" <?=($row['niveli'] == '2') ? 'checked="checked"' : ''?> required>2
          </label>
          </div>
          </div>
        <!-- Kredite -->
          <div class="form-group">
          <label for="credits">Kredite:</label>
          <input type="number" class="form-control" id="credits" value="<?=$row['kredite']?>" name="credits" required>
          </div>
        <!--ID Programi-->    
          <div class="form-group">
          <label for="programid">ID Programi:</label>
          <input type="number" class="form-control" id="programid" placeholder="Vendos ID Programi"  name="programid" value="<?=$row['id_programi_fk']?>" required>
          </div>
      <!--Kohezgjatja--> 
          <div class="form-group" >
          <label for="duration">Kohezgjatja:</label>
          <div class="form-check-inline">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" name="duration" value="semestrale-1" <?=($row['kohezgjatja'] == 'semestrale-1') ? 'checked="checked"' : ''?> required>Sem-1
          </label>
          </div>
          <div class="form-check-inline">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" value="semestrale-2"  name="duration" <?=($row['kohezgjatja'] == 'semestrale-2') ? 'checked="checked"' : ''?> required>Sem-2
          </label>
          </div>
          <div class="form-check-inline">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" value="vjetore"  name="duration" <?=($row['kohezgjatja'] == 'vjetore') ? 'checked="checked"' : ''?> required>Vjetore
          </label>
          </div>
          <div class="form-check-inline">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" value="-"  name="duration" <?=($row['kohezgjatja'] == '-'||$row['kohezgjatja'] == '' ) ? 'checked="checked"' : ''?> required>-
          </label>
          </div>
          </div>
      <!--Submit Button-->
          <div class="form-group">
          <input type="submit" name="edit" class="btn btn-success btn-block" value="Ruaj të dhënat e ndryshuara">
          </div>
          </div>  
  </form>

<?php endwhile; ?>
<?php else:?>

<h5 class="text-center text-info">Shto Lëndë</h5>
<form action="crudlende.php" method="post" enctype="multipart/form-data">
      <!-- Emri i lendes -->
            <div class="form-group">
            <label for="name">Emri i lëndës:</label>
            <input type="text" class="form-control" id="name" placeholder="Vendos Emrin e Lëndës"  name="name" required>
            </div>
      <!--Viti i lendes-->
              <div class="form-group">
            <label for="year">Viti i lendes:</label>
            <div class="form-check-inline">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="year"  value="1" required>1
            </label>
            </div>
            <div class="form-check-inline">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="year" value="2" required >2
            </label>
            </div>
            <div class="form-check-inline">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="year" value="3" required>3
            </label>
            </div> 
            </div>   
        <!--Niveli-->
            <div class="form-group">
            <label for="level">Niveli:</label>
            <div class="form-check-inline">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="level"  value="1" required>1
            </label>
            </div>
            <div class="form-check-inline">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="level" value="2" required >2
            </label>
            </div>
            </div>   
        <!--Kredite-->    
            <div class="form-group">
            <label for="credits">Kredite:</label>
            <input type="number" class="form-control" id="credits" placeholder="Vendos Kredite" name="credits" required>
            </div>
        <!--ID Programi-->    
              <div class="form-group">
            <label for="programid">ID Programi:</label>
            <input type="number" class="form-control" id="programid" placeholder="Vendos ID Programi" name="programid" required>
            </div>
      <!--Kohezgjatja-->
      <div class="form-group">
            <label for="duration">Kohëzgjatja:</label>
            <div class="form-check-inline">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="duration"  value="semestrale-1" required>Sem-1
            </label>
            </div>
            <div class="form-check-inline">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="duration" value="semestrale-2" required >Sem-2
            </label>
            </div>
            <div class="form-check-inline">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="duration" value="vjetore" required >Vjetore
            </label>
            </div>
            <div class="form-check-inline">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="duration" value="" required >-
            </label>
            </div>
            </div>   
        <!--Submit Button-->
            <div class="form-group">
            <input type="submit" name="add" class="btn btn-primary btn-block" value="Shto lëndë">
            </div>
            </div>                       
</form>

<?php endif;?>

        <div class="col-md-8">
        <h5 class="text-center text-info">Rekordet e databazes</h5>
        <table class="table table-hover">
        <?php
        
        $users = "SELECT id_lende, emer, kohezgjatja FROM lenda";
        $usersresult = $conn -> query($users);
        if ($usersresult->num_rows > 0) {
          while ($row = $usersresult->fetch_assoc()) { ?>
      <tbody>
      <tr>
        <?php if($usersresult){?>
        <td><?php echo $row["id_lende"] ?></td>
        <td><?php echo $row["emer"] ?></td>
        <td><?php echo $row["kohezgjatja"] ?></td>
        <td>
        <a href="menaxholende.php?edit=<?php echo $row["id_lende"] ?>" class="badge badge-primary p-2">Shiko më shumë</a> |
        <a href="crudlende.php?delete=<?php echo $row["id_lende"] ?>" class="badge badge-danger p-2">Delete</a> |
        <a href="menaxholende.php?edit=<?php echo $row["id_lende"] ?>"  class="badge badge-success p-2">Edit</a>
        </td>
      </tr>
    </tbody>   <?php  } } }  ?>
        
      </div>
    </div>
  </div>      
    <thead>
      <tr>
        <th>#</th>
        <th>Emri i lëndës</th>
        <th>Kohëzgjatja</th>
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