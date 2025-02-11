<?php
	include('../libr/config.php');
	include('session.php');
	$id=$_GET['id'];
	
	$p=mysqli_query($conn,"select * from sch_staff where id='$id'");
	$prow=mysqli_fetch_array($p);
	
	$staff_d_o_b=$_POST['staff_d_o_b'];
	$fullname=$_POST['fullname'];
	$staff_lga=$_POST['staff_lga'];
	$qual=$_POST['qual'];
	$staff_rank=$_POST['staff_rank'];		
	$remark=$_POST['remark'];		
	$staff_gl=$_POST['staff_gl'];		
	$staff_val_no=$_POST['staff_val_no'];
	$first_date_of_appt=$_POST['first_date_of_appt'];		
	$pre_date_of_appt=$_POST['pre_date_of_appt'];
	
	mysqli_query($conn,"update sch_staff set fullname='$fullname', staff_d_o_b='$staff_d_o_b', qual='$qual', staff_rank='$staff_rank', staff_lga='$staff_lga',
remark='$remark', staff_gl='$staff_gl', staff_val_no='$staff_val_no',first_date_of_appt='$first_date_of_appt',pre_date_of_appt='$pre_date_of_appt'	
	where id='$id'");
	

	?>
		<script>
			window.alert('Staff Updated Successfully!');
			window.history.back();
		</script>
	<?php

?>