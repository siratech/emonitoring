<?php
	session_start();
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header('location:../index.php');
    exit();
	}
	$result=mysqli_query($conn, "select * from users where userid='".$_SESSION['id']."'")or die('Error In Session');
	$row=mysqli_fetch_array($result);
	if ($row['usertype']!="f85ae74db48db6d5d3b4f329c93161754de0ab2a") {
    header("location: ../index.php");
    exit();
}	
	if ($row['username']=="admin") {
    header("location: ../logout.php");
    exit();
}
	if ($row['status']!="Active") {
    header("location: ../logout.php");
    exit();
}
  if (time() - $_SESSION["login_time_stamp"] > 300) {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
  }else{
	  
	  
   $_SESSION["login_time_stamp"] = time();	

	$sq=mysqli_query($conn,"select * from `users` where userid='".$_SESSION['id']."'");
	$srow=mysqli_fetch_array($sq);
	
	$user=$srow['username'];
	$this_user_id=$srow['userid'];
  }
	
?>