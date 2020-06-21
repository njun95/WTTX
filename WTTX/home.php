<?php
session_start();
include 'connection.php';
if(isset($_SESSION['pwd']) && isset($_SESSION['hpwd'])){
if(password_verify($_SESSION['pwd'], $_SESSION['hpwd'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/download.jpg" type="image/ico" />

  <title>WTTX</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
<ul class="navbar-nav ml-auto ml-md-0">
      <img src="images/logo-camtel-2.jpg" height="60px" width="130">
    </ul>
    
    <button class="btn btn-link btn-sm text-dark order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
        <a class="navbar-brand  ml-5">SRAF-BIYEMASSI WTTX TOOL</a> 

<!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
              $ID = $_SESSION['ID'];
              $userfault = "SELECT u.FirstName FROM users u WHERE u.UserID = '$ID'";
              $userfaultDB = mysqli_query($connect, $userfault);
              if($userfaultDB)
              {
                $userfaultHD = mysqli_fetch_row($userfaultDB);
                echo $userfaultHD[0];
                } ?>
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Signed in as
          <?php
              $ID = $_SESSION['ID'];
              $userfault = "SELECT u.FirstName, u.LastName FROM users u WHERE u.UserID = '$ID'";
              $userfaultDB = mysqli_query($connect, $userfault);
              if($userfaultDB)
              {
                $userfaultHD = mysqli_fetch_row($userfaultDB);
                echo $userfaultHD[0]." ".$userfaultHD[1];
                } ?></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>WTTX Planning</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">WTTX PLANNING</h6>
          <a class="dropdown-item" href="coverage.php">Coverage Planning</a>
          <a class="dropdown-item" href="capacity.php"> Capacity Planning</a>
          <a class="dropdown-item" href="mapping.php">Cartography</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-tasks fa-fw"></i>
          <span>PROJECTS</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="projectform.php"> NEW PROJECT</a>
          <a class="dropdown-item" href="consultproject.php">EXISTING PROJECTS</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-book"></i>
          <span>Documentation</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="help.php"> Help</a>
          <a class="dropdown-item" href="reports.php">Reports</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">
          <i class="fas fa-fw fa-toggle-off"></i>
          <span>Logout</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Projects!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="projectform.php">
                <span class="float-left">Create a New Project</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-book"></i>
                </div>
                <div class="mr-5">COVERAGE PLANNING !</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="coverage.php">
                <span class="float-left">START</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-book"></i>
                </div>
                <div class="mr-5">CAPACITY PLANNING!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="capacity.php">
                <span class="float-left">START</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-map-marker"></i>
                </div>
                <div class="mr-5">Cartography</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="mapping.php">
                <span class="float-left">Start</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Area Chart Example-->
        <div class="row">
          <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-sticky-note"></i>
            About WTTX</div>
            <div class="card-body"> WTTx is a 4G & 4.5G-based broadband access solution, which uses wireless to provide fiber-like broadband access for household.WTTx boasts superior network performance, low cost, fast deployment, easy maintenance, and rich services. Operators that deploy WTTx can return their investment in two years. WTTx is an ideal solution for fixed, mobile or new operators. It has already been verified on various customer networks all over the world.</div>
          <div class="card-footer small text-muted"></div>
        </div>
      </div>
        <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-sticky-note"></i>
             WTTX features</div>
            <div class="card-body"> -Improved Coverage <br> -Higher Data Rates<br>-Tripple play Services</div>
          <div class="card-footer small text-muted"></div>
        </div>
        <div>
          <img src="images/one.jpg">
        </div>
      </div>
<div class="col-lg-3">
      <img src="images/two.jpg">
      
    </div>
    </div>
    
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include 'footer.php'; 
 }
}
 else
{
  echo "<script language='JavaScript'> document.location.replace('index.php'); </script>";
  session_destroy();
}

