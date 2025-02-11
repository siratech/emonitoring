<?php 
	ob_start();
	include '../libr/config.php';  


	if(isset($_POST['submit'])){
		
	  $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
	        if(in_array($file_ext,$expensions)=== false){
         //$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		 							echo "<script>
			window.alert('Extension not Allowed, please choose a JPEG, PNG, XLSX, DOCX, PDF file.');
			window.history.back();
		</script>";
      }
      
      if($file_size > 2097152){
         //$errors[]='File size must be excately 2 MB';
		 		 							echo "<script>
			window.alert('File size must be excately 2 MB');
			window.history.back();
		</script>";
      }			

		$local_govrn = mysqli_real_escape_string($conn, $_POST['local_govrn']);
		$school_name = mysqli_real_escape_string($conn, $_POST['school_name']);		
		$school_type = mysqli_real_escape_string($conn, $_POST['school_type']);
		$reg_number = mysqli_real_escape_string($conn, $_POST['reg_number']);
		$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);		
		$sur_name = mysqli_real_escape_string($conn, $_POST['sur_name']);			
		$middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
		$class = mysqli_real_escape_string($conn, $_POST['class']);
		
		$gender = mysqli_real_escape_string($conn, $_POST['gender']);
		$addr = mysqli_real_escape_string($conn, $_POST['addr']);		
		$p_g_pho_no = mysqli_real_escape_string($conn, $_POST['p_g_pho_no']);
		$home_addr = mysqli_real_escape_string($conn, $_POST['home_addr']);
		$date_dob = mysqli_real_escape_string($conn, $_POST['date_dob']);
		$age = mysqli_real_escape_string($conn, $_POST['age']);		
		$disability = mysqli_real_escape_string($conn, $_POST['disability']);			
		$edu_status = mysqli_real_escape_string($conn, $_POST['edu_status']);
		$image_path = mysqli_real_escape_string($conn, $_POST['image_path']);
				
	
		$user_id = mysqli_real_escape_string($conn, $_POST['this_user_id']);
			$local_govrn = Mansir::get_lag_by_id($local_govrn);
		
			//Check if user already exists
			$u_check =  mysqli_query($conn, "SELECT * FROM studentenrollmenttbl WHERE reg_number = '$reg_number'");
	
					
			//Count the amount of rows where username = $username
			$check_user = mysqli_num_rows($u_check);
			ob_end_clean();	
			if ($check_user == 0) {

			$query = mysqli_query($conn, "INSERT INTO `studentenrollmenttbl`(`local_govrn`, `school_name`, `school_type`, `reg_number`, `first_name`, `sur_name`, `middle_name`, `classed`, `gender`, `addr`, `p_g_pho_no`, `home_addr`, `date_dob`, `age`, `disability`, `edu_status`, `image_path`, `user_id`) 
			VALUES ('$local_govrn','$school_name','$school_type','$reg_number','$first_name','$sur_name','$middle_name','$class','$gender','$addr','$p_g_pho_no','$home_addr','$date_dob','$age','$disability','$edu_status','$file_name','$user_id')" );

	
							
				if($query){
					
						move_uploaded_file($file_tmp,"../upload/".$file_name);
							
					//echo json_encode(array("status" => "Success"));
							echo "<script>
			window.alert('Student Added Successfull!');
			window.open('index.php','_self');
		</script>";
					exit();								
				} else {
					
					//echo json_encode(array("status" => "failed"));
							echo "<script>
			window.alert('Student Adding Failed...');
			window.history.back();
		</script>";
					exit();
				}

			} else {
				//echo json_encode(array("status" => "exists"));
						echo "<script>
			window.alert('Student Already Added...');
			window.history.back();
		</script>";
				exit();
			}

	}



?>