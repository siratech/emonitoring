<?php 
	ob_start();
	include '../libr/config.php';  

	
	if(isset($_POST['submit'])){

		$the_user_id = mysqli_real_escape_string($conn, $_POST['the_user_id']);
		$facility_name = mysqli_real_escape_string($conn, $_POST['facility_name']);
		$msg_descp = mysqli_real_escape_string($conn, $_POST['msg_descp']);
		$msg_type = mysqli_real_escape_string($conn, $_POST['msg_type']);
		
			$sq=mysqli_query($conn,"select  facility_name, facility_id  from `facility_info` where facility_name='".$facility_name."'");
			$srow=mysqli_fetch_array($sq);	
			$facility_name=$srow['facility_name'];
			$facility_id=$srow['facility_id'];

			$query = mysqli_query($conn, "INSERT INTO `messages_tbl` (`message`,`message_type`,`sender`,`reciever`) VALUES ('$msg_descp','$msg_type','$the_user_id','$facility_id')" );	

		echo "<script>
			window.alert('Message Sended successfully!');
			window.open('index.php','_self');
		</script>";			


			} else {
				//echo json_encode(array("status" => "exists"));
						echo "<script>
			window.alert('Message Not Send...');
			window.history.back();
		</script>";
				exit();
			}

	



?>