<?php
require_once("connection.php");
$sql =mysqli_query($connection, "SELECT * FROM classroom");
while($clas_fetch=mysqli_fetch_assoc($sql)){
  $room_name=$clas_fetch['roomname'];
  $col =$clas_fetch['cols'];
  $row = $clas_fetch['_rows'];

  $colrow= $col * $row;
}
$sel= mysqli_query($connection,"SELECT * FROM `register_students`");
 $sn = 1;
 while($ro =mysqli_fetch_assoc($sel)){
    $dept =strtolower($ro['department']);
    $level =$ro['levels'];
    $course =$ro['course'];
    $exam_id =$ro['e_id'];
    $enum=$ro['e_number'];



 }
if($colrow<=120){
  $ratio = $colrow/5;

 $sel= mysqli_query($connection,"SELECT * FROM `register_students` WHERE department ='' AND levels='' LIMIT $ratio");
 $no =1;
 while($ro =mysqli_fetch_assoc($sel)){
    $dept =strtolower($ro['department']);
    $lev =$ro['levels'];
    $cou =$ro['course'];
    $exam_id =$ro['e_id'];
    $enum=$ro['e_number'];

for($i =1; $i<=$row; $i++){
   $cr =$r.':'.$c; 
  //validation check id
    $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
    $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
        $insert =mysqli_query($connection,$sel);
}