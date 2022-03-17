<!DOCTYPE html>
<html lang="en">
<head>
<?php 
require_once("session.php");
include('arrangement/header.php');
?>
 <title>Register</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-user-graduate"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SPEGS</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Registration</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded ">
            <h6 class="collapse-header">Register Components:</h6>
            <a class="collapse-item active " href="register_student.php">New Students</a>
            <a class="collapse-item " href="registered.php">Registered Students</a>
            <a class="collapse-item " href="classroom.php">Venues</a>
          </div>
        </div>
      </li>

<!-- Divider -->
<hr class="sidebar-divider">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Examination No</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Exam No Components:</h6>
            <a class="collapse-item" href="generate.php">Generate Exam No</a>
            <a class="collapse-item" href="generate2.php">View Exam No</a>
            <a class="collapse-item" href="students_excel2.php">Report Student</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Seat Planning</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Seat Components</h6>
            <a class="collapse-item" href="seatgenerate.php">Seat Generation</a>
            <a class="collapse-item" href="seatgenerate_view.php">View Seat Generated</a>
            <a class="collapse-item" href="#">Report Student</a>
            <a class="collapse-item" href="#">Report Teacher</a>
            <!-- <a class="collapse-item" href="seatExcel_student.php">Report Student</a> -->
            <!-- <a class="collapse-item" href="seatExcel_teacher.php">Report Teacher</a> -->
            <div class="collapse-divider"></div>
            
          </div>
        </div>
      </li>

<!-- Divider -->
<hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>LogOut</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- markdonein  -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

            <?php
            $sql =mysqli_query($connection,"SELECT * FROM user WHERE email='$user'");
            $fetch=mysqli_fetch_array($sql);
            $first=$fetch['firstname'];
            $last=$fetch['lastname'];
            $fullname = $first.' '.$last;
            ?>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow bg-white rounded shadow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-900 font-weight-bold small"> <?php echo $fullname; ?> </span>
                <img class="img-profile rounded-circle" src="./img/avatar.png" width="60" height="60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>
          <!--/ markdonein  -->

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-4 text-gray-900">Student's Registration</h1> -->

          <div class="row">

            <div class="col-5 ml-4">

              <!-- form start -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Single registration</h6>
                </div>
                <div class="card-body">
                <form class="user" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user rounded" id="fname" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user rounded" id="mname" name="mname" placeholder="Second Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user rounded" id="lname" name="lname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input active" type="radio" name="sex" id="male" checked>
                        <label class="form-check-label" for="male">Male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="female" value="Female">
                        <label class="form-check-label" for="female">Female</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user rounded" id="Admission" name="admission" placeholder="Admission No" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user rounded" id="dept" name="dept"  placeholder="Department" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user rounded" id="course" name="course" placeholder="Course" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user rounded" id="level" name="level" placeholder="Level" required>
                    </div>
                    <input type="submit" name="save" class="btn btn-primary btn-user btn-block rounded font-weight-bold" value="Register student"> 
                  </form>
                </div>
              </div>
              <!-- form ends -->
            </div>

            <div class="col-4 offset-md-1">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Bulk Import</h6>
                </div>
                <div class="card-body text-gray-900">
                <p>Choose prefarable format of excel sheet <code>.csv</code> to import multiple user. Format must be followed
                 <span class="font-weight-bold text-primary">Download Template Of Example</span>     
                         </p>
                 <p class="text-center"><a href="upload_template.php" class="text-center font-weight-bold btn btn-secondary btn-sm">Click Here To Download</a></p>
                  <form class="user" enctype="multipart/form-data" method="post">
                  <div class="form-group">
                     <label class="label font-weight-bold text-secondary ">Upload your file</label>
                      <input type="file" class="form-control  " id="" name="file" placeholder="Select A file" value="Upload" required>
                    </div>
                    <input type="submit" name="upload" class="btn btn-primary btn-user btn-block font-weight-bold rounded" value="Import Students">
                  </form>
                </div>
              </div>
<!--Upload student file codes-->
<?php
//error_reporting(0);

$message = '';

if(isset($_POST["upload"]))
{
 if($_FILES['file']['name'])
 {
 $filename = explode(".", $_FILES['file']['name']);
   if(end($filename) == "csv")
   {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   $k=0;
   while($data = fgetcsv($handle))
   {
    
      
    $fname = mysqli_real_escape_string($connection, $data[0]);
    $mname = mysqli_real_escape_string($connection, $data[1]);
    $lname = mysqli_real_escape_string($connection, $data[2]);  
    $gender = mysqli_real_escape_string($connection, $data[3]);
    $adm_no = mysqli_real_escape_string($connection, $data[4]);
    $depart = mysqli_real_escape_string($connection, strtolower($data[5]));
    $course = mysqli_real_escape_string($connection, strtolower($data[6]));
    $level = mysqli_real_escape_string($connection, strtolower($data[7]));
    
    if($k > 1){
      //validated admission number
    $check =mysqli_query($connection,"SELECT admission FROM register_students WHERE admission='$adm_no'");
    $check_num=mysqli_num_rows($check);
    if($check_num == 0){
      $statement = "INSERT INTO register_students (firstname,middlename,lastname,gender,admission,department,course,levels)
      values ('$fname','$mname','$lname','$gender','$adm_no','$depart','$course','$level')";
      mysqli_query($connection, $statement);
    }

    } 
    $k++;  
   }
   fclose($handle);
   ?>
   <script>
   alert('Information Uploaded Successfull');
   window.location.href ='registered.php';
   </script>
   <?php
  }else{
   $message = '<label class="alert alert-danger">Please Select CSV File only</label>';}
 }else{
  $message = '<label class="alert alert-danger">Please Select File</label>';}
}
?>
<!--/Upload student file codes-->

            </div><!--end of this right card-->

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SPEGS 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="included/vendor/jquery/jquery.min.js"></script>
  <script src="included/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="included/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="included/js/sb-admin-2.min.js"></script>

</body>

</html>
<?php error_reporting(E_ALL); ini_set('display_errors', 'On');
if (isset($_POST['save'])) {
  $fname =mysqli_real_escape_string($connection,$_POST['fname']);
  $sname =mysqli_real_escape_string($connection,$_POST['mname']);
  $lname =mysqli_real_escape_string($connection,$_POST['lname']);
  $gender =mysqli_real_escape_string($connection,$_POST['sex']);
  $admis =mysqli_real_escape_string($connection,$_POST['admission']);
  $dept =mysqli_real_escape_string($connection,strtolower($_POST['dept']));
  $cou =mysqli_real_escape_string($connection,strtolower($_POST['course']));
  $level =mysqli_real_escape_string($connection,strtolower($_POST['level']));

  //validated admission number
    $check =mysqli_query($connection,"SELECT admission FROM register_students WHERE admission='$admis'");
    $check_num=mysqli_num_rows($check);
    if($check_num == 0){
  $ins = "INSERT INTO register_students(firstname,middlename,lastname,gender,admission,department,course,levels) VALUES('$fname','$sname','$lname','$gender','$admis','$dept','$cou','$level')";
 $sql =mysqli_query($connection, $ins);
  if ($sql == 1) {
    echo "<script>alert('SUCCESSFULL ADDED'); window.location.href='registered.php';</script>";
    //header('refresh:0, url = registered.php');
  } else {
    echo "<script>alert('ERROR IN REGISTERING TRY AGAIN')</script>";}
  }else{
    echo "<script>alert('USER IS ALREADY EXIST')</script>";
  }

}

 ?>