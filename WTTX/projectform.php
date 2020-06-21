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
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Creat a Project</div>
      <div class="card-body">
        <form method="post" action="projectform.php">
          <div class="form-group">
            <label for="inputEmail">PROJECT NAME </label>
            <div class="form-label-group">
              <input  type="text" id="ProjectName" name="ProjectName" value="<?php if(isset($_POST['ProjectName'])) echo $_POST['ProjectName']; ?>" class="form-control" placeholder="Project Name" required="required">
            </div>
          </div>
          
          <input type="submit" name="CREAT" class="btn btn-primary btn-block"  value="CREAT">
        </form>
        <?php 
        
        $checkPro = "SELECT p.ProjectName FROM projects p ";
$checkProDB = mysqli_query($connect, $checkPro);
if($checkProDB)
{
  
  $checkProNum = mysqli_num_rows($checkProDB);

if($checkProNum  > 0){


if(isset($_POST['CREAT']))
{
  //check database if similar account exist
  //first recovering posted information
  $ProjectName = $_POST['ProjectName'];
 
   //check if projets with the same name exist
  $sqlcheckproject = "SELECT p.ProjectName  FROM projects p WHERE (p.ProjectName = '$ProjectName')";
  $sqlcheckprojectthandle = mysqli_query($connect, $sqlcheckproject);
  $numRows = mysqli_num_rows($sqlcheckprojectthandle);
  if($numRows > 0 )
  {
    
   echo "<br><div class='alert alert-danger'><strong><h5>A PROJECT WITH THE SAME NAME EXISTS!!! </h5></strong></div>";
  }
  else{
    $user = $_SESSION['ID'];

  $createproject = "INSERT INTO projects (ProjectID, UserID,ProjectName) VALUES ('','$user','$ProjectName')";
  $check = mysqli_query($connect, $createproject);
     if(($check))
     {
      $sql = "SELECT *  FROM projects p WHERE (p.UserID = '$user' and p.ProjectName='$ProjectName')";
       $sqlcheck = mysqli_query($connect, $sql);
      $projects= mysqli_fetch_row($sqlcheck);
      
      echo "<br><div class='alert alert-success'><strong><h5>NEW ACCOUNT WAS SUCCESSFULLY CREATED</h5></strong></div>";
      echo "<script language='JavaScript'> document.location.replace('coverage.php'); </script>";

       $_SESSION['ProjectID'] = $projects[0];
       $_SESSION['ProjectName'] = $projects[2];
     
     }
     else
     {
      echo "<br><div class='alert alert-info'><strong><h5>ACCOUNT WAS NOT SUCCESSFULLY CREATED</h5></strong></div>";
     }
  }
}
}


else {
  if(isset($_POST['CREAT']))
{
  //empty database no accounnt ever created
  $ProjectName = $_POST['ProjectName'];
$user = $_SESSION['ID'] ;

 $createproject = "INSERT INTO projects (UserID,ProjectName) VALUES ('$user','$ProjectName')";
  $check = mysqli_query($connect, $createproject);
     if(($check))
     {
      $sql = "SELECT *  FROM projects p WHERE (p.UserID = '$user' and p.ProjectName='$ProjectName')";
       $sqlcheck = mysqli_query($connect, $sql);
      $projects= mysqli_fetch_row($sqlcheck);
      
      echo "<br><div class='alert alert-success'><strong><h5>NEW PROJECT WAS SUCCESSFULLY CREATED</h5></strong></div>";
      echo "<script language='JavaScript'> document.location.replace('coverage.php'); </script>";

       $_SESSION['ProjectID'] = $projects[0];
       $_SESSION['ProjectName'] = $projects[2];
     
     }
     else
     {
      echo "<br><div class='alert alert-info'><strong><h5>PROJECT WAS NOT SUCCESSFULLY CREATED</h5></strong></div>";
     }
}
   }
 }
   

    ?>

       
        <div class="text-center">
          <a class="d-block small mt-3" href="consultproject">Existing project</a>
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

