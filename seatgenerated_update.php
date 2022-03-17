<!DOCTYPE html>
<html lang="en">

    <head>
        <?php 
        include('arrangement/header.php');
        ?>
      <title>Register</title>
    
    </head>
<?php
require_once('session.php');
 require_once('connection.php');
 if (isset($_POST['view'])) {
   $class_id=$_POST['room'];
   $sql =mysqli_query($connection, "SELECT * FROM classroom WHERE id='$class_id'");
   

 }
$s =mysqli_query($connection, "SELECT * FROM `classroom`");   
?>
<body class=" ">

  <div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><a href="dashboard.php"> Dashboard</a></h1>
            <a href="seatgenerate_view.php" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-back fa-sm text-white-50"></i>Back</a>
          </div>

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0" style="width: 100%;">
        <!-- Nested Row within Card Body -->
          <div class="row">

            <div class="col-lg-7">

              <!-- form start -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info">View Of Class</h6>
                </div>
                <div class="card-body">
                <form class="user row" method="post" action="">
                  <div class="col-sm-6">
                <select class="form-control custom-select-lg bg-light" name="room">
                  <option >Choose Class</option>
  <?php
  while( $r =mysqli_fetch_assoc($s)){
    $r_id=$r['id'];
    $room =$r['roomname'];
    
   ?>        
                 <option class=""  value="<?php echo $r_id;?>"><?php echo $room;?></option>                                   
   <?php } ?> 
                 </select>
               </div>
                 <div class="col-sm-6 ">
                 <input type="submit" name="view" class="btn btn-info btn-user btn-block form-control-user" value="View">
               </div>
               </form><br/><br/><br/>
             

               <table border="1px solid black" class="table-striped" style="width: 80%;margin-left: 7%;font-size: 12.5px;">
                
               <?php 
   $ft=mysqli_fetch_assoc($sql);
   $rr_id=$ft['id'];
   echo $rname=$ft['roomname'];
   $r=$ft['_rows'];
   $c=$ft['cols'];
                for ($i=1; $i <=$r; $i++) { ?>
                 <tr>
               <?php  for ($j=1; $j <=$c ; $j++) { 
$sq =mysqli_query($connection,"SELECT * FROM seat WHERE s_cols=$j AND s_rows=$i AND class_id='$rr_id'");
 $ssft=mysqli_fetch_assoc($sq);$e=$ssft['exam_id'];
 $esq =mysqli_query($connection,"SELECT * FROM exam_no WHERE e_id='$e'");
 $esft=mysqli_fetch_assoc($esq);$ex=$esft['e_number'];


                ?>
                     <td><?php echo $j.":".$i." ".$ex;?></td> 

                <?php
                

 $sq =mysqli_query($connection,"SELECT * FROM seat WHERE s_cols=$j AND s_rows=$i AND class_id='$rr_id'");
 $sft=mysqli_fetch_assoc($sq); 
 $num=mysqli_num_rows($sq);
 if ($num==1) {
  //seat exist
  
   }else{ 
    $seat=$j.":".$i;
    $seatdisplay[]=$seat; 
    $seatcount=count($seatdisplay);
     }
                 }}?>
                 </tr>
               </table>
              </div>
              <!-- form ends -->
            </div>
        </div>
        <div class="col-lg-5">
           <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info">Seat Not Assigned</h6>
                </div>
          <div class="card-body">
            <span>Number of Not assigned = <?php echo $seatcount;?> </span  >
            <form class="user row" method="post" action="">

                  <div class="col-sm-6">
                <select class="form-control custom-select-lg bg-light" name="seat_id">
                  <option >Choose Seat</option>

                <?php 
                echo $seatcount;
                for ($x=0; $x <$seatcount ; $x++) {?>
                
                 <option class=""  value="<?php echo $seatdisplay[$x]; ?>"><?php echo $seatdisplay[$x]; ?></option>
                <?php }?>
                </select>
              </div>
              <div class="col-sm-6">

                 <input type="hidden" name="cl_id" value="<?php echo $rr_id;?>">
                 <input type="hidden" name="cl_name" value="<?php echo $rname;?>">

                <select class="form-control custom-select-lg bg-light" name="coulvl">
                  <option >Level And Course</option>
                <?php 
   $select_u=mysqli_query($connection,"SELECT DISTINCT e_levels,e_course  FROM `exam_no` WHERE room=''");
   while($select_uf=mysqli_fetch_assoc($select_u)){
    $lvl=$select_uf['e_levels'];$cou=$select_uf['e_course'];
                ?>
                  <option ><?php echo $lvl." ".$cou;?> </option>
                  <?php }?>
                </select>
                
              </div>
              <input type="submit" name="updateseat" class="btn btn-info btn-user btn-block form-control-user" value="Assign Seat">
            </form>
                </div>
        </div>
      </div>
    </div>

        <!--eof my-5-->
      </div>
    </div>

  </div>

  <?php
  include('arrangement/footer.php');
  ?>
</body>

</html>
<?php
if (isset($_POST['updateseat'])) {
  $seat_id=$_POST['seat_id'];
  $cl_id=$_POST['cl_id'];
  $cl_name=$_POST['cl_name'];
  $coulvl=$_POST['coulvl'];
   
   $s_cr =explode(":",$seat_id);
    $colum =$s_cr[0];
    $row =$s_cr[1];

   $coulv =explode(" ",$coulvl);
    $level =$coulv[0];
    $couse =$coulv[1];

   $select_exam=mysqli_query($connection,"SELECT e_id FROM `exam_no` WHERE e_course='$couse' AND e_levels='$level'");
   $select_fetch=mysqli_fetch_assoc($select_exam);
   $ee_id=$select_fetch['e_id'];

   $ins=mysqli_query($connection,"INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$ee_id', '$cl_id','$colum','$row' ,'$s_cr')");
   $upd=mysqli_query($connection,"UPDATE exam_no SET room='$cl_name' WHERE e_id='$ee_id'");
   // if ($ins==1) {
   //   echo "data inserted";
   // }else{echo "data not inserted";}
   // if ($upd==1) {
   //   echo "dat updated";
   // }else{echo "data not updated";}

}
?>
