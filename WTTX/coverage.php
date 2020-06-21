<?php
session_start();
include 'connection.php';
include 'header.php';
include 'coverage/gestionCOUV.php';
include 'capacity/gestionCAP.php';
if(isset($_SESSION['pwd']) && isset($_SESSION['hpwd'])){
if(password_verify($_SESSION['pwd'], $_SESSION['hpwd'])){
?>


        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">WTTX PLANNING</a>
          </li>
          <li class="breadcrumb-item active">COVERAGE PLANNING - <?php  if(!isset($_SESSION["ProjectID"]) || empty($_SESSION["ProjectID"])) { echo " ";} else { echo $_SESSION["ProjectName"]; }  ?></li>
        </ol>

        <!-- Icon Cards-->
      

        <!-- Area Chart Example-->
        
        <div class="card mb-3" >
          <div class="card-header">
            coverage number of sites calculation </div>
            <div class="card-body">
               <?php if(!isset($_SESSION["ProjectID"]) || empty($_SESSION["ProjectID"])) {
            echo "<p>pleae create a project </p><a href='projectform.php'>click here</a>";}
            else{
             include 'coverage/inputcoverageparameters.php'; 
          }
          ?>

          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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

