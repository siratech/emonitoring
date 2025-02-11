<?php 
	ob_start();
	include '../libr/config.php';  
		include('session.php');

    include('questios.php');

	if(isset($_POST['submit'])){
		
					$pq=mysqli_query($conn,"SELECT  recomendation, supervisor_name FROM `m_and_e_team_recomendation` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lrecomendation=$piqrow['recomendation'];
						$lsupervisor_name=$piqrow['supervisor_name'];
					}
		
		$yearly = $this_year;
		$monthly = $this_month;
		$thedate = $to_days_date;
		$status2 ="NEW";
		$status1 ="OLD";
		
		
		    $this_user_id = mysqli_real_escape_string($conn, $_POST['this_user_id']);


			$query =	mysqli_query($conn, "UPDATE `last_visit_data` SET `status`='OLD' WHERE `facility_id`='$this_user_id'");											 

                    	mysqli_query($conn, "UPDATE `facility_data` SET `status`='OLD' WHERE `facility_id`='$this_user_id'");					 
	
			//$pid=mysqli_insert_id($conn);fair
							
				if($query){

			mysqli_query($conn, "UPDATE `last_visit_data` SET `health_info_mu_record`='$him' WHERE `facility_id`='$this_user_id' AND status='OLD'");											 

			mysqli_query($conn, "UPDATE `last_visit_data` SET `opd`='$opd_opd' WHERE `facility_id`='$this_user_id' AND status='OLD'");											 

			mysqli_query($conn, "UPDATE `last_visit_data` SET `pharmacy`='$pharmacy_ph' WHERE `facility_id`='$this_user_id' AND status='OLD'");											 

		    mysqli_query($conn, "UPDATE `last_visit_data` SET `lab`='$lab_lab' WHERE `facility_id`='$this_user_id' AND status='OLD'");											 

			mysqli_query($conn, "UPDATE `last_visit_data` SET `a_and_e`='$a_and_e_a_and_e' WHERE `facility_id`='$this_user_id' AND status='OLD'");											 

			mysqli_query($conn, "UPDATE `last_visit_data` SET `labour_room`='$labouroom' WHERE `facility_id`='$this_user_id' AND status='OLD'");											 

			mysqli_query($conn, "UPDATE `last_visit_data` SET `inpatient`='$in_patient' WHERE `facility_id`='$this_user_id' AND status='OLD'");											 

			mysqli_query($conn, "UPDATE `last_visit_data` SET `finace`='$finance' WHERE `facility_id`='$this_user_id' AND status='OLD'");											 


		    mysqli_query($conn, "UPDATE `last_visit_data` SET `total_score`='$number_of_Yes' WHERE `facility_id`='$this_user_id'  AND status='OLD'");											 
	
            mysqli_query($conn, "UPDATE `last_visit_data` SET `supervisor_name`='$lsupervisor_name', `recomendation`='$lrecomendation' WHERE `facility_id`='$this_user_id' AND status='OLD'");											 

					//echo json_encode(array("status" => "Success"));
							echo "<script>
			window.alert('Creating New Visit Successful!');
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


	}



?>