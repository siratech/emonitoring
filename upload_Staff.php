<?php

include('../libr/config.php');
include('session.php');


// Check if a file is uploaded
if (isset($_FILES['csvFile']) && $_FILES['csvFile']['error'] === UPLOAD_ERR_OK) {
    // Get file details
    $fileTmpPath = $_FILES['csvFile']['tmp_name'];
    $fileName = $_FILES['csvFile']['name'];
    $fileType = $_FILES['csvFile']['type'];

    // Verify that the uploaded file is a CSV
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    if (strtolower($fileExtension) !== 'csv') {
       // die("Error: Only CSV files are allowed.");
	       					echo "<script>
		alert('Error: Please upload a valid CSV file.');
			window.open('upload_er.php','_self');
		</script>";
		exit();
    }

    // Open the CSV file
    if (($handle = fopen($fileTmpPath, "r")) !== false) {
        $rowCount = 0;

        while (($row = fgetcsv($handle, 1000, ",")) !== false) {
            // Skip the header row (optional)
            if ($rowCount == 0) {
                $rowCount++;
                continue;
            }
            

                    // Data of excel sheet
			$fullname = $row[1]; 
			$staff_d_o_b = $row[2];//->format('Y-m-d');	
			$staff_lga = $row[3]; 
			$qual = $row[4]; 					
			$staff_rank = $row[5]; 
			$staff_gl = $row[6];
			$staff_val_no = $row[7];
			$first_date_of_appt = $row[8];//->format('Y-m-d');
			$pre_date_of_appt = $row[9];//->format('Y-m-d');
			$remark = $row[10];
			$the_user_id = $this_user_id;
			
            // Insert data into the database
            $sql = "INSERT INTO `sch_staff`(`fullname`, `staff_d_o_b`, `staff_lga`,`qual`, `staff_rank`, `staff_gl`, `staff_val_no`, `first_date_of_appt`, `pre_date_of_appt`, `remark`, `sch_access_id`) values ('$fullname','$staff_d_o_b','$staff_lga','$qual','$staff_rank','$staff_gl','$staff_val_no','$first_date_of_appt','$pre_date_of_appt','$remark','$the_user_id')";
            if (!$conn->query($sql)) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $rowCount++;
        }

        fclose($handle);
		
		
					echo "<script>
		alert('Staff Uploaded Successfull');
		
		
			window.open('veiw_staff.php','_self');
		</script>";
		exit();	
    } else {
        
        					echo "<script>
		alert('Error: Unable to open the uploaded CSV file.');
			window.open('upload_er.php','_self');
		</script>";
		exit();	

}

} else {
    					echo "<script>
		alert('Error: Please upload a valid CSV file.');
			window.open('upload_er.php','_self');
		</script>";
		exit();	
}

// Close the database connection
$conn->close();

?>

