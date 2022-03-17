<?php
require_once('connection.php');
if(isset($_POST['assign'])){
 $id=$_POST['c_id'];
$qry=mysqli_query($connection,"SELECT * FROM `classroom` WHERE id='$id'");
$fet=mysqli_fetch_assoc($qry);
$class_id=$fet['id'];
$name=$fet['roomname'];
$cols =$fet['cols'];
$row = $fet['_rows'];


 function cs($c,$nta){
  global $connection, $class_id,$row, $name, $col;
  $col;
  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='CS' AND e_levels='$nta' AND room=''  LIMIT $row"); 
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        echo $c ;
        $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}


function c($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='C' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
       $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}

function m($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='M' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}

function e($c,$nta){
  global $connection, $class_id,$row, $name, $col;
 
  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='E' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}

function l($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='L' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}

function ci($c,$nta){
  global $connection, $class_id,$row, $name, $col;
 
  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='CI' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}


function it($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='IT' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}


function eb($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='EB' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}


function lp($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='LP' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}


function a($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='A' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}

function eh($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='EH' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}


function og($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='OG' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}


function ch($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='CH' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}


function ae($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='AE' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}


function et($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='ET' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}


function ea($c,$nta){
  global $connection, $class_id,$row, $name, $col;

  $selec= mysqli_query($connection,"SELECT * FROM exam_no WHERE e_course='EA' AND e_levels='$nta' AND room='' LIMIT $row");
    while($ro =mysqli_fetch_assoc($selec)){
      $e_id=$ro['e_id'];
      for($r =1; $r<=$row;$r++){
        $c ;
       $cr =$c.':'.$r;
      //validation check id
      $check =mysqli_query($connection,"SELECT class_id,seat_no FROM seat WHERE class_id='$class_id' AND seat_no='$cr'");
      $check_id=mysqli_num_rows($check);
      if($check_id == 0){
        $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `s_cols`, `s_rows`, `seat_no`) VALUES ( '$e_id', '$class_id', '$c','$r' ,'$cr')";
        $upd="UPDATE exam_no SET room='$name' WHERE e_id='$e_id'";
        $insert =mysqli_query($connection,$sel) or die("failed".mysqli_error($connection));
        $update =mysqli_query($connection,$upd) or die("failed update".mysqli_error($connection));
        break;
      }//end of check id
    }//end of while
}
}

$nta="4";

for ($c=1; $c <= $cols; $c++) { 
  cs($c,$nta);
  c($c,$nta);
  m($c,$nta);
  e($c,$nta);
  l($c,$nta);
  ci($c,$nta);
  it($c,$nta);
  eb($c,$nta);
  lp($c,$nta);
  a($c,$nta);
  eh($c,$nta);
  og($c,$nta);
  ch($c,$nta);
  ae($c,$nta);
  et($c,$nta);
  ea($c,$nta); 
  
  if($nta == 8){
    $nta='3';
  } 

  $nta++;
echo "fine".$c."<br/>".mysqli_error($connection);
}




header('location:seatgenerate.php');
}
?>