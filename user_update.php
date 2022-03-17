<?php
require_once('session.php');
$sql =mysqli_query($connection,"SELECT * FROM user WHERE email='$user'");
$fetch=mysqli_fetch_array($sql);
$fn=$fetch['firstname'];
$ln=$fetch['lastname'];
$em=$fetch['email'];
$ps=$fetch['password'];

if(isset($_POST['update'])){
   $fname =mysqli_real_escape_string($connection,$_POST['fname']);
  $lname =mysqli_real_escape_string($connection,$_POST['lname']);
  $email =$_POST['email'];
  $pass =mysqli_real_escape_string($connection,$_POST['pass']);
   $hash ="23Ab@12tE#";
    $pass2=$pass.$hash;
    $pass3=md5($pass2);
    $password=$pass3;
 
  $sql =mysqli_query($connection, "UPDATE user SET firstname='$fname', lastname='$lname',password='$password' WHERE email='$email'");
  if ($sql == 1) {
    echo "<script>alert('INFORMATION SUCCESSFULL UPDATED')</script>";
    header('refresh:0, url = index.php');
  } else {
    echo "<script>alert('ERROR IN UPDATE TRY AGAIN')</script>";
  }
}
 ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <?php 
        include('arrangement/header.php');
        ?>
      <title>Account | Update</title>
    
    </head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5" style="width:60%; margin-left:20%;">
      <div class="card-body p-0 shadow-lg ">
        <!-- Nested Row within Card Body -->
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Your Account</h1>
              </div>
              <form class="user" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"  value="<?php echo $fn; ?>" name="fname" >
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user"  value="<?php echo $ln; ?>" name="lname" >
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user"  value="<?php echo $em; ?>" name="email" readonly >
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"  value="" placeholder="Enter new password" name="pass" id="myInput" >
                  </div>
                  <div class="form-group">
                    <a type="button" class="" onclick="myFunction()"><i class="fa fa-eye " aria-hidden="true"></i></a>
                      <label class="small" >Show Password</label>
                    </div>
                </div>
                <input type="submit" class="btn btn-info btn-user btn-block" value="Update" name="update">
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="dashboard.php">Back</a>
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