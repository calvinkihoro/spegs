<?php
require_once "connection.php";
 $e=base64_decode($_GET['id']);
 echo $e;
 echo $_GET['y'];
if($_GET['y']==1){
	$que=mysqli_query($connection,"UPDATE user SET account=0 WHERE id='$e'")or die(mysqli_error($connection));
	header('location:register_user_view.php');die();
}else{
	$que=mysqli_query($connection,"UPDATE user SET account=1 WHERE id='$e'");
	header('location:register_user_view.php');die();
}
?>