<?php
require_once("connection.php");
if(isset($_POST['assign'])){
   $class_id=$_POST['c_id'];

  $sql =mysqli_query($connection, "SELECT * FROM classroom WHERE id='$class_id'");
  $clas_fetch=mysqli_fetch_assoc($sql);
  $room_name=$clas_fetch['roomname'];
  $col =$clas_fetch['cols'];
  $row = $clas_fetch['_rows'];

 $sel= mysqli_query($connection,"SELECT * FROM `register_students` INNER JOIN exam_no ON register_students.admission=exam_no.e_admission");
 $sn = 1;
 while($ro =mysqli_fetch_assoc($sel)){
    $dept =strtolower($ro['department']);
    $lev =$ro['levels'];
    $cou =$ro['course'];
    $exam_id =$ro['e_id'];
    $enum=$ro['e_number'];

    if(preg_match("/level 4/i",$lev)){
      switch ($cou){

      case ("Civil And Irrigation")):
           $id; $r = 1;$cou; echo $no =1;
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }//else{echo 'failed';}
              }//else{echo 'failed validation';}//end of check id
              
            }//end of loop
            }//end fetch
            //if(!$e_data){die(mysqli_error($connection));}
            
          
          case (preg_match("/Information Technology/i",$cou)):
            $id; $r = 2;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
           $e_data_id =$e_fetch['e_id']; 
          //seat loop
          $no =2;
          for($c =1; $c<=$col;$c++){
              echo $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              echo $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }else{echo 'failed';}
              }else{echo 'failed validation';}//end of check id
              
            }//end of loop
            }//end fetch
            
         case (preg_match("/Electrical And Biomedical/i",$cou)):
          $id; $r = 3;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =3;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
            
         case (preg_match("/Computer Science/i",$cou)):
          $id; $r = 4;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
              echo 4;
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
            
         case (preg_match("/Electrical And Automation/i",$cou)):
          $id; $r = 5;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id'];
              echo 5; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
            
        case (preg_match("/Lapidary And Jewellery/i",$cou)):
          $id; $r = 6;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
            
        case (preg_match("/Mechanical Engineering/i",$cou)):
          $id; $r = 7;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
            
        case (preg_match("/Electronics And Telecommunications/i",$cou)):
          $id; $r = 8;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
            
        case (preg_match("/Electrical Engineering/i",$cou)):
          $id; $r = 9;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch   
            ;
        case (preg_match("/Laboratory Sciences/i",$cou)):
          $id; $r = 10;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
             ;
        case (preg_match("/Civil Engineering/i",$cou)):
          $id; $r = 1;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
        case (preg_match("/Automotive Engineering/i",$cou)):
          $id; $r = 2;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
        case (preg_match("/Civil And Highway/i",$cou)):
          $id; $r = 4;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
        case (preg_match("/Auto-electrical And Electronic/i",$cou)):
          $id; $r = 3;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
        case (preg_match("/Electronics And Telecommunications/i",$cou)):
          $id; $r = 5;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch    
        case (preg_match("/Electrical And Hydropower/i",$cou)):
          $id; $r = 6;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
        case (preg_match("/Pipe Works, Oil And Gas/i",$cou)):
          $id; $r = 8;$cou; 
           //fetch required data
           $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
           $e_data =mysqli_query($connection,$e_select);
           while($e_fetch = mysqli_fetch_array($e_data)){
              $e_data_id =$e_fetch['e_id']; 
          //seat loop
          echo $no =1;
          for($c =1; $c<=$col;$c++){
               $cr =$r.':'.$c; 
             
                //validation check id
              $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
              $check_id=mysqli_num_rows($check);
              if($check_id == 0){
              $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
              $insert =mysqli_query($connection,$sel);
              if($insert == 1){
                $no ++;
              }
              }//end of check id
              
            }//end of loop
            }//end fetch
        default:
          $id; $r = 9;$cou; 
          //fetch required data
          $e_select ="SELECT e_id FROM exam_no INNER JOIN register_students ON register_students.admission=exam_no.e_admission WHERE register_students.levels='$lev' AND register_students.course ='$cou' LIMIT $col";
          $e_data =mysqli_query($connection,$e_select);
          while($e_fetch = mysqli_fetch_array($e_data)){
             $e_data_id =$e_fetch['e_id']; 
         //seat loop
         echo $no =1;
         for($c =1; $c<=$col;$c++){
              $cr =$r.':'.$c; 
            
               //validation check id
             $check =mysqli_query($connection,"SELECT exam_id,seat_no FROM seat WHERE exam_id='$e_data_id' OR seat_no='$cr'");
             $check_id=mysqli_num_rows($check);
             if($check_id == 0){
             $sel ="INSERT INTO `seat` ( `exam_id`, `class_id`, `seat_no`) VALUES ( '$e_data_id', '$class_id', '$cr')";
             $insert =mysqli_query($connection,$sel);
             if($insert == 1){
               $no ++;
             }
             }//end of check id
             
           }//end of loop
           }//end fetch
        }
    }elseif($lev == 'level 5'){

    }elseif($lev == 'level 6'){

    }elseif($lev == 'level 7'){

    }elseif($lev == 'level 7.2'){

    }elseif($lev == 'level 8'){

    }else{

    }
  continue;
  $sn ++;}
  }

?>