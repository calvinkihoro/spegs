<?php
session_start();
if(!isset($_SESSION['email'])){
	echo "<script> alert('PLEASE LOGIN: ACCESS DENIAL')</script>";
	header("refresh:2, url=index.php");
	exit;
}else{
	$user=$_SESSION['email'];
	session_unset();
	session_destroy();

	echo  "<script> alert('YOU ARE LOGOUT TO THE SYSTEM') </script> ";
	header("refresh:0, url=index.php");
}

require_once('connection.php');
mysqli_close($connection);

?>