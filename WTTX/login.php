<?php
include ('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
 <?php 
            if(isset($_POST['inputPassword']) && isset($_POST['inputEmail']))
            {
              $email = $_POST['inputEmail'];
              $pwd = $_POST['inputPassword'];
             
              $sqlcheckuser = "SELECT u.Password, u.FirstName, u.UserID, u.LastName FROM users u WHERE (u.Email = '$email' )";
              $sqluser = mysqli_query($connect, $sqlcheckuser);
              if($sqluser)
              {
                $numUser = mysqli_num_rows($sqluser);
             if($numUser > 0)
                {
                  $user = mysqli_fetch_row($sqluser);
                  if(password_verify($pwd, $user[0]))
                  {
                    
                    echo "<script language='JavaScript'> document.location.replace('home.php'); </script>";
      
                   $_SESSION['ID'] = $user[2];
                   $_SESSION['hpwd'] = $user[0];
                   $_SESSION['pwd'] = $pwd;
                  $_SESSION['firstName'] = $user[1];
                   $_SESSION['lastName'] = $user[3];            
     
                  }
             else{ echo "<br><div class='alert alert-danger'><strong><h5>WRONG PASSWORD!</h5></strong></div>";
                 }
  }

  else{
    $user = mysqli_fetch_row($sqluser);
                  if(password_verify($pwd, $user[0]))
                  {
                    
                    echo "<script language='JavaScript'> document.location.replace('home.php'); </script>";
      
                   $_SESSION['ID'] = $user[2];
                   $_SESSION['hpwd'] = $user[0];
                   $_SESSION['pwd'] = $pwd;
                  $_SESSION['firstName'] = $user[1];
                   $_SESSION['lastName'] = $user[3];            
     
                  }
             else{ echo "<br><div class='alert alert-danger'><strong><h5>WRONG PASSWORD!</h5></strong></div>";
                 }}
 
}
}

  ?>  
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="shortcut icon" href="images/download.jpg" type="image/ico" />


  <title>login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="BOOTSRAP/css/bootstrap.css" rel="stylesheet">

</head>

<body background="images/internet.jpg">

  
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="login.php">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" value="<?php if(isset($_POST['inputEmail'])) echo $_POST['inputEmail']; ?>" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name = "inputPassword" value="<?php if(isset($_POST['inputPassword'])) echo $_POST['inputPassword']; ?>" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input class="btn btn-primary btn-block" value = "Login" type="submit">

          
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
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
        $.backstretch("images/internet.jpg", {speed: 100});
    </script>

</body>

</html>
