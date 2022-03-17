<!DOCTYPE html>
<html lang="en">
<head>
<?php 
require_once("session.php");
include('arrangement/header.php');
?>
 <title>Generate Number</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
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
        <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Exam No Components:</h6>
            <a class="collapse-item active" href="generate.php">Generate Exam No</a>
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
          <span class="mr-2 d-none d-lg-inline text-gray-800 small font-weight-bold"><img class="img-profile rounded-circle img-profile" src="img/avatar.png" style="width: 40%; height: 60%;" ><br/>
           <?php echo $first." ".$last;?></span>
          <img class="img-profile rounded-circle" src="">
        </a>
        <!-- Dropdown - User Information -->
        
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 text-center">EXAMINATION NUMBERS GENERATOR</h1>
          
          
          <!-- Content Row -->
          <div class="" style="width:50%;margin-left:25%;">
            <!-- Second Column -->
            <div class="">

              <!-- Background Gradient Utilities -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Choose the input</h6>
                </div>
                <div class="card-body">
                <form class="user" method="post" action="">
                  <div class ="form-group">
                      <select class="form-control" name="semister">
                      <option value="0">Choose semister</option>
                        <option class="" value="1">Semister 1</option>
                        <option class="" value="2">Semister 2</option>
                        
                      </select>
                      </div>
                      <div class ="form-group">
                      <select class="form-control" name="period">
                        <option value="0">Choose type</option>
                        <option class="" value="T1">Test 1</option>
                        <option class=""value="T2">Test 2</option>
                        <option class="" value="F">Final</option>
                      </select>
                      </div>
                      <input type="submit" class="btn btn-primary btn-user btn-block" value="Generate" name="generate" onclick="">
                      </form>
                </div>
              </div>
            </div>
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
          <a class="btn btn-info" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
 <?php
include('arrangement/footer.php');
 ?>
</body>

</html>

              <?php
                error_reporting(1);
                 require_once 'connection.php';
                if(isset($_POST['generate'])){
                $period=mysqli_real_escape_string($connection,trim(strip_tags($_POST['period'])));
                $semister=mysqli_real_escape_string($connection,trim(strip_tags($_POST['semister'])));
                if($period == 'T1' || $period == 'T2'){
                  $per = $period.'/';
                }else{$per = '';}

                $se =$semister;
                $no =1;
                $sql =mysqli_query($connection, "SELECT * FROM register_students");
               
               while ($row =mysqli_fetch_array($sql)) {
                 $ad =$row['admission'];
                 $dep=$row['department'];
                 $cs =$row['course'];
                 $lev =$row['levels'];

                 $adm= str_split($ad ,2);
                 $adm[0];

                 if(preg_match("/level 7-/i",$lev)){
                  $leve =explode("-",$lev);
                  $lve =$leve[0];

                  $leve =explode(" ",$lve);
                  $lv =$leve[1];
                 }else{
                  $leve =explode(" ",$lev);
                  $lv =$leve[1];
                 }
                 
                 $room ='';
                 
                 $digits = 3;
                 $num= rand(pow(10, $digits-1), pow(10, $digits)-1);

                 if(preg_match("/Civil And Irrigation/i",$cs)){
                   $cos = 'CI';
                 }elseif (preg_match("/Information Technology/i",$cs)){
                    $cos = 'IT';
                 }elseif (preg_match("/Electrical And Biomedical/i",$cs)){
                  $cos = 'EB';
                 }elseif (preg_match("/Computer Science/i",$cs)){
                  $cos = 'CS';
                 }elseif (preg_match("/Electrical And Automation/i",$cs)){
                  $cos = 'EA';
                }elseif (preg_match("/Lapidary And Jewellery/i",$cs)){
                  $cos = 'LP';
                }elseif (preg_match("/Mechanical Engineering/i",$cs)){
                  $cos = 'M';
                }elseif (preg_match("/Electrical Engineering/i",$cs)){
                  $cos = 'EL';   
                }elseif (preg_match("/Laboratory Sciences/i",$cs)){
                  $cos = 'LI';
                }elseif (preg_match("/Civil Engineering/i",$cs)){
                  $cos = 'CE';
                }elseif (preg_match("/Automotive Engineering/i",$cs)){
                  $cos = 'AM';
                }elseif (preg_match("/Civil And Highway/i",$cs)){
                  $cos = 'CH';
                }elseif (preg_match("/Auto-electrical And Elect/i",$cs)){
                  $cos = 'AE';
                }elseif (preg_match("/Electronics And Telecommu/i",$cs)){
                  $cos = 'ET';     
                }elseif (preg_match("/Electrical And Hydropower/i",$cs)){
                  $cos = 'EH';
                }elseif (preg_match("/Pipe Works, Oil And Gas/i",$cs)){
                  $cos = 'OG';
                }else{
                   $cos = 'NN';
                }

                 
                 $number = $per.$cos.'/'.$adm[0].'/'.$lv.$se.'/'.$num;

                 //validated admission number
                 $check =mysqli_query($connection,"SELECT e_admission FROM exam_no WHERE `e_admission`='$ad'");
                 $check_num=mysqli_num_rows($check);
                 if($check_num == 0){
                  
                  $insert = "INSERT INTO exam_no(e_admission,e_department,e_course,e_levels,e_number,room) VALUES('$ad','$dep','$cos','$lv','$number','$room')";
                   $iquery = mysqli_query($connection,$insert);

                 }
                 $no++; }
                if($iquery == 1){
                  echo "<script> alert('Number Saves Succesfull')</script>";
                }else{echo "Data Not Saves";}
              }
                  ?>