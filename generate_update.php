<?php
require_once('session.php');
$admiss=$_GET['adm'];
 $sql =mysqli_query($connection,"SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE e_admission='$admiss'");
$row=mysqli_fetch_array($sql);
                 $id =$row['id'];
                 $fn =$row['firstname'];
                 $sn =$row['middlename'];
                 $ln =$row['lastname'];
                 $gn =$row['gender'];
                 $ad =$row['e_admission'];
                 $de =$row['department'];
                 $cs =$row['course'];
                 $lev =$row['levels'];
                 $e_num=$row['e_number'];
                 $status=$row['room'];

if(isset($_POST['update'])){
   $exam =mysqli_real_escape_string($connection,$_POST['exam']);
  $admm =mysqli_real_escape_string($connection,$_POST['admm']);
  $room =mysqli_real_escape_string($connection,$_POST['room']);
 
  $sql =mysqli_query($connection, "UPDATE exam_no SET e_number='$exam',room='$room' WHERE e_admission='$admm'");
  if ($sql == 1) {
    echo "<script>alert('INFORMATION SUCCESSFULL UPDATED')</script>";
    header('refresh:0, url = generate2.php');
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
      <title>Information Update</title>
    
    </head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5" style="width:60%; margin-left:20%;">
      <div class="card-body p-0 shadow-lg ">
        <!-- Nested Row within Card Body -->
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Student Information!</h1>
              </div>
              <form class="user" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="firstName" class="label">First Name</label>
                    <input type="text" class="form-control form-control-user rounded"  value="<?php echo $fn; ?>" name="fname">
                  </div>
                  <div class="col-sm-6">
                    <label for="lastName" class="label">Sirname</label>
                    <input type="text" class="form-control form-control-user rounded"  value="<?php echo $sn; ?>" name="sname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for="lastName" class="label">Last Name</label>
                    <input type="text" class="form-control form-control-user rounded"  value="<?php echo $ln; ?>" name="lname" >
                  </div>
                  <div class="col-sm-6">
                    <label for="admissionNumber" class="label">Admission Number</label>
                    <input type="text" class="form-control form-control-user rounded"  value="<?php echo $ad; ?>" name="admm" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for="examinationNumber" class="label">Examination Number</label>
                    <input type="text" class="form-control form-control-user rounded"  value="<?php echo $e_num; ?>" name="exam" readonly>
                  </div>

                   <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="venue" class="label">Venue</label>
                    <input type="text" class="form-control form-control-user rounded"  value="<?php echo $status; ?>" name="room">
                  </div>
                  
                </div>

                <div class="form-group row">
                  <input type="submit" class="btn btn-primary btn-user btn-block rounded" value="Update" name="update">
                </div>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="generate2.php">Back</a>
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