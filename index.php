<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    error_reporting(0);
    include('arrangement/header.php');
    ?>
  <title>Login</title>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6 pt-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-4 d-none d-lg-block">
                  <img src="img/atc.png" style="margin-left:30%; margin-top:30%; text-align: center;" class="img-responsive">
                </div> -->
              <div class="col-lg-12 mx-auto">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" method="post">
                    <div class="form-group">
                      <input type="email" required class="form-control form-control-user rounded" id="exampleInputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" required class="form-control form-control-user rounded" id="myInput" name="password" placeholder="Password">  
                     </div>
                    <div class="form-group">
                    <a type="button" class="" onclick="myFunction()"><i class="fa fa-eye " aria-hidden="true"></i></a>
                      <label class="small" >Show Password</label>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block rounded" name="send" value="Continue">  
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot_password.php">Forgot Password?</a>
                  </div>
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
session_start();
$connection =mysqli_connect('localhost','root','secret','spegs_v2') or die('FAILED TO CONNECT TO DATABASE');
if(isset($_POST['send'])){
  $_SESSION['email'] =mysqli_real_escape_string($connection,trim(strip_tags($_POST['email'])));
  $pass=mysqli_real_escape_string($connection,trim(strip_tags($_POST['password'])));
   $hash ="23Ab@12tE#";
    $pass2=$pass.$hash;
    $pass3=md5($pass2);
  $_SESSION['password'] =$pass3;
  $sql = mysqli_query($connection,"SELECT * FROM user WHERE email ='".$_SESSION['email']."' AND password ='".$_SESSION['password']."' AND account='1' ");
  $fetch=mysqli_fetch_assoc($sql);
  $row = mysqli_num_rows($sql);
  if($row == 1){
        header('location:dashboard.php');die();
  }else {
    echo "<script>alert('Enter the valid username and password')</script>";
    die();
  }
}
mysqli_close($connection);
 ?>
 <script>
  
function myFunction(){
  var x = document.getElementById("myInput");
  if(x.type === "password"){
    x.type="text";
  }else{
    x.type="password";
  }
}//end of function

</script>