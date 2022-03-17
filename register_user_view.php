<!DOCTYPE html>
<html lang="en">

<head>
<?php  
include('arrangement/header.php');
require_once("session.php");
?>
 <title>Dashboard</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SPMS <sup>'</sup></div>
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
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Register Components:</h6>
            <a class="collapse-item " href="register_student.php">Register Students</a>
            <a class="collapse-item example-image-link" data-lightbox='example-1' href="registered.php">Registered Students</a>
            <a class="collapse-item " href="classroom.php">Register
            Class</a>
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
            <a class="collapse-item" href="seatExcel_student.php">Report Student</a>
            <a class="collapse-item" href="seatExcel_teacher.php">Report Teacher</a>
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
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>


<!-- Topbar Search -->
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"method="post">
      <div class="input-group">
        <input type="text" name="searchValue" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-info" type="submit" name="search">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form>


<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">
  <div class="topbar-divider d-none d-sm-block"></div>
      <?php
$sql =mysqli_query($connection,"SELECT * FROM user WHERE email='$user'");
$fetch=mysqli_fetch_array($sql);
$first=$fetch['firstname'];
$last=$fetch['lastname'];
?>
      <!-- Nav Item - User Information -->
      <li class="">
        <a class="text-info" href="user_update.php"  role="button">
          <span class="mr-2 d-none d-lg-inline text-gray-800 small font-weight-bold"><img class="img-profile rounded-circle img-profile" src="img/av10.jpg" style="width: 60%; height: 40px;" ><br/>
           <?php echo $first." ".$last;?></span>
          <img class="img-profile rounded-circle" src="">
        </a>
        <!-- Dropdown - User Information -->
        
      </li>

    </ul>

  </nav>
<!-- End of Topbar -->

<?php
$ser ="";
if (isset($_POST['search'])) {
	$ser =$_POST['searchValue'];
	$que ="SELECT * FROM `user` WHERE CONCAT(`id`, `firstname`, `lastname`, `email`, `status`) LIKE '%".$ser."%'";
	$s_r = filter($que);

} else {
	$que = "SELECT * FROM user";
	$s_r = filter($que);
}

 function filter($que){
  $connection = mysqli_connect('localhost','suma','suma@123','seat');
 	$filter_result = mysqli_query($connection,$que);
 	return $filter_result;
 }

 ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-900">REGISTERED USERS</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-info">USER'S</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sno</th>
                      <th>First-Name</th>
                      <th>Last-Name</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Account</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sno</th>
                      <th>First-Name</th>
                      <th>Last-Name</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Account</th>
                    </tr>
                  </tfoot>
                  <tbody>
                <?php
               $no =1;
               while ($row =mysqli_fetch_array($s_r)) {
                 $id =$row['id'];
                 $fn =$row['firstname'];
                 $ln =$row['lastname'];
                 $gn =$row['gender'];
                 $em =$row['email'];
                 $st =$row['status'];
                 $ac =$row['account'];

                 $enc=base64_encode($id);
                 
                ?>

                 <tr>
                 <td><?php echo $no; ?></td>
                 <td><?php echo $fn; ?></td>
                 <td><?php echo $ln; ?></td>
                 <td><?php echo $gn; ?></td>
                 <td><?php echo $em; ?></td>
                 <td><?php echo $st==1?"<p><a href='register_user_status.php?id=$enc&&y=1' class='btn btn-info'>Admin</a></p>":"<p><a href='register_user_status.php?id=$enc&&y=0' class='btn btn-primary'>User</a></p>"; ?></td>
                 <td><?php echo $ac==1?"<p><a href='register_user_activate.php?id=$enc&&y=1' class='btn btn-info'>Active</a></p>":"<p><a href='register_user_activate.php?id=$enc&&y=0' class='btn btn-primary'>Not Active</a></p>"; ?></td>
                 </tr>
                    <?php $no++;} ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SPMS' 2019</span>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
  <?php
  include('arrangement/footer.php');
?>

</body>

</html>
