<?php
include ('connection.php');
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


  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="BOOTSRAP/css/bootstrap.css" rel="stylesheet">

</head>

<body background="images/internet.jpg"  class="size-2000" >




  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="post" action="register.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="text" id="firstName" name = "firstName" class="form-control" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName'];  ?>" <?php if(isset($_POST['firstName'])) { } else {echo ' autofocus="autofocus"' ;} ?> placeholder="First name" required="required">
              
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="text" id="lastName" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>" class="form-control" placeholder="Last name" required="required">
                   <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input  type="email" id="inputEmail" value="<?php if(isset($_POST['inputEmail']))  echo $_POST['inputEmail']; ?>" name="inputEmail" class="form-control" placeholder="Email address" required="required" <?php if(isset($_POST['inputEmail'])) echo 'autofocus="autofocus"'; ?> >
           <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input  type="password" id="inputPassword" name="inputPassword" value="<?php if(isset($_POST['inputPassword'])) echo $_POST['inputPassword']; ?>" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input required = "" type="password" id="confirmPassword" value="<?php if(isset($_POST['confirmPassword'])) echo $_POST['confirmPassword']; ?>" name="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                   <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          <input type="submit" name="register" class="btn btn-primary btn-block"  value="Register">
        </form>
        <?php
        $checkAcc = "SELECT u.UserID FROM users u ";
$checkAccDB = mysqli_query($connect, $checkAcc);
if($checkAccDB)
{
  
  $checkAccNum = mysqli_num_rows($checkAccDB);

if($checkAccNum > 0){


if(isset($_POST['register']))
{
  //check database if similar account exist
  //first recovering posted information
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
 
  $email = $_POST['inputEmail'];
  $inputPassword = $_POST['inputPassword'];
  $confirmPassword = $_POST['confirmPassword'];
   //only clients can create accounts with this interface
  $sqlcheckaccount = "SELECT u.Email FROM users u WHERE (u.Email = '$email')";
  $sqlcheckaccounthandle = mysqli_query($connect, $sqlcheckaccount);
  $numRows = mysqli_num_rows($sqlcheckaccounthandle);
  if($numRows > 0 )
  {
    
   echo "<br><div class='alert alert-danger'><strong><h5>AN ACCOUNT WITH THE SAME CREDENTIALS EXISTS!!! </h5><br>Review email <i> </strong></div>";
  }
  else
  {
    if(strcmp($confirmPassword, $inputPassword) != 0)
    {
      echo "<br><div class='alert alert-warning'><strong><h5>INCONSISTENT PASSWORDS!</h5></strong></div>";
    }
    else
    {
     $encryptPwd = password_hash($inputPassword, PASSWORD_DEFAULT);
     $createaccount = "INSERT INTO users (FirstName, lastName, Password,Email ) VALUES ('$firstName', '$lastName', '$encryptPwd', '$email')";
     if(mysqli_query($connect, $createaccount))
     {
      echo "<br><div class='alert alert-success'><strong><h5>NEW ACCOUNT WAS SUCCESSFULLY CREATED</h5></strong></div>";
     }
     else
     {
      echo "<br><div class='alert alert-info'><strong><h5>ACCOUNT WAS NOT SUCCESSFULLY CREATED</h5></strong></div>";
     }
     
   }
  }
}
}
        else{
if(isset($_POST['register']))
{
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['inputEmail'];
  $inputPassword = $_POST['inputPassword'];
  $confirmPassword = $_POST['confirmPassword'];
  
    if(strcmp($confirmPassword, $inputPassword) != 0)
    {
      echo "<br><div class='alert alert-warning'><strong><h5>INCONSISTENT PASSWORDS!</h5></strong></div>";
    }
    else
    {
      $encryptPwd = password_hash($inputPassword, PASSWORD_DEFAULT);
     $createaccount = "INSERT INTO users (FirstName, lastName, Password,Email) VALUES ('$firstName', '$lastName', '$encryptPwd', '$email')";
     $check = mysqli_query($connect, $createaccount);
     if(($check))
     {
      echo "<br><div class='alert alert-success'><strong><h5>NEW ACCOUNT WAS SUCCESSFULLY CREATED</h5></strong></div>";
     }
     else
     {
      echo "<br><div class='alert alert-info'><strong><h5>ACCOUNT WAS NOT SUCCESSFULLY CREATED</h5></strong></div>";
     }
   }
  }
}
}
?>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
 

        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>  
    <script>
        $.backstretch("images/internet.jpg", {speed: 200});
    </script>
</body>

</html>
