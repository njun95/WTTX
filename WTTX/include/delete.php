<?php
session_start();
include '../connection.php';
include '../header.php';
if(isset($_SESSION['pwd']) && isset($_SESSION['hpwd'])){
if(password_verify($_SESSION['pwd'], $_SESSION['hpwd'])){
?>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">NEW PROJECT</a>
          </li>
          <li class="breadcrumb-item active"><a href="#">EXISTING PROJECT</a></li>
        </ol>

        <!-- Icon Cards-->

        <!-- Area Chart Example-->
       

            <div class="container">
    <div class="card mb-5">
      <div class="card-header">Existing Projects</div>
      <div class="card-body">
        
                   
       <?php
                
              $ID = $_GET['ProjectID'] ;
              
             $sql1 = "DELETE FROM projects p WHERE ( p.ProjectID='$ID')";
       $sql1check = mysqli_query($connect, $sql1);
         
       ?>
         
  
       
        <div class="text-center">
          
        </div>
      </div>
    </div>
  </div>
       
        <!-- DataTables Example -->
        
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include '../footer.php'; 
 }
}
 else
{
  echo "<script language='JavaScript'> document.location.replace('index.php'); </script>";
  session_destroy();
}

