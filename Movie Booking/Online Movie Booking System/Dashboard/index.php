<?php
include("../Connection.php");
session_start();

?>
<!DOCTYPE html>

<html lang="en">

<head>
</head>
<body>
<?php
include ("nav.php");

?>
<br>
<br>
<div class="content">
<div class="content">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                  <i class="fas fa-user"></i>
                  </div>
                  <p class="card-category">Visitors</p>
                  <h3 class="card-title">
                   <?php
                  $result = "SELECT count(id) as total from user";
                  $rows = mysqli_query($con,$result);
                  $value = mysqli_fetch_array($rows);
                  $num_row = $value[0];
                  echo $num_row;
                 ?>
                  </h3>
                </div>
              </div>
            </div>  
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                  <i class="fas fa-film"></i>
                  </div>
                  <p class="card-category">Movies</p>
                  <h3 class="card-title">
                  <?php
                  $result = "SELECT count(id) as total from movie";
                  $rows = mysqli_query($con,$result);
                  $value = mysqli_fetch_array($rows);
                  $num_row = $value[0];
                  echo $num_row;
                 ?></h3>
                </div>
                
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                  <i class="fas fa-store"></i>
                  </div>
                  <p class="card-category">Theater</p>
                  <h3 class="card-title"><?php
                  $result = "SELECT count(id) as total from cinema";
                  $rows = mysqli_query($con,$result);
                  $value = mysqli_fetch_array($rows);
                  $num_row = $value[0];
                  echo $num_row;
                 ?></h3>
                </div>
                
              </div>
            </div>
            
          </div>

          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                  <i class="fas fa-receipt"></i>
                  </div>
                  <p class="card-category">Bookings</p>
                  <h3 class="card-title"><?php
                  $result = "SELECT count(id) as total from booking";
                  $rows = mysqli_query($con,$result);
                  $value = mysqli_fetch_array($rows);
                  $num_row = $value[0];
                  echo $num_row;
                 ?></h3>
                </div>
                
              </div>
            </div>
            
          </div>

        <?php
include ("footer.php");
?>
</body>
</html>
