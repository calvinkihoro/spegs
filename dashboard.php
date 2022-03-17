<!DOCTYPE html>
<html lang="en">

<head>
<?php  
include('arrangement/header.php');
require_once("session.php");

$time = $_SERVER['REQUEST_TIME'];

/**
* for a 30 minute timeout, specified in seconds
*/
$timeout_duration = 108000;

/**
* Here we look for the user's LAST_ACTIVITY timestamp. If
* it's set and indicates our $timeout_duration has passed,
* blow away any previous $_SESSION data and start a new one.
*/
if (isset($_SESSION['LAST_ACTIVITY']) && 
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();
    session_destroy();
    session_start();
}

/**
* Finally, update LAST_ACTIVITY so that our timeout
* is based on it and not the user's login time.
*/
$_SESSION['LAST_ACTIVITY'] = $time;
?>
 <title>Dashboard</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-user-graduate"></i> -->
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-700 font-weight-bold">Dashboard</h1>
            
          </div>

          <div class="row">
<?php
$sql =mysqli_query($connection,"SELECT COUNT(*) a FROM register_students");
$fetch=mysqli_fetch_array($sql);
$num=$fetch['a'];
?>
            <!-- Registered Students Card -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Registered Students</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
$sql =mysqli_query($connection,"SELECT COUNT(*) b FROM exam_no");
$fetch=mysqli_fetch_array($sql);
$num2=$fetch['b'];
?>
            <!-- Examination Number Generated -->
            <div class="col-xl-3 col-md-6 mb-4">
              <!-- <a href="generate2.php"> -->
              <div class="card border-left-success shadow h-100 py-2" onclick="location.href='generate2.php'" style="cursor: pointer;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Examination Number Generated</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num2; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa- fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            <!-- </a> -->
            </div>
<?php
$cou_sea = mysqli_query($connection,"SELECT COUNT(exam_id) AS sea FROM seat");
$cou_sea = mysqli_fetch_array($cou_sea)['sea'];

?>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <!-- <a href="seatgenerate_view.php"> -->
              <div class="card border-left-info shadow h-100 py-2" onclick="location.href='seatgenerate_view.php'" style="cursor: pointer;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Seat Allocated</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $cou_sea; ?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- </a> -->
            </div>
            <?php
$sql =mysqli_query($connection,"SELECT COUNT(*) c FROM classroom");
$fetch=mysqli_fetch_array($sql);
$num3=$fetch['c'];
?>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <!-- <a href="classroom.php"> -->
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Venues</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num3; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- </a> -->
            </div>
          </div>

          

          <!-- Content Row -->
           <!-- Content Row -->
                    <div class="row">
<?php
$sql = mysqli_query($connection,"SELECT status FROM user WHERE email ='$user'");
  $fetch=mysqli_fetch_assoc($sql);
    $status=$fetch['status']; 
    if($status==1){

$sql =mysqli_query($connection,"SELECT COUNT(*) a FROM user");
$fetch=mysqli_fetch_array($sql);
$cou_act = mysqli_query($connection,"SELECT COUNT(account) AS max FROM user WHERE account='1'");
$cou_act = mysqli_fetch_array($cou_act)['max'];

?>

<?php }?>
          </div><!--End of row-->


          
          <!-- Content Row -->
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; ATC 2021</span>
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
  
  <?php 
include('arrangement/footer.php');
?>
<script type="text/javascript">
  $(window).load(function() {
    $('#loading').hide();
  });
</script>
</body>

</html>
