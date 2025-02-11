<?php 
	ob_start();
	include '../libr/config.php';  


	if(isset($_POST['submit'])){

//Monthly Attendance of Students (Percentage)
		$rag = mysqli_real_escape_string($conn, $_POST['rag']);
		$this_user_id = mysqli_real_escape_string($conn, $_POST['this_user_id']);



			$query = mysqli_query($conn, "REPLACE INTO `rag_statueses`(`this_user_id`, `rag_status`) VALUES ('$this_user_id','$rag')" );	
			//$pid=mysqli_insert_id($conn);fair
							
				if($query){

					//echo json_encode(array("status" => "Success"));
							echo "<script>
			window.alert('RAG Status Successfully Updated!');
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