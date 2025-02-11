<?php
//upload.php
include('../libr/config.php'); 
		include('session.php');
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = rand(100, 999) . 'logo.' . $ext;
 $location = '../upload/' . $name;  
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 //mysqli_query($conn,"UPDATE `tblschool` SET `schimagepath` = '$location' WHERE `tblschool`.`id` ='187'");
 
 	$siq=mysqli_query($conn,"select * from `before_pictures` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);	
	$pre1_seat_type=$sirow['lst'];
 if(empty($pre1_seat_type)){
 mysqli_query($conn, "INSERT INTO `before_pictures` (`lst`,`sch_access_id`) VALUES ('$name','$this_user_id')" );
 }
 echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
}
?>
