<!DOCTYPE html>
<html lang="en">

<head>
<?php 
include('arrangement/header.php');

?>
 <title>Forgot Password</title>
</head>

<body class="bg-gradient-primary">

  <div class="container">

  <div class="d-flex justify-content-center align-items-center">
        <div class="w-50 mt-5">
          <div class="card o-hidden border-0 shadow-lg mt-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                      <p class="mb-4">Please enter your email address below and we'll send you a link to reset your password!</p>
                    </div>
                    <form class="user" method="post">
                      <div class="form-group">
                        <input type="email" class="form-control form-control-user rounded" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                      </div>
                      <button type="submit" name="reset" class="btn btn-primary btn-user btn-block rounded">  
                        Reset Password
                      </button>
                    </form>
                    <hr>
                    <div class="text-center">Already have an account? 
                      <a class="" href="index.php"> Login</a>
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
require_once('connection.php');
if(isset($_REQUEST['reset'])){
    $to=mysqli_real_escape_string($connection,trim(strip_tags($_REQUEST['email'])));
    $from="calvin.kihoro@gmail.com";
    $subject="Reset you account here";
    $message="click  here to reset here http://localhost/fyp/v2/reset_password.php?email=$to Reset here";
$sql =mysqli_query($connection,"SELECT email FROM user WHERE email='$to'");
$check=mysqli_num_rows($sql);
if($check == 1){
  if($to && $from  && $subject  && $message){
      mail($to, $subject, $message, $from);
      echo "<script>alert('Visit Your Email Reset You Account')</script>";
  }else{
      echo "<script>alert('Enter you email')</script>";
    }
}else{
  echo "<script>alert('This Account is Not Valid')</script>";
}
}
?>
