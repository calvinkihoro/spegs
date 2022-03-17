<?php
require_once('connection.php');
if(isset($_POST['send'])){
  $fname =mysqli_real_escape_string($connection,$_POST['fname']);
  $lname =mysqli_real_escape_string($connection,$_POST['lname']);
  $sex =mysqli_real_escape_string($connection,$_POST['sex']);
  $email =mysqli_real_escape_string($connection,trim($_POST['email']));
  $passw =mysqli_real_escape_string($connection,$_POST['passw']);
  $pass =mysqli_real_escape_string($connection,$_POST['pass']);
  if($passw == $pass){
    $hash ="23Ab@12tE#";
    $pass2=$pass.$hash;
    $pass3=md5($pass2);
    $password=$pass3;
   $sql =mysqli_query($connection, "INSERT INTO user(firstname,lastname,gender,email,password) VALUES('$fname','$lname','$sex','$email','$password')");
  if ($sql == 1) {
    echo "<script>alert('USER SUCCESSFULL ADDED')</script>";
    header('refresh:0, url = index.php');
  } else {
    echo "<script>alert('ERROR IN REGISTERING TRY AGAIN')</script>";
  }
  }else{echo "<script>Window.alert('Password Mismatch')</script>";}
  

}
 ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <?php 
        include('arrangement/header.php');
        ?>
      <title>Register</title>
    
    </head>

<body class="bg-gradient-info">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
           <div class="col-lg-4 d-none d-lg-block"><img src="img/atc.png" style="margin-left:30%; margin-top:30%; text-align: center;" class="img-responsive"></div>
              <div class="col-lg-8">  
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" name="fname" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" name="lname" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" required>Gender :</label>
                  <label class="radio-inline"><input type="radio" name="sex" value="Male">Male</label>
                  <label class="radio-inline"><input type="radio" name="sex" value="Female">Female</label>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="pass" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="passw" required>
                  </div>
                </div>
                <input type="submit" class="btn btn-info btn-user btn-block" value="Register Account" name="send">
                
              </form>
              
              <div class="text-center">
                <a class="small" href="index.php">Already have an account? Login!</a>
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
