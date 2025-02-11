<?php 
	ob_start();
	include '../libr/config.php';  


	if(isset($_POST['submit'])){
		
	  $errors= array();
      $file_name = $_FILES['image1']['name'];
      $file_size =$_FILES['image1']['size'];
      $file_tmp =$_FILES['image1']['tmp_name'];
      $file_type=$_FILES['image1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));
      
      $expensions= array("jpeg","jpg","png");
	        if(in_array($file_ext,$expensions)=== false){
         //$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		 							echo "<script>
			window.alert('Extension not Allowed, please choose a JPEG, PNG file.');
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
	  
	  
	  $errors= array();
      $file_name = $_FILES['image2']['name'];
      $file_size =$_FILES['image2']['size'];
      $file_tmp =$_FILES['image2']['tmp_name'];
      $file_type=$_FILES['image2']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image2']['name'])));
      
      $expensions= array("jpeg","jpg","png");
	        if(in_array($file_ext,$expensions)=== false){
         //$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		 							echo "<script>
			window.alert('Extension not Allowed, please choose a JPEG, PNG file.');
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

	  $errors= array();
      $file_name = $_FILES['image3']['name'];
      $file_size =$_FILES['image3']['size'];
      $file_tmp =$_FILES['image3']['tmp_name'];
      $file_type=$_FILES['image3']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image3']['name'])));
      
      $expensions= array("jpeg","jpg","png");
	        if(in_array($file_ext,$expensions)=== false){
         //$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		 							echo "<script>
			window.alert('Extension not Allowed, please choose a JPEG, PNG file.');
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

	  $errors= array();
      $file_name = $_FILES['image4']['name'];
      $file_size =$_FILES['image4']['size'];
      $file_tmp =$_FILES['image4']['tmp_name'];
      $file_type=$_FILES['image4']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image4']['name'])));
      
      $expensions= array("jpeg","jpg","png");
	        if(in_array($file_ext,$expensions)=== false){
         //$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		 							echo "<script>
			window.alert('Extension not Allowed, please choose a JPEG, PNG file.');
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
						move_uploaded_file($file_tmp,"../upload/".$file_name);
	  
	  exit();
		$p_fullname = mysqli_real_escape_string($conn, $_POST['p_fullname']);
		$p_phone_no = mysqli_real_escape_string($conn, $_POST['p_phone_no']);
		$p_email = mysqli_real_escape_string($conn, $_POST['p_email']);
		$p_addr = mysqli_real_escape_string($conn, $_POST['p_addr']);
		$p_nok_pho_no = mysqli_real_escape_string($conn, $_POST['p_nok_pho_no']);
		$p_image_path = mysqli_real_escape_string($conn, $_POST['p_image_path']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = md5($_POST['password']);
		$usertype="f85ae74db48db6d5d3b4f329c93161754de0ab2a";
		$status="Active";
		
		
		

		
		

		
		
			//Check if user already exists
			$u_check =  mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
	
					
			//Count the amount of rows where username = $username
			$check_user = mysqli_num_rows($u_check);
			ob_end_clean();	
			if ($check_user == 0) {

			$query = mysqli_query($conn, "INSERT INTO `users` (`username`,`password`,`usertype`,`status`) 
										VALUES ('$username','$password','$usertype','$status')" );
	
			$pid=mysqli_insert_id($conn);
							
				if($query){
					mysqli_query($conn, "INSERT INTO `passengertbl` (`user_id`,`p_fullname`,`p_phone_no`,`p_email`,`p_addr`,`p_nok_pho_no`,`p_image_path`) 
			VALUES ('$pid','$p_fullname','$p_phone_no','$p_email','$p_addr','$p_nok_pho_no','$file_name')" );
						move_uploaded_file($file_tmp,"../upload/".$file_name);
							
					//echo json_encode(array("status" => "Success"));
							echo "<script>
			window.alert('User Added Successfully!');
			window.open('home_schedule.php','_self');
		</script>";
					
					exit();			
				} else {
					
					//echo json_encode(array("status" => "failed"));
							echo "<script>
			window.alert('User Adding Failed...');
			window.history.back();
		</script>";
					exit();
				}

			} else {
				//echo json_encode(array("status" => "exists"));
						echo "<script>
			window.alert('User Already Added...');
			window.history.back();
		</script>";
				exit();
			}

	}



?>