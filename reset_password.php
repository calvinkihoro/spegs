<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include('arrangement/header.php');
    ?>


  <title>Login</title>

</head>

<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
               <div class="col-lg-4 d-none d-lg-block"><img src="img/atc.png" style="margin-left:30%; margin-top:30%; text-align: center;" class="img-responsive"></div>
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Reset Password!</h1>
                  </div>
                  <form class="user" method="post">
                  <div class="form-group">
                      <input type="password" required class="form-control form-control-user" id="exampleInputPassword" name="pass" placeholder="New Password" >
                    </div>
                    <div class="form-group">
                      <input type="password" required class="form-control form-control-user" id="exampleInputPassword" name="passw" placeholder="Confirm New Password" >
                    </div>
                    
                    <input type="submit" class="btn btn-info btn-user btn-block" name="send" value="Save">  
                  </form>
                  <hr>
            
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<?php
include('arrangement/footer.php');
?>

</body>

</html>
<?php
$email=$_GET['email'];
$connection =mysqli_connect('localhost','root','','seat') or die('FAILED TO CONNECT TO DATABASE');
if(isset($_POST['send'])){
  $passw =mysqli_real_escape_string($connection,$_POST['passw']);
  $pass =mysqli_real_escape_string($connection,$_POST['pass']);
  if($passw == $pass){
    $hash ="23Ab@12tE#";
    $pass2=$pass.$hash;
    $pass3=md5($pass2);
    $password=$pass3;
    $sql =mysqli_query($connection, "UPDATE user SET password='$password' WHERE email='$email'");
  if ($sql == 1) {
    echo "<script>alert('PASSWORD CHANGED SUCCESSFUL')</script>";
    header('refresh:0, url = index.php');
  } else {
    echo "<script>alert('ERROR IN CHANGING PASSWORD! TRY AGAIN')</script>";
  }
  }else{echo "<script>Window.alert('Password Mismatch')</script>";}

}
mysqli_close($connection);
 ?>