<?php
error_reporting();
require_once("connection.php");
$query =mysqli_query($connection,"SELECT * FROM register_students");
while($fetch =mysqli_fetch_assoc($query)){

    $cou =$fetch['course'];
    $p = "/Civil And Irrigation/i";

if(preg_match($p,$cou)){
       $cos = 'CI';
       echo $cos;
  
 }else {
  
 }
 if(strpos($cou,"Civil And Irrigation")){
     echo 'fine';
 }
}
?>
