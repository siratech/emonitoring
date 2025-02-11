<?php
include('../libr/config.php'); 
		include('session.php'); 
if($_FILES["file2"]["name"] != '')
{
 $test = explode('.', $_FILES["file2"]["name"]);
 $ext = end($test);
 $name = rand(100, 999) . 'logo.' . $ext;
 $location = '../upload/' . $name;  
 move_uploaded_file($_FILES["file2"]["tmp_name"], $location);
 	$siq=mysqli_query($conn,"select * from `after_pictures` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);	
	$pre1_seat_type=$sirow['trd'];
 if(empty($pre1_seat_type)){
 mysqli_query($conn, "UPDATE `after_pictures` SET `trd` = '$name' WHERE sch_access_id ='$this_user_id'" );
 }
 echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />';
}
?>