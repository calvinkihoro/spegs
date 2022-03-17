<?php
session_start();
if(!isset($_SESSION['email'])){
	echo "<script>alert('PLEASE LOGIN: ACCESS DENIAL')</script>";
	header("refresh:0, url=index.php");
	exit;
}else{
	$user=$_SESSION['email'];

}

require_once('connection.php');

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

?>
