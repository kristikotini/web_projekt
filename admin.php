<?php 
include 'db_connection.php';
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
        <h5 class="text-center text-dark mt-2">
            Ploteso te dhenat e meposhtme per te shtuar perdoruesin pedagog
        </h5><hr>
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
<h5 class="text-center text-info">Shto perdorues pedagog</h5>
<form action="crudpedagog.php" method="post" enctype="multipart/form-data">
                    <!-- Emri -->
                        <div class="form-group">
                        <label for="name">Emër:</label>
                        <input type="text" class="form-control" id="name" placeholder="Vendos Emër" value="<?= $emer; ?>" name="name" required>
                        </div>
                    <!-- Mbiemri -->
                        <div class="form-group">
                        <label for="lastname">Mbiemër:</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Vendos Mbiemër" value="<?= $mbiemer; ?>" name="lastname" required>
                        </div>
                    <!---Gjinia-->
                        <div class="form-group" >
                        <label for="gender">Gjinia:</label>
                        <div class="form-check-inline">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="<?= $gjini; ?>" required checked>Femër
                        </label>
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="<?= $gjini; ?>" required name="gender">Mashkull
                        </label>
                        </div>
                        </div>
                     <!--Datelindja-->
                        <div class="form-group"> 
                        <label for="date">Datëlindja:</label>
                        <input class="form-control" type="date" id="date" placeholder="MM/DD/VVVV" value="<?= $datelindje; ?>" name="date" required/>
                        </div>
                   <!--Username-->    
                         <div class="form-group">
                         <label for="username">Username:</label>
                         <input type="text" class="form-control" id="name" placeholder="Vendos Username" value="<?= $username; ?>" name="username" required>
                         </div>
                    <!--Email-->
                          <div class="form group">
                          <label for="email">E-mail:</label>
                          </div>
                          <div class="input-group mb-3">
                          <input type="email" name="email" class="form-control" placeholder="Vendos E-mail" value="<?= $email; ?>" pattern="[a-z0-9._%+-]+@ushkpedagog.info$" required>
                          <div class="input-group-append">
                          <span class="input-group-text">@ushkpedagog.info</span>
                          </div>
                          </div> 
                    <!--Password-->
                          <div class="form-group">
                          <label for="pwd">Password:</label>
                          <div class="input-group" id="syri">
                          <input class="form-control" type="password" name="password" value="<?= $password; ?>" placeholder="Vendos Password" required>
                          <div class="input-group-addon">
                          <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                          </div> 
                          </div>                          
                          </div>
                    <!--Roli-->
                          <div class="form-group">
                          <label for="role">Roli:</label>
                          <div class="form-check-inline">
                          <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="role"  value="<?= $roli; ?>" disabled>0
                          </label>
                          </div>
                          <div class="form-check-inline">
                          <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="role" value="<?= $roli; ?>" required checked>1
                          </label>
                          </div>
                          <div class="form-check-inline">
                          <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="role" value="<?= $roli; ?>" disabled>2
                          </label>
                          </div> 
                          </div>   

                  <!--FORMA PER PEDAGOGUN-->
                     <!--ID Programi-->    
                          <div class="form-group">
                          <label for="programid">ID Programi:</label>
                          <input type="number" class="form-control" id="programid" placeholder="Vendos ID Programi" value="<?= $id_programi; ?>" name="programid" required>
                          </div>
                      <!--Grada-->    
                          <div class="form-group" >
                          <label for="grada">Grada:</label>
                          <div class="form-check-inline">
                          <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="level" value="Prof.Asoc.Dr" required>Prof.Asoc.Dr
                          </label>
                          </div>
                          <div class="form-check-inline">
                          <label class="form-check-label">
                          <input type="radio" class="form-check-input" value="Dr."  name="level" required>Dr.
                          </label>
                          </div>
                          <div class="form-check-inline">
                          <label class="form-check-label">
                          <input type="radio" class="form-check-input" value="Msc."  name="level" required>Msc.
                          </label>
                          </div>
                          </div>
                    <!--Adresa-->    
                          <div class="form-group">
                          <label for="adresa">Adresa:</label>
                          <input type="test" class="form-control" id="adress" placeholder="Vendos Adresen" value="<?= $adresa; ?>" name="address" required>
                          </div>
                    <!--Website-->    
                          <div class="form-group">
                          <label for="website">Website:</label>
                          <input type="url" class="form-control" id="website" placeholder="Vendos Website" value="<?= $website; ?>" name="website" maxlength="100" required>
                          </div>
                    <!--Tel-->    
                          <div class="form-group">
                          <label for="tel">Tel:(Ne formatin +355)</label>
                          <input type="text" class="form-control" id="phone" placeholder="Vendos Tel" value="<?= $tel; ?>" name="phone" pattern="+355(67|68|69)[0-9]{7}" required>
                          </div>
                    <!--Submit Button-->
                          <div class="form-group">
                          <input type="submit" name="add" class="btn btn-primary btn-block" value="Shto perdorues">
                          </div>
                          </div>  
                           <script>
                                    $(document).ready(function() {
                                    $("#syri a").on('click', function(event) {
                                    event.preventDefault();
                                    if($('#syri input').attr("type") == "text"){
                                    $('#syri input').attr('type', 'password');
                                    $('#syri i').addClass( "fa-eye-slash" );
                                    $('#syri i').removeClass( "fa-eye" );
                                    }else if($('#syri input').attr("type") == "password"){
                                    $('#syri input').attr('type', 'text');
                                    $('#syri i').removeClass( "fa-eye-slash" );
                                    $('#syri i').addClass( "fa-eye" );
                                      }});});
                            </script>
</form>



        <div class="col-md-8">
        <h5 class="text-center text-info">Rekordet e databazes</h5>
        <table class="table table-hover">
        <?php
      
        $users = "SELECT perdorues_id, emer, mbiemer, email FROM perdorues";
        $usersresult = $conn -> query($users);
        if ($usersresult->num_rows > 0) {
          while ($row = $usersresult->fetch_assoc()) { ?>
        <tbody>
      <tr>
        <?php if($usersresult){?>
        <td><?php echo $row["perdorues_id"] ?></td>
        <td><?php echo $row["emer"] ?></td>
        <td><?php echo $row["mbiemer"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td>
        <a href="crudpedagog.php?shikomeshume=<?php echo $row["perdorues_id"] ?>"  data-toggle="modal" data-target="#myModal" class="badge badge-primary p-2">Shiko më shumë</a> |
            <a href="crudpedagog.php?delete=<?php echo $row["perdorues_id"] ?>" class="badge badge-danger p-2">Delete</a> |
            <a href="admin.php?edit=<?php echo $row["perdorues_id"] ?>"  class="badge badge-success p-2">Edit</a>
        </td>
      </tr>
    </tbody>   <?php  } } }  ?>
    
     <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="crudpedagog.php" method="post" enctype="multipart/form-data">

                  <!-- Emri -->
                      <div class="form-group">
                      <label for="name">Emër:</label>
                      <input type="text" class="form-control" id="emer" placeholder="Vendos Emër" name="emer" >
                      </div>
                
                  <!--Submit Button-->
                        <div class="form-group">
                        <input type="submit" name="editoperdorues" class="btn btn-primary btn-block" value="Edito perdorues">
                        </div>
                        </div>  
                        </div>
                  </form>

       
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

    
    
    
    
    
   
          
    <?php echo $_SERVER['REQUEST_URI']; ?>
      
    <thead>
      <tr>
        <th>#</th>
        <th>Emër</th>
        <th>Mbiemër</th>
        <th>Email</th>
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