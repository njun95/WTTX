<?php
session_start();
include 'connection.php';
include 'header.php';
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
        $user = $_SESSION['ID'];
      $sql = "SELECT *  FROM projects p WHERE (p.UserID = '$user')";
       $sqlcheck = mysqli_query($connect, $sql);
       $nbl=mysqli_num_rows($sqlcheck);
      $projects= mysqli_fetch_row($sqlcheck);
      
       $_SESSION['ProjectID'] = $projects[0];
       $_SESSION['ProjectName'] = $projects[2];
       
        echo "<table  class='table table-bordered table-striped table-condensed'>";
              echo "<tr style='background-color:#2D2D2D'><th style='color:#F0F0F0'>PROJECTS</th><th style='color:#F0F0F0'>ACTION</th><th style='color:#F0F0F0'>ACTION</th></tr>";
              for($l=1;$l<=$nbl;$l++){
         $projects= mysqli_fetch_row($sqlcheck);
      $_SESSION['ProjectName'] = $projects[2];
         echo "<tr>";
        echo "<td> ".$_SESSION['ProjectName']." </td>";
        echo "<td><a href='coverage.php?ProjectName=$projects[2]'> Modify </a></td>";
        echo "<td><a href='include/delete.php?ProjectID=$projects[0]'> Delete </a></td>";
        echo "</tr>";
      }
      echo "</table>";

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
      <?php include 'footer.php'; 
 }
}
 else
{
  echo "<script language='JavaScript'> document.location.replace('index.php'); </script>";
  session_destroy();
}

