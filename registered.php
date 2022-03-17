<!DOCTYPE html>
<html lang="en">
<head>
<?php 
require_once("session.php");
include('arrangement/header.php');
?>
 <title>Registered Student</title>
</head>

<body id="page-top" >

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
            <a class="collapse-item  " href="register_student.php">Register Students</a>
            <a class="collapse-item active" href="registered.php">Registered Students</a>
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

<?php
$ser ="";
if (isset($_POST['search'])) {
	$ser =$_POST['searchValue'];
	$que ="SELECT * FROM `register_students` WHERE CONCAT(`id`, `firstname`, `middlename`, `lastname`, `admission`, `department`,course,levels) LIKE '%".$ser."%'";
	$s_r = filter($que);

} else {
	$que = "SELECT * FROM register_students";
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
          <h1 class="h3 mb-4 text-gray-900">Registered Students</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="">
                <form method='post' action=''>
                <table class="table table-bordered table-striped text-nowrap text-gray-900" id="dataTable" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sno</th>
                      <th>Admission</th>
                      <th>Department</th>
                      <th>Course</th>
                      <th>Level</th>
                      <th>Select All<input type="checkbox" id="checkAl" class="ml-2"></th>
                    </tr>
                  </thead>
                  <tbody>
                <?php
               $no =1;
               while ($row =mysqli_fetch_array($s_r)) {
                 $id =$row['id'];
                 $fn =$row['firstname'];
                 $sn =$row['middlename'];
                 $ln =$row['lastname'];
                 $gn =$row['gender'];
                 $ad =$row['admission'];
                 $de =$row['department'];
                 $cs =$row['course'];
                 $lv =$row['levels'];
                ?>

                 <tr>
                 <td><?php echo $no; ?></td>
                 <td><?php echo $ad; ?></td>
                 <td><?php echo $de; ?></td>
                 <td><?php echo $cs; ?></td>
                 <td><?php echo $lv; ?></td>
                 <td><input type='checkbox' name='delete[]' value='<?= $id ?>' class="ml-2 checkbox">&nbsp; Select</td>
                 </tr>
                    <?php $no++;} ?>

                  </tbody>

                  <tfoot>
                    <tr>
                      <th colspan="5">&nbsp;</th>
                      <th> <button type="submit" class="btn btn-sm btn-danger mr-4" name="save" >DELETE</button> </th>
                    </tr>
                  </tfoot>
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

  <?php
  include('arrangement/footer.php');
?>
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
    echo $del_id = $checkbox[$i];
    $qry=mysqli_query($connection,"SELECT * FROM `register_students` INNER JOIN exam_no ON exam_no.e_admission=register_students.admission LEFT JOIN seat ON seat.exam_id=exam_no.e_id WHERE register_students.id='$del_id'");
    $ftc=mysqli_fetch_assoc($qry);
    $exm_id=$ftc['e_id'];
     $s_id=$ftc['s_id'];

     $delete =mysqli_query($connection,"DELETE FROM `register_students` WHERE id='$del_id'");
      $del=mysqli_query($connection,"DELETE FROM `exam_no` WHERE`e_id`='$exm_id'");
      $d=mysqli_query($connection,"DELETE FROM `seat` WHERE s_id='$s_id'");
       
       }
       echo "<meta http-equiv='refresh' content='0'>";
    }
  
?>