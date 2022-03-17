<!DOCTYPE html>
<html lang="en">
<head>
<?php 
require_once("session.php");
include('arrangement/header.php');
?>
 <title>Number Generatered</title>
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
        <div class="sidebar-brand-text mx-3">SPGES </div>
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
        <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Exam No Components:</h6>
            <a class="collapse-item " href="generate.php">Generate Exam No</a>
            <a class="collapse-item active" href="generate2.php">View Exam No</a>
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

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- Page Heading -->
          <h1 class="h3 mb-0 text-gray-800 text-center mb-2">GENERATED</h1>
          <div class="card shadow mb-4">

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Generated Number</h6>
            </div>
            <div class="card-body">
              <div class="">
                <form method="POST">
                <table class="table table-bordered w-full text-nowrap" id="dataTable" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sno</th>
                      <th>Admission</th>
                      <th>Exam No</th>
                      <th>Venue</th>
                      <th>Select All <input type="checkbox" id="checkAl" class="ml-2"></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  require_once 'connection.php';
                  $ser ="";
                  if (isset($_POST['search'])) {
                    $ser =$_POST['searchValue'];
                    $que ="SELECT * FROM `register_students` INNER JOIN exam_no ON register_students.admission=exam_no.e_admission WHERE CONCAT(`id`, `firstname`, `middlename`, `lastname`,e_admission,e_number,room) LIKE '%".$ser."%'";
                    //$que ="SELECT * FROM `exam_no` WHERE CONCAT(`id`,`admission`, `department`,course,levels,e_number) LIKE '%".$ser."%'";
                    $s_r = filter($que);
                  
                  } else {
                    $que = "SELECT * FROM register_students INNER JOIN exam_no ON register_students.admission=exam_no.e_admission";
                    $s_r = filter($que);
                  }
                  
                   function filter($que){
                    $connection = mysqli_connect('localhost','root','secret','spegs_v2');
                     $filter_result = mysqli_query($connection,$que);
                     return $filter_result;
                   }

                $no =1;             
               while ($row =mysqli_fetch_array($s_r)) {
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

                 ?>
                 
                 <tr>
                 <td><?php echo $no; ?></td>
                 <td><a href="generate_update.php?adm=<?php echo $ad; ?>"><?php echo $ad; ?></a></td>
                 <td><?php echo $e_num;  ?></td>  
                 <td><?php echo $status; ?></td>   
                  <td><input type='checkbox' name='delete[]' value='<?= $id ?>' class="ml-2">&nbsp; Select</td>        
                 </tr>
                    
                   
                    <?php $no++;} ?>

                  </tbody>

                  <tfoot>
                    <tr>
                       <th colspan="4">&nbsp;</th>
                        <th>
                          <button type="submit" class="btn btn-danger btn-sm mr-4" name="save" >DELETE</button>
                        </th>
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

      $del=mysqli_query($connection,"DELETE FROM `exam_no` WHERE`e_id`='$del_id'");
      $d=mysqli_query($connection,"DELETE FROM `seat` WHERE exam_id='$del_id'");
       
       }
       echo "<meta http-equiv='refresh' content='0'>";
    }
  
?>