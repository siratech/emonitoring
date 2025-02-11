<?php 
	ob_start();
	include '../libr/config.php';  


	if(isset($_POST['submit'])){
		
		
		
		
		$monitoringteam = mysqli_real_escape_string($conn, $_POST['monitoringteam']);		
		$visitquarter = mysqli_real_escape_string($conn, $_POST['visitquarter']);
		$tickvisit = mysqli_real_escape_string($conn, $_POST['tickvisit']);
		$tickvisit	 = mysqli_real_escape_string($conn, $_POST['tickvisit']);
		
		$yearly = $this_year;
		$monthly = $this_month;
		$thedate = $to_days_date;
		$status ="NEW";
		
		
		$this_user_id = mysqli_real_escape_string($conn, $_POST['this_user_id']);


			//Check if user already exists
			$u_check =  mysqli_query($conn, "SELECT * FROM facility_data WHERE facility_id = '$facility_id' AND status ='OLD'");
	
					
			//Count the amount of rows where username = $username
			$check_user = mysqli_num_rows($u_check);
			ob_end_clean();	
			if ($check_user != 0) {

			$query = mysqli_query($conn, "UPDATE `facility_data` SET `monitoringteam`='$monitoringteam', `visitquarter`='$visitquarter', `tickvisit`='$tickvisit', `yearly`='$yearly', `monthly`='$monthly', `thedate`='$thedate', `status`='$status' WHERE `facility_id`='$this_user_id'");											 
	
			//$pid=mysqli_insert_id($conn);fair
							
				if($query){

			mysqli_query($conn, "UPDATE `last_visit_data` SET `monitoringteam`='$monitoringteam', `visitquarter`='$visitquarter', `tickvisit`='$tickvisit', `yearly`='$yearly', `monthly`='$monthly', `thedate`='$thedate' WHERE `facility_id`='$this_user_id'");											 

					//echo json_encode(array("status" => "Success"));
							echo "<script>
			window.alert('Facility Data Added Successfully!');
			window.open('index.php','_self');
		</script>";
					
					exit();			
				} else {
					
					//echo json_encode(array("status" => "failed"));
							echo "<script>
			window.alert('Facility data Adding Failed...');
			window.history.back();
		</script>";
					exit();
				}

			} else {
				//echo json_encode(array("status" => "exists"));
						echo "<script>
			window.alert('Facility Already Added...');
			window.history.back();
		</script>";
				exit();
			}

	}



?>