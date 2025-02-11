<?php
	include('../libr/config.php');
	include('session.php');
	$pid=$_GET['id'];
	
	$a=mysqli_query($conn,"select * from sch_staff where id='$pid'");
	$b=mysqli_fetch_array($a);
	
	mysqli_query($conn,"delete from sch_staff where id='$pid'");
	
	//header('location:veiw_expencive.php');

?>
		<script>
			window.alert('Staff deleted successfully!');
			window.history.back();
		</script>