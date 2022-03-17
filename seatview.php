<!DOCTYPE html>
<html lang="en">

    <head>
      <script src="included/js/html2pdf.bundle.min.js"></script>
        <?php 
        include('arrangement/header.php');
        ?>
      <title>Register</title>
    
    </head>
<?php
error_reporting(0);
 require_once('connection.php');
 if (isset($_POST['view'])) {
   $class_id=$_POST['room'];
   $sql =mysqli_query($connection, "SELECT * FROM classroom WHERE id='$class_id'");
 }
$s =mysqli_query($connection, "SELECT * FROM `classroom`");   
?>
<body class="bg-primary">

  <div class="container px-0">
  	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-100 mt-4"><a href="dashboard.php" class="text-white"> 
            <i class="fa fa-home mr-1"></i>
            Dashboard</a></h1>
            <a href="seatgenerate_view.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-4"><i class="fas fa-back fa-sm text-white-50"></i>Back</a>
          </div>

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0" style="width: 100%;">
        <!-- Nested Row within Card Body -->
         <div class="row">

            <div class="col-lg-7">

              <!-- form start -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">View Of Class</h6>
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
                 <input type="submit" name="view" class="btn btn-primary  btn-sm btn-user btn-block form-control-user rounded" value="View Arrangement">
               </div>
               </form><br/>
               <?php echo $rname;?>
              </div>
              <!-- form ends -->
            </div>
        </div>
        <div class="col-lg-5">
           <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Export Plan</h6>
                </div>
          <div class="card-body">
                <button class="btn btn-secondary btn-sm shadow" onclick="generatePDF()">Download as PDF</button>
                </div>
        </div>
      </div>
    </div><!-- end of row-->

    <div class="row" id="invoice">
        <div class="col-12 justify-content-center">

        <?php 
          $ft=mysqli_fetch_assoc($sql);
          $rr_id=$ft['id'];
          $rname=$ft['roomname'];
          $r=$ft['_rows'];
          $c=$ft['cols'];
        ?>
          <table class="table table-md table-bordered table-active table-striped text-nowrap text-gray-900" style="font-size: 12.5px;">

          <tr class="text-center bg-dark text-white border-0 text-lg">
            <th colspan="<?php echo $c; ?>" class="border-0 py-3">
              <?php echo strtoupper($rname) ;?>
            </th>
          </tr>

          <?php for ($i=1; $i <=$r; $i++) { ?>

            <tr>
          <?php  for ($j=1; $j <=$c ; $j++) { 
$sq =mysqli_query($connection,"SELECT * FROM seat WHERE s_cols=$j AND s_rows=$i AND class_id='$rr_id'");
$ssft=mysqli_fetch_assoc($sq);$e=$ssft['exam_id'];
$esq =mysqli_query($connection,"SELECT * FROM exam_no WHERE e_id='$e'");
$esft=mysqli_fetch_assoc($esq);$ex=$esft['e_number'];


          ?>
                <td class="seat"><?php echo $ex;?> </td> 

          <?php
          $seat=$j.":".$i;

$sq =mysqli_query($connection,"SELECT * FROM seat WHERE s_cols=$j AND s_rows=$i AND class_id='$rr_id'");
$sft=mysqli_fetch_assoc($sq);
$num=mysqli_num_rows($sq);
if ($num==1) {
//seat exist

}else{ 
$seatdisplay[]=$sft['seat_no']; 
$seatcount=count($seatdisplay);

}
            }}?>
            </tr>
          </table>


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
<script>
      function generatePDF() {
        // Choose the element that our invoice is rendered in.
        const element = document.getElementById("invoice");
        const fileNumber = Math.floor(Math.random() * 9999);
        // Choose the element and save the PDF for our user.
        var opt = {
          margin:       0,
          filename:     'seating-plan-'+fileNumber+'.pdf',
          image:        { type: 'jpeg', quality: 0.98 },
          html2canvas:  { scale: 2 },
          jsPDF:        { unit: 'in', format: 'A3', orientation: 'portrait' }
        };
        html2pdf()
          .set(opt)
          .from(element)
          .save();
};

$(document).ready(function () {
    $('.seat').each(function () {
        seat = $(this);
        seatWidth = seat.width();
        
        if (seatWidth <= 10) {seat.addClass('bg-dark border-0')}
    });
});

</script>
