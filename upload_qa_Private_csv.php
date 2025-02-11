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
			window.open('upload_qa_form.php','_self');
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
            

            // Map columns from the CSV

$this_year = date('Y');
$this_month = date('F');
$to_days_date=date('D-d, F Y');			

			$q1 = $row[0]; 
			$q2 = $row[1];	
			$q3 = $row[2]; 
			$q4 = $row[3]; 					
			$q5 = $row[4]; 
			$q6 = $row[5];
			$q7 = $row[6];
			$q8 = $row[7];
			$q9 = $row[8];
			$q10 = $row[9];

			$q11 = $row[10]; 
			$q12 = $row[11];	
			$q13 = $row[12]; 
			$q14 = $row[13]; 					
			$q15 = $row[14]; 
			$q16 = $row[15];
			$q17 = $row[16];
			$q18 = $row[17];
			$q19 = $row[18];
			$q20 = $row[19];			
			$q21 = $row[20]; 
			
			$q22 = $row[21];	
			$q23 = $row[22]; 
			$q24 = $row[23]; 					
			$q25 = $row[24]; 
			$q26 = $row[25];
			$q27 = $row[26];
			$q28 = $row[27];
			$q29 = $row[28];
			$q30 = $row[29];
			
			$q31 = $row[30]; 
			$q32 = $row[31];	
			$q33 = $row[32]; 
			$q34 = $row[33]; 					
			$q35 = $row[34]; 
			$q36 = $row[35];
			$q37 = $row[36];
			$q38 = $row[37];
			$q39 = $row[38];
			$q40 = $row[39];
			
			$q41 = $row[40]; 
			$q42 = $row[41];	
			$q43 = $row[42]; 
			$q44 = $row[43]; 					
			$q45 = $row[44]; 
			$q46 = $row[45];
			$q47 = $row[46];
			$q48 = $row[47];
			$q49 = $row[48];
			$q50 = $row[49];
			
			$q51 = $row[50]; 
			$q52 = $row[51];	
			$q53 = $row[52]; 
			$q54 = $row[53]; 					
			$q55 = $row[54]; 
			$q56 = $row[55];
			$q57 = $row[56];
			$q58 = $row[57];
			$q59 = $row[58];
			$q60 = $row[59];

			$q61 = $row[60]; 
			$q62 = $row[61];	
			$q63 = $row[62]; 
			$q64 = $row[63]; 					
			$q65 = $row[64]; 
			$q66 = $row[65];
			$q67 = $row[66];
			$q68 = $row[67];
			$q69 = $row[68];
			$q70 = $row[69];
			
			$q71 = $row[70]; 
			$q72 = $row[71];	
			$q73 = $row[72]; 
			$q74 = $row[73]; 					
			$q75 = $row[74]; 
			$q76 = $row[75];
			$q77 = $row[76];
			$q78 = $row[77];
			$q79 = $row[78];
			$q80 = $row[79];

			$q81 = $row[80]; 
			$q82 = $row[81];	
			$q83 = $row[82]; 
			$q84 = $row[83]; 					
			$q85 = $row[84]; 
			$q86 = $row[85];
			$q87 = $row[86];
			$q88 = $row[87];
			$q89 = $row[88];
			$q90 = $row[89];
			
			$q91 = $row[90]; 
			$q92 = $row[91];	
			$q93 = $row[92]; 
			$q94 = $row[93]; 					
			$q95 = $row[94]; 
			$q96 = $row[95];
			$q97 = $row[96];
			$q98 = $row[97];
			$q99 = $row[98];
			$q100 = $row[99];
			
			$q101 = $row[100]; 
			$q102 = $row[101];	
			$q103 = $row[102]; 
			$q104 = $row[103]; 					
			$q105 = $row[104]; 
			$q106 = $row[105];
			$q107 = $row[106];
			$q108 = $row[107];
			
			$q109 = $row[108]; 
			$q110 = $row[109];	
			$q111 = $row[110]; 
			$q112 = $row[111]; 					
			$q113 = $row[112]; 
			$q114 = $row[113];
			$q115 = $row[114];
			$q116 = $row[115];			
			$q117 = $row[116];	

            // Insert data into the database
            $sql = "UPDATE `facility_data` SET `yearly`='$this_year',`monthly`='$this_month',`thedate`='$to_days_date' WHERE `facility_id`='$this_user_id'";
            if (!$conn->query($sql)) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $rowCount++;
        }

        fclose($handle);

			mysqli_query($conn, "UPDATE `health_info_mu_record` SET `q1`='$q1',`q2`='$q2',`q3`='$q3', `q4`='$q4',`q5`='$q5' ,`q6`='$q6' ,`q7`='$q7' ,`q8`='$q8' WHERE `facility_id`='$this_user_id'");											 
		    mysqli_query($conn, "UPDATE `opd` SET `q9`='$q9',`q10`='$q10',`q11`='$q11',`q12`='$q11',`q13`='$q13',`q14`='$q14',`q15`='$q15',`q16`='$q16',`q17`='$q17',`q18`='$q18',`q19`='$q19',`q20`='$q20',`q21`='$q21',`q22`='$q22',`q23`='$q23',`q24`='$q24',`q25`='$q25',`q26`='$q26',`q27`='$q27',`q28`='$q28',`q29`='$q28',`q30`='$q30' WHERE `facility_id`='$this_user_id'" );											 
			mysqli_query($conn, "UPDATE `pharmacy` SET `q31`='$q31',`q32`='$q32',`q33`='$q33',`q34`='$q34',`q35`='$q35',`q36`='$q36',`q37`='$q37',`q38`='$q38',`q39`='$q39',`q40`='$q40',`q41`='$q41',`q42`='$q42',`q43`='$q43',`q44`='$q44',`q45`='$q45',`q46`='$q46',`q47`='$q47',`q48`='$q48',`q49`='$q49',`q50`='$q50',`q51`='$q51',`q52`='$q52',`q53`='$q53',`q54`='$q54',`q55`='$q55',`q56`='$q56',`q57`='$q57',`q58`='$q58' WHERE `facility_id`='$this_user_id'" );											 
	 		mysqli_query($conn, "UPDATE `lab` SET `q59`='$q59',`q60`='$q60',`q61`='$q61',`q62`='$q62',`q63`='$q63',`q64`='$q64',`q65`='$q65',`q66`='$q66',`q67`='$q67',`q68`='$q68',`q69`='$q69',`q70`='$q70',`q71`='$q71',`q72`='$q72',`q73`='$q73',`q74`='$q74',`q75`='$q75',`q76`='$q76',`q77`='$q77',`q78`='$q78',`q79`='$q79',`q80`='$q80',`q81`='$q81',`q82`='$q82' WHERE `facility_id`='$this_user_id'" );											 
			mysqli_query($conn, "UPDATE `a_and_e` SET `q83`='$q83',`q84`='$q84',`q85`='$q85',`q86`='$q86',`q87`='$q87',`q88`='$q88',`q89`='$q89',`q90`='$q90',`q91`='$q91' WHERE `facility_id`='$this_user_id'");											 
			mysqli_query($conn, "UPDATE `labour_room` SET `q92`='$q92',`q93`='$q93',`q94`='$q94',`q95`='$q95',`q96`='$q96',`q97`='$q97',`q98`='$q98',`q99`='$q99',`q100`='$q100',`q101`='$q101',`q102`='$q102',`q103`='$q103',`q104`='$q104',`q105`='$q105',`q106`='$q106' WHERE `facility_id`='$this_user_id'");
			mysqli_query($conn, "UPDATE `inpatient` SET `q107`='$q107',`q108`='$q108',`q109`='$q109',`q110`='$q110',`q111`='$q111',`q112`='$q112',`q113`='$q113',`q114`='$q114' WHERE `facility_id`='$this_user_id'" );											 
			mysqli_query($conn, "UPDATE `finace` SET `q115`='$q115'	 WHERE `facility_id`='$this_user_id'" );											 
			mysqli_query($conn, "UPDATE `m_and_e_team_recomendation` SET `recomendation`='$q116',`supervisor_name`='$q117'	 WHERE `facility_id`='$this_user_id'" );											 

            mysqli_query($conn, "UPDATE `last_visit_data` SET `supervisor_name`='$q117', `recomendation`='$q116' WHERE `facility_id`='$this_user_id' AND status='NEW'");											 

	
					echo "<script>
		alert('Your file Uploaded Successfull');
		
		
			window.open('index.php','_self');
		</script>";
		exit();	
    } else {
        
        					echo "<script>
		alert('Error: Unable to open the uploaded CSV file.');
			window.open('upload_qa_form.php','_self');
		</script>";
		exit();	

}

} else {
    					echo "<script>
		alert('Error: Please upload a valid CSV file.');
			window.open('upload_qa_form.php','_self');
		</script>";
		exit();	
}

// Close the database connection
$conn->close();

?>
