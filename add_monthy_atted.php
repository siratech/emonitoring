<?php 
	ob_start();
	include '../libr/config.php';  


	if(isset($_POST['submit'])){

//Monthly Attendance of Students (Percentage)
		$monthly_pre1 = mysqli_real_escape_string($conn, $_POST['monthly_pre1']);
		$monthly_pre2 = mysqli_real_escape_string($conn, $_POST['monthly_pre2']);
		$monthly_pre3 = mysqli_real_escape_string($conn, $_POST['monthly_pre3']);
		$monthly_class1 = mysqli_real_escape_string($conn, $_POST['monthly_class1']);
		$monthly_class2 = mysqli_real_escape_string($conn, $_POST['monthly_class2']);
		$monthly_class3 = mysqli_real_escape_string($conn, $_POST['monthly_class3']);
		$monthly_class4 = mysqli_real_escape_string($conn, $_POST['monthly_class4']);
		$monthly_class5 = mysqli_real_escape_string($conn, $_POST['monthly_class5']);
		$monthly_class6 = mysqli_real_escape_string($conn, $_POST['monthly_class6']);
		$monthly = mysqli_real_escape_string($conn, $_POST['monthly']);


			$query = mysqli_query($conn, "INSERT INTO `monthly_attendance`(`monthly_pre1`, `monthly_pre2`, `monthly_pre3`, `monthly_class1`, `monthly_class2`, `monthly_class3`, `monthly_class4`, `monthly_class5`, `monthly_class6`, `monthly`, `sch_access_id`) VALUES ('$monthly_pre1','$monthly_pre2','$monthly_pre3','$monthly_class1','$monthly_class2','$monthly_class3','$monthly_class4','$monthly_class5','$monthly_class6','$monthly','$sch_access_id')" );	
			//$pid=mysqli_insert_id($conn);fair
							
				if($query){

					//echo json_encode(array("status" => "Success"));
							echo "<script>
			window.alert('Monthly Attendance Added Successfully!');
			window.open('index.php','_self');
		</script>";
					
					exit();			
				} else {
					
					//echo json_encode(array("status" => "failed"));
							echo "<script>
			window.alert('Attendance Adding Failed...');
			window.history.back();
		</script>";
					exit();
				}



	}



?>