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

		
		
		$facility_id = mysqli_real_escape_string($conn, $_POST['this_user_id']);

		 

	
		
			//Check if user already exists
			$u_check =  mysqli_query($conn, "SELECT * FROM facility_data WHERE facility_id = '$facility_id'");
	
					
			//Count the amount of rows where username = $username
			$check_user = mysqli_num_rows($u_check);
			ob_end_clean();	
			if ($check_user == 0) {

			$query = mysqli_query($conn, "INSERT INTO `facility_data`(`monitoringteam`, `visitquarter`, `tickvisit`, `yearly`, `monthly`, `thedate`, `facility_id`) VALUES ('$monitoringteam','$visitquarter','$tickvisit','$yearly','$monthly','$thedate','$facility_id')" );
	
			//$pid=mysqli_insert_id($conn);fair
							
				if($query){
				mysqli_query($conn, "INSERT INTO `health_info_mu_record`(`facility_id`) VALUES ('$facility_id')" );
				mysqli_query($conn, "INSERT INTO `opd`(`facility_id`) VALUES ('$facility_id')" );
				mysqli_query($conn, "INSERT INTO `pharmacy`(`facility_id`) VALUES ('$facility_id')" );
				mysqli_query($conn, "INSERT INTO `lab`(`facility_id`) VALUES ('$facility_id')" );
				mysqli_query($conn, "INSERT INTO `a_and_e`(`facility_id`) VALUES ('$facility_id')" );
				mysqli_query($conn, "INSERT INTO `labour_room`(`facility_id`) VALUES ('$facility_id')" );
				mysqli_query($conn, "INSERT INTO `inpatient`(`facility_id`) VALUES ('$facility_id')" );
				mysqli_query($conn, "INSERT INTO `finace`(`facility_id`) VALUES ('$facility_id')" );
				mysqli_query($conn, "INSERT INTO `facility_status`(`facility_id`) VALUES ('$facility_id')" );
				mysqli_query($conn, "INSERT INTO `m_and_e_team_recomendation`(`facility_id`) VALUES ('$facility_id')" );
				mysqli_query($conn, "INSERT INTO `last_visit_data`(`monitoringteam`, `visitquarter`, `tickvisit`, `yearly`, `monthly`, `thedate`, `facility_id`) VALUES ('$monitoringteam','$visitquarter','$tickvisit','$yearly','$monthly','$thedate','$facility_id')" );

	
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