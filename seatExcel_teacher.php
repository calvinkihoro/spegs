<!DOCTYPE html>
<html lang="en">
<head>
<?php 
require_once("session.php");
include('arrangement/header.php');
?>
 <title>Generate Seat Report</title>
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
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Seat Components</h6>
            <a class="collapse-item " href="seatgenerate.php">Seat Generation</a>
            <a class="collapse-item" href="seatgenerate_view.php">View Seat Generated</a>
            <a class="collapse-item" href="seatExcel_student.php">Report Student</a>
            <a class="collapse-item active" href="seatExcel_teacher.php">Report Teacher</a>
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


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      
      <!-- Nav Item - Alerts -->
      
      <!-- Nav Item - Messages -->
     

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
 require_once('connection.php');
 $sql =mysqli_query($connection, "SELECT DISTINCT e_course FROM exam_no");
 $sq =mysqli_query($connection, "SELECT DISTINCT e_levels FROM exam_no");
$s =mysqli_query($connection, "SELECT DISTINCT room FROM `exam_no`");   
?> 

 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h4 class="h3  text-gray-900">CLASS REPORT INVIGILATOR</h4>

          <div class="row">

            <div class="col-lg-3">

              <!-- form start -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info">Export PDF Report</h6>
                </div>
                <div class="card-body">
                <form class="user" method="post" action="seatPdf_teacher.php">
                <select class="form-control custom-select-lg bg-light" name="room">
                  <option >Choose Class</option>
  <?php
  while( $r =mysqli_fetch_assoc($s)){
    $room =$r['room'];
    
   ?>        
                 <option class=""  value="<?php echo $room;?>"><?php echo $room;?></option>                                   
   <?php } ?> 
                 </select><br/> 
                <select class="form-control custom-select-lg bg-light" name="level">
                  <option >Choose Level</option>
  <?php
  while( $ro =mysqli_fetch_assoc($sq)){
    $lvl =$ro['e_levels'];
    
   ?>        
                 <option class=""  value="<?php echo $lvl;?>"><?php echo $lvl;?></option>                                   
   <?php } ?> 
                 </select><br/> 
                <select class="form-control custom-select-lg bg-light" name="course">
                  <option >Choose Course</option>
  <?php
  while( $row =mysqli_fetch_assoc($sql)){
    $ecou =$row['e_course'];
    
   ?>        
                 <option class=""  value="<?php echo $ecou;?>"><?php echo $ecou;?></option>                                   
   <?php } ?> 
                 </select><br/>   
                  <input type="submit" name="pdff" class="btn btn-info btn-user btn-block form-control-user" value="Generate PDF">
                </form>
              </div>
              <!-- form ends -->
            </div>
        </div>
<?php
 require_once('connection.php');
 $sql =mysqli_query($connection, "SELECT DISTINCT e_course FROM exam_no");
 $sq =mysqli_query($connection, "SELECT DISTINCT e_levels FROM exam_no");
$s =mysqli_query($connection, "SELECT DISTINCT room FROM `exam_no`");   
?> 
        <div class="col-lg-3">

              <!-- form start -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info">Export EXCEL Report</h6>
                </div>
                <div class="card-body">
                <form class="user" method="post" action="techer_excel.php">
                <select class="form-control custom-select-lg bg-light" name="room">
                  <option >Choose Class</option>
  <?php
  while( $r =mysqli_fetch_assoc($s)){
    $room =$r['room'];
    
   ?>        
                 <option class=""  value="<?php echo $room;?>"><?php echo $room;?></option>                                   
   <?php } ?> 
                 </select><br/> 
                <select class="form-control custom-select-lg bg-light" name="level">
                  <option >Choose Level</option>
  <?php
  while( $ro =mysqli_fetch_assoc($sq)){
    $lvl =$ro['e_levels'];
    
   ?>        
                 <option class=""  value="<?php echo $lvl;?>"><?php echo $lvl;?></option>                                   
   <?php } ?> 
                 </select><br/> 
                <select class="form-control custom-select-lg bg-light" name="course">
                  <option >Choose Course</option>
  <?php
  while( $row =mysqli_fetch_assoc($sql)){
    $ecou =$row['e_course'];
    
   ?>        
                 <option class=""  value="<?php echo $ecou;?>"><?php echo $ecou;?></option>                                   
   <?php } ?> 
                 </select><br/>   
                  <input type="submit" name="excel" class="btn btn-info btn-user btn-block form-control-user" value="Generate Excel">
                  </form>
              </div>
              <!-- form ends -->
            </div>
<?php 
$que =mysqli_query($connection,"SELECT * FROM classroom"); 

?>
        </div>
        <div class="col-lg-6">
           <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info">VIEW OF CLASS</h6>
                </div>
          <div class="card-body ">
                <div class="table-responsive">
                <table class="table table-borderedless table-condensed table-sm table-striped" id="dataTable" style="height: 100px;" overflow-y="Scroll">
                   <thead class="table-info ">
                    <tr>
                      <th>Room</th>
                      <th>Course</th>
                      <th>Level</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Room</th>
                      <th>Course</th>
                      <th>Level</th>
                    </tr>
                  </tfoot>
                  <tbody>
<?php 
while( $ass =mysqli_fetch_assoc($que)){
    $rname =$ass['roomname'];
    ?>
                      <tr>                      
<?php
$qr=mysqli_query($connection,"SELECT DISTINCT e_course,e_levels FROM `exam_no` WHERE room='$rname'");
while($cr=mysqli_fetch_assoc($qr)){$e_c=$cr['e_course'];$e_l=$cr['e_levels'];?>
                         <td><?php echo $rname; ?></td>
                         <td><?php echo $e_c; ?></td>
                          <td><?php echo $e_l; ?></td>

                      </tr>
                      <?php } }?>
                    </tbody>
                  </table>
                </div>
                </div>
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
            <span>Copyright &copy; SPMS 2019</span>
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

  <?php include "arrangement/footer.php" ?>

</body>

</html>