<?php 
	ob_start();
	include '../libr/config.php';  
		$get_id=$_GET['id'];


	
	$a=mysqli_query($conn,"select * from studentenrollmenttbl where id='$get_id'");
	$b=mysqli_fetch_array($a);
	
	mysqli_query($conn,"delete from studentenrollmenttbl where id='$get_id'");
	//mysqli_query($conn,"delete from drivertbl where driverid='$get_id'");

	//header('location:veiw_expencive.php');

?>
		<script>
			window.alert('Student Deleted Successfully!');
			window.history.back();
		</script>
?>