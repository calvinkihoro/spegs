<!DOCTYPE html>
<html lang="en">
<head>
<?php 
require_once("session.php");
include('arrangement/header.php');
?>
 <title>Seat View</title>
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
        <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded ">
            <h6 class="collapse-header">Register Components:</h6>
            <a class="collapse-item  " href="register_student.php">Register Students</a>
            <a class="collapse-item " href="registered.php">Registered Students</a>
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
            <a class="collapse-item " href="generate.php">Generate Exam No</a>
            <a class="collapse-item" href="generate2.php">View Exam No</a>
            <a class="collapse-item" href="#">Report Student</a>
            <!-- <a class="collapse-item" href="students_excel2.php">Report Student</a> -->
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
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Seat Components</h6>
            <a class="collapse-item" href="seatgenerate.php">Seat Generation</a>
            <a class="collapse-item active" href="seatgenerate_view.php">View Seat Generated</a>
            <a class="collapse-item" href="#">Report Student</a>
            <a class="collapse-item" href="#">Report Teacher</a>
            <a class="collapse-item" href="seatExcel_student.php">Report Student</a>
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
          <button class="btn btn-primary" type="submit" name="search">
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
          <span class="mr-2 d-none d-lg-inline text-gray-800 small font-weight-bold"><img class="img-profile rounded-circle img-profile" src="img/avatar.png" style="width: 40%; height: 60%;" ><br/>
           <?php echo $first." ".$last;?></span>
          <img class="img-profile rounded-circle" src="">
        </a>
        <!-- Dropdown - User Information -->
        
      </li>

    </ul>

  </nav>

        <!-- End of Topbar -->
<?php
require_once 'connection.php';

                  $ser ="";
                  if (isset($_POST['search'])) {
                    $ser =$_POST['searchValue'];
                    $que ="SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id LEFT JOIN classroom ON classroom.id=seat.class_id WHERE CONCAT(`e_number`, `e_admission`, `roomname`,`s_cols`,s_rows) LIKE '%".$ser."%'";
                    
                    //$que ="SELECT * FROM `exam_no` WHERE CONCAT(`id`,`admission`, `department`,course,levels,e_number) LIKE '%".$ser."%'";
                    $s_r = filter($que);
                  
                  } else {
                    $que = "SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id LEFT JOIN classroom ON classroom.id=seat.class_id ORDER BY `roomname` ,`s_rows`, s_cols ASC";
                    $s_r = filter($que);
                  }
                  
                   function filter($que){
                    $connection = mysqli_connect('localhost','root','secret','spegs_v2');
                     $filter_result = mysqli_query($connection,$que);
                     return $filter_result;
                   }


?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 ">SEAT DETAILS</h1>
            <a href="seatview.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> View of Class</a>
            <a href="seatgenerated_update.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Update Seat</a>
          </div>
         
          <div class="card shadow mb-4">

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Generated Seat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form method="POST" >
                <table class="table table-bordered"  id="dataTable" width="" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sno</th>
                      <th>Admission No</th>
                      <th>Exam No</th>
                      <th>Class Name</th>
                      <th>S-colums</th>
                      <th>s-rows</th>
                      <th>Select aLL<input type="checkbox" id="checkAl" class="ml-2"></th>
                      
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sno</th>
                      <th>Admission No</th>
                      <th>Exam No</th>
                      <th>Class Name</th>
                      <th>S-colums</th>
                      <th>s-rows</th>
                      <th><button type="submit" class="btn  btn-sm btn-danger" name="save" >DELETE</button></th>
                      

                      
                    </tr>
                  </tfoot>
                  <tbody>
         <?php
         $n=1;
          while($fetch=mysqli_fetch_array($s_r)) {
            $id=$fetch['s_id'];
          $e_no=$fetch['e_number'];
          $e_adm=$fetch['e_admission'];
          $class=$fetch['roomname'];
          $col=$fetch['s_cols'];
          $row=$fetch['s_rows'];

          ?>
           <tr>
                 <td><?php echo $n; ?></td>
                 <td><?php echo $e_adm; ?></td>
                 <td><?php echo $e_no; ?></td>
                 <td><?php echo $class; ?></td>
                 <td><?php echo $col; ?></td>
                 <td><?php echo $row; ?></td>
                 <td>Select &nbsp;<input type='checkbox' name='delete[]' value='<?= $id ?>' class="ml-2"></td>
                 

          <?php $n++;} ?>
            </tr>
                  </tbody>
                </table>
                 </form>
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
            <span>Copyright &copy;SPEGS 2021</span>
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

<?php include('arrangement/footer.php');?>

</body>

</html>

<script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>

<?php 
if(isset($_POST['save'])){
      $checkbox = $_POST['delete'];
  for($i=0;$i<count($checkbox);$i++){
    $del_id = $checkbox[$i];
     $qry=mysqli_query($connection,"SELECT exam_id FROM seat WHERE s_id='$del_id'");
       $ftc=mysqli_fetch_assoc($qry);  
       $exam_id=$ftc['exam_id'];
      $delete = "DELETE FROM `seat` WHERE s_id='$del_id'";
      $update= "UPDATE `exam_no` SET `room` = '' WHERE `exam_no`.`e_id` ='$exam_id'";
      $d=mysqli_query($connection,$delete);
      $u=mysqli_query($connection,$update);
      
    }
  
}
// if ($_SERVER['REQUEST_METHOD']=='POST') {
//    $deleteall=$_POST['all'];
//    $deleteall = "DELETE * FROM `seat`";
//    $updateall= "UPDATE `exam_no` SET `room` = '' ";
//    mysqli_query($connection,$deleteall);
//    mysqli_query($connection,$updateall);

// }
?>