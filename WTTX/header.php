<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/download.jpg" type="image/ico" />

  <title>WTTX-Dimensioning</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<link href="BOOTSRAP/css/bootstrap.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    
    <button class="btn btn-link btn-sm text-dark order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
        <a class="navbar-brand  ml-5">WTTX PLANNING TOOL</a> 
       
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
      <li class="nav-item">
        <a class="nav-link" href="coverage.php">
          <i class="fas fa-book"></i>
          <span>Coverage PLANNING</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="capacity.php">
          <i class="fas fa-book"></i>
          <span>CAPACITY PLANNING</span></a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="mapping.php">
          <i class="fas fa-map-marker"></i>
          <span>Cartography</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">
          <i class="fas fa-fw fa-toggle-off"></i>
          <span>Logout</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">