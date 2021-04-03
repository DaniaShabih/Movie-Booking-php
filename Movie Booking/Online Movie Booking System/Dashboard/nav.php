<!DOCTYPE html>
<?php

session_abort();
session_start();
if ($_SESSION["role"] == "Admin") {
  include("../Connection.php");
}
else{
  include("../Connection.php");
  header("Location:../Index.php");
  echo "<script>  alert('User Cant Access');
	window.location='../Index.php';
  </script>";

}

?>

<html lang="en">
<head>
    <title>Movie Booking</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<body class="dark-edition">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">

            <div class="logo">
                <a href="" class="simple-text logo-normal">
                <span class="glyphicon glyphicon-film"></span>Movie Booking
        </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
            <a class="nav-link" href="AddAdmin.php">
              <p>Add Employee</p>
            </a>
          </li>
                   <li class="nav-item ">
            <a class="nav-link" href="AddMovies.php">
              <p>Add Movies</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Theater.php">
              <p>Add Theater</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Showtime.php">
              
              <p>Add Show Time</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Discount.php">  
              <p>Add Discount</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ViewMovies.php">
                <p>View Movies Detail</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ViewTheater.php">
                <p>View Theater Details</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ViewShow.php">
                <p>View Show Details</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ViewDiscount.php">
                <p>View Discount Details</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="ViewBooking.php">
                <p>View Booking Details</p>
            </a>
          </li>
        </ul>
       </div>
    </div>
    
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                   
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)"><?php
                  
                                    echo $_SESSION["name"];
                                    ?></a>
                  <a class="dropdown-item" href="Logout.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
            <!-- End Navbar -->
</body>
</html>