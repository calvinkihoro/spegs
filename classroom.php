<!DOCTYPE html>
<html lang="en">
<head>
<?php 
require_once("session.php");
include('arrangement/header.php');
?>
 <title>Register Class</title>
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
          <span>Settings</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded ">
            <h6 class="collapse-header">Register Components:</h6>
            <a class="collapse-item  " href="register_student.php">Register Students</a>
            <a class="collapse-item " href="registered.php">Registered Students</a>
            <a class="collapse-item active" href="classroom.php">Register
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

<?php
 require_once('connection.php');
 $sql =mysqli_query($connection, "SELECT * FROM classroom");
   
?> 
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-900">Venue Registration</h1>

          <div class="row">

            <div class="col-lg-6">

              <!-- form start -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Register venue</h6>
                </div>
                <div class="card-body">
                <form class="" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="" name="roomname" placeholder="Enter venue name">
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control form-control-user" id="" name="cols" placeholder="Enter Number of Cols">
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control form-control-user" id="" name="rows" placeholder="Enter Number of Rows">
                    </div>
                    
                    <input type="submit" value="Add Venue" name="colrow" class="btn btn-primary btn-user btn-block">
                  </form>
                </div>
              </div>

              <!-- form ends -->
            </div>
            <?php
        require_once('connection.php');
        if(isset($_POST['colrow'])){
          $name =$_POST['roomname'];
          $col =$_POST['cols'];
          $row =$_POST['rows'];
          $sql = mysqli_query($connection,"INSERT INTO classroom(roomname,cols,_rows) VALUES('$name','$col','$row')");
          // if($sql == 1){
          //   echo "<script>alert('SuccessFull Data Insert')</script>";
          // }else{
          //   echo "<script>alert('Failed Data Insert')</script>";
          // }
        }
        ?>

            <div class="col-lg-6">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">View Of Class</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-borderedless table-sm w-100 text-gray-900" id="dataTable" cellspacing="0">
                  <thead class="table-primary">
                    <tr>
                      <th>Sno</th>
                      <th>Room</th>
                      <th>Number Column</th>
                      <th>Number Rows</th>
                      <th>Ratio</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $ser ="";
                  if (isset($_POST['search'])) {
                    $ser =$_POST['searchValue'];
                    $que ="SELECT * FROM classroom WHERE CONCAT(`id`, `roomname`, `cols`, `_rows`) LIKE '%".$ser."%'";
                    $s_r = filter($que);
                  
                  } else {
                    $que = "SELECT * FROM classroom";
                    $s_r = filter($que);
                  }
                  
                   function filter($que){
                    $connection = mysqli_connect('localhost','root','secret','spegs_v2');
                     $filter_result = mysqli_query($connection,$que);
                     return $filter_result;
                   }

  $no =1;
  while( $row =mysqli_fetch_assoc($s_r)){
    $class_id=$row['id'];
    $name =$row['roomname'];
    $col =$row['cols'];
   $row =$row['_rows'];
   ?> 
                <tr>
                 <td><?php echo $no; ?></td>
                 <td><?php echo $name; ?></td>
                 <td><?php echo $col; ?></td>
                 <td><?php echo $row; ?></td>
                 <td><?php echo $col.':'.$row; ?></td>
                 
                 </tr>
                    <?php $no++;} ?>

                  </tbody>
                </table>
              </div>
                </div>
              </div>

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

  <!-- Bootstrap core JavaScript-->
  <script src="included/vendor/jquery/jquery.min.js"></script>
  <script src="included/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="included/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="included/js/sb-admin-2.min.js"></script>

</body>

</html>