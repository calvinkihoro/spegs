<!DOCTYPE html>
<html>
<head>
     <title></title>
</head>
<body>
     <table border="1px solid black">
<?php
require_once "connection.php";
$cl1 = "SELECT DISTINCT e_course, e_levels FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '1:%'";
$cl2 = "SELECT DISTINCT e_course, e_levels FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '2:%'";
$cl3 = "SELECT DISTINCT e_course, e_levels FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '3:%'";
$cl4 = "SELECT DISTINCT e_course, e_levels FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '4:%'";
$cl5 = "SELECT DISTINCT e_course, e_levels FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '5:%'";
$cl6 = "SELECT DISTINCT e_course, e_levels FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '6:%'";
$cl7 = "SELECT DISTINCT e_course, e_levels FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '7:%'";
$cl8 = "SELECT DISTINCT e_course, e_levels FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '8:%'";
$cl9 = "SELECT DISTINCT e_course, e_levels FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '9:%'";
$cl10 = "SELECT DISTINCT e_course, e_levels FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '10:%'";
$qcl1=mysqli_query($connection,$cl1);
$qcl2=mysqli_query($connection,$cl2);
$qcl3=mysqli_query($connection,$cl3);
$qcl4=mysqli_query($connection,$cl4);
$qcl5=mysqli_query($connection,$cl5);
$qcl6=mysqli_query($connection,$cl6);
$qcl7=mysqli_query($connection,$cl7);
$qcl8=mysqli_query($connection,$cl8);
$qcl9=mysqli_query($connection,$cl9);
$qcl10=mysqli_query($connection,$cl10);
?>
<thead>
               <tr>
<?php 
$lo=1;
 while($fc1=mysqli_fetch_array($qcl1)) {
          $e1_co=$fc1['e_course'];
          $e1_le=$fc1['e_levels'];
 ?> 
 <td colspan='<?php echo $lo; ?>'> <?php echo $e1_co;?><br/></td>


 <?php
 $lo++;} 
 while($fc2=mysqli_fetch_array($qcl2)) {
          $e2_co=$fc2['e_course'];
          $e2_le=$fc2['e_levels'];
 ?>
 <td><?php echo $e2_co;?></td>

 <?php
 } 
 while($fc3=mysqli_fetch_array($qcl3)) {
          $e3_co=$fc3['e_course'];
          $e3_le=$fc3['e_levels'];
 ?> 
 <td><?php echo $e3_co;?></td>

 <?php
 } 
 while($fc4=mysqli_fetch_array($qcl4)) {
          $e4_co=$fc4['e_course'];
          $e4_le=$fc4['e_levels'];
 ?> 
 <td><?php echo $e4_co;?></td>

 <?php
 } 
 while($fc5=mysqli_fetch_array($qcl5)) {
          $e5_co=$fc5['e_course'];
          $e5_le=$fc5['e_levels'];
 ?> 
 <td><?php echo $e5_co;?></td>

 <?php
 } 
 while($fc6=mysqli_fetch_array($qcl6)) {
          $e6_co=$fc6['e_course'];
          $e6_le=$fc6['e_levels'];
 ?> 
 <td><?php echo $e6_co;?></td>

 <?php
 } 
 while($fc7=mysqli_fetch_array($qcl7)) {
          $e7_co=$fc7['e_course'];
          $e7_le=$fc7['e_levels'];
 ?> 
 <td><?php echo $e7_co;?></td>

 <?php
 } 
 while($fc8=mysqli_fetch_array($qcl8)) {
          $e8_co=$fc8['e_course'];
          $e8_le=$fc8['e_levels'];
 ?> 
 <td><?php echo $e8_co;?></td>

 <?php
 } 
 while($fc9=mysqli_fetch_array($qcl9)) {
          $e9_co=$fc9['e_course'];
          $e9_le=$fc9['e_levels'];
 ?> 
 <td><?php echo $e9_co;?></td>

 <?php
 } 
 while($fc10=mysqli_fetch_array($qcl10)) {
          $e10_co=$fc10['e_course'];
          $e10_le=$fc10['e_levels'];
 ?> 
 <td><?php echo $e10_co;?></td>
<?php }?>

</tr>                    
      </thead>
  </table>
  <table>

<?php
$s1 = "SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '1:%'";
$s2 = "SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '2:%'";
$s3 = "SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '3:%'";
$s4 = "SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '4:%'";
$s5 = "SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '5:%'";
$s6 = "SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '6:%'";
$s7 = "SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '7:%'";
$s8 = "SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '8:%'";
$s9 = "SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '9:%'";
$s10 = "SELECT * FROM `seat` INNER JOIN exam_no ON seat.exam_id=exam_no.e_id WHERE class_id='2' AND seat_no LIKE '10:%'";
$q1=mysqli_query($connection,$s1);
$q2=mysqli_query($connection,$s2);
$q3=mysqli_query($connection,$s3);
$q4=mysqli_query($connection,$s4);
$q5=mysqli_query($connection,$s5);
$q6=mysqli_query($connection,$s6);
$q7=mysqli_query($connection,$s7);
$q8=mysqli_query($connection,$s8);
$q9=mysqli_query($connection,$s9);
$q10=mysqli_query($connection,$s10);


?>

<tbody>
               <tr>
<?php 
 while($f1=mysqli_fetch_array($q1)) {
          $s1_no=$f1['seat_no'];
          $e1_no=$f1['e_number'];
          ?>
 <td><?php echo $s1_no." ".$e1_no."</br>";?></td><br/>

<?php
 }
 while($f2=mysqli_fetch_array($q2)) {
          $s2_no=$f2['seat_no'];
          $e2_no=$f2['e_number'];
          
          ?>
          <td><?php echo $s2_no." ".$e2_no;?></td>
          
          <?php 
      }
 while($f3=mysqli_fetch_array($q3)) {
          $s3_no=$f3['seat_no'];
          $e3_no=$f3['e_number'];
          
          ?>
          <td><?php echo $s3_no." ".$e3_no;?></td>
          
          <?php
          } 
 while($f4=mysqli_fetch_array($q4)) {
          $s4_no=$f4['seat_no'];
          $e4_no=$f4['e_number'];
               
          ?>
          <td><?php echo $s4_no." ".$e4_no;?></td>

          <?php
          } 
 while($f5=mysqli_fetch_array($q5)) {
          $s5_no=$f5['seat_no'];
          $e5_no=$f5['e_number'];
          
          ?>
          <td><?php echo $s5_no." ".$e5_no;?></td>
          <?php }?>
<?php 

 while($f6=mysqli_fetch_array($q6)) {
          $s6_no=$f6['seat_no'];
          $e6_no=$f6['e_number'];
          ?>
          <td><?php echo $s6_no." ".$e6_no;?></td>
<?php 
}
 while($f7=mysqli_fetch_array($q7)) {
          $s7_no=$f7['seat_no'];
          $e7_no=$f7['e_number'];
          
          ?>
          <td><?php echo $s7_no." ".$e7_no;?></td>
          <?php 
      }
 while($f8=mysqli_fetch_array($q8)) {
          $s8_no=$f8['seat_no'];
          $e8_no=$f8['e_number'];
          
          ?>
          <td><?php echo $s8_no." ".$e8_no;?></td>

          <?php
          } 
 while($f9=mysqli_fetch_array($q9)) {
          $s9_no=$f9['seat_no'];
          $e9_no=$f9['e_number'];
          
          ?>
          <td><?php echo $s9_no." ".$e9_no;?></td>
          <?php 
      }
 while($f10=mysqli_fetch_array($q10)) {
          $s10_no=$f10['seat_no'];
          $e10_no=$f10['e_number'];
          
          ?>
                    <td><?php echo $s10_no." ".$e10_no;?></td>
                    <?php  }?>
               </tr>
               
          </tbody>

          
     </table>

</body>
</html>

