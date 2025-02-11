<?php
/**
 * Created by PhpStorm.
 * User: Aravinth
 * Date: 10-09-2017
 * Time: 12:30 PM
 */

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

include('../libr/config.php');
include('session.php');
require_once ('Spout/Autoloader/autoload.php');

if(!empty($_FILES['excelfile']['name']))
{
    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES['excelfile']['name']);

    // check file has extension xlsx, xls and also check
    // file is not empty
    if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls')
        && $_FILES['excelfile']['size'] > 0 )
    {
        $file = $_FILES['excelfile']['tmp_name'];

        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::XLSX);

        // Open file
        $reader->open($file);
        $count = 0;

        // Number of sheet in excel file
        foreach ($reader->getSheetIterator() as $sheet)
        {

            // Number of Rows in Excel sheet
            foreach ($sheet->getRowIterator() as $row)
            {

                // It reads data after header. In the my excel sheet,
                // header is in the first row.
                if ($count > 0) {

                    // Data of excel sheet

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
			
			$q82 = $row[73];	
			$q83 = $row[74]; 
			$q84 = $row[75]; 					
			$q85 = $row[76]; 
			$q86 = $row[77];
			$q87 = $row[78];
			$q88 = $row[79];
			$q89 = $row[80];
			$q90 = $row[81];
			
			$q91 = $row[82]; 
			$q92 = $row[83];	
			$q93 = $row[84]; 
			$q94 = $row[84]; 					
			$q95 = $row[86]; 
			$q96 = $row[87];
			$q97 = $row[88];
			$q98 = $row[89];
			$q99 = $row[90];
			$q100 = $row[91];
			
			$q101 = $row[92]; 
			$q102 = $row[93];	
			$q103 = $row[94]; 
			$q104 = $row[95]; 					
			$q105 = $row[96]; 
			$q106 = $row[97];
			
			$q115 = $row[98];
			$q116 = $row[99];			
			$q117 = $row[100];
			$q118 = $row[101];
			$q119 = $row[102];	
			$q200 = $row[103];	



                    //Here, You can insert data into database.
		$qry = "UPDATE `facility_data` SET `yearly`='$this_year',`monthly`='$this_month',`thedate`='$to_days_date' WHERE `facility_id`='$this_user_id'";
  		//$qry = "INSERT INTO `sch_staff` (`id`, `fullname`, `staff_d_o_b`, `staff_lga`, `qual`, `staff_rank`, `staff_gl`, `staff_val_no`, `first_date_of_appt`, `pre_date_of_appt`, `remark`, `sch_access_id`) VALUES (NULL, 'tututut', 'kjk', 'k', 'khh', 'k', 'kh', 'k', 'hkh', 'hk', 'hk', '2')";
  $res = mysqli_query($conn,$qry);

                }
                $count++;

			mysqli_query($conn, "UPDATE `health_info_mu_record` SET `q1`='$q1',`q2`='$q2',`q3`='$q3', `q4`='$q4',`q5`='$q5' ,`q6`='$q6' ,`q7`='$q7' ,`q8`='$q8' WHERE `facility_id`='$this_user_id'");											 
		    mysqli_query($conn, "UPDATE `opd` SET `q9`='$q9',`q10`='$q10',`q11`='$q11',`q12`='$q12',`q13`='$q13',`q14`='$q14',`q15`='$q15',`q16`='$q16',`q17`='$q17',`q18`='$q18',`q19`='$q19',`q20`='$q20',`q21`='$q21',`q22`='$q22',`q23`='$q23',`q24`='$q24',`q25`='$q25',`q26`='$q26',`q27`='$q27',`q28`='$q28',`q29`='$q28',`q30`='$q30' WHERE `facility_id`='$this_user_id'" );											 
			mysqli_query($conn, "UPDATE `pharmacy` SET `q31`='$q31',`q32`='$q32',`q33`='$q33',`q34`='$q34',`q35`='$q35',`q36`='$q36',`q37`='$q37',`q38`='$q38',`q39`='$q39',`q40`='$q40',`q41`='$q41',`q42`='$q42',`q43`='$q43',`q44`='$q44',`q45`='$q45',`q46`='$q46',`q47`='$q47',`q48`='$q48',`q49`='$q49',`q50`='$q50',`q51`='$q51',`q52`='$q52',`q53`='$q53',`q54`='$q54',`q55`='$q55',`q56`='$q56',`q57`='$q57',`q58`='$q58' WHERE `facility_id`='$this_user_id'" );											 
	 		mysqli_query($conn, "UPDATE `lab` SET `q59`='$q59',`q60`='$q60',`q61`='$q61',`q62`='$q62',`q63`='$q63',`q64`='$q64',`q65`='$q65',`q66`='$q66',`q67`='$q67',`q68`='$q68',`q69`='$q69',`q70`='$q70',`q71`='$q71',`q72`='$q72',`q73`='$q73',`q82`='$q82' WHERE `facility_id`='$this_user_id'" );											 
			mysqli_query($conn, "UPDATE `a_and_e` SET `q83`='$q83',`q84`='$q84',`q85`='$q85',`q86`='$q86',`q87`='$q87',`q88`='$q88',`q89`='$q89',`q90`='$q90',`q91`='$q91' WHERE `facility_id`='$this_user_id'");											 
			mysqli_query($conn, "UPDATE `labour_room` SET `q92`='$q92',`q93`='$q93',`q94`='$q94',`q95`='$q95',`q96`='$q96',`q97`='$q97',`q98`='$q98',`q99`='$q99',`q100`='$q100',`q101`='$q101',`q102`='$q102',`q103`='$q103',`q104`='$q104',`q105`='$q105',`q106`='$q106' WHERE `facility_id`='$this_user_id'");
			mysqli_query($conn, "UPDATE `finace` SET `q115`='$q115',`q116`='$q116',`q117`='$q117',`q118`='$q118'	 WHERE `facility_id`='$this_user_id'" );											 
			mysqli_query($conn, "UPDATE `m_and_e_team_recomendation` SET `recomendation`='$q119',`supervisor_name`='$q200'	 WHERE `facility_id`='$this_user_id'" );											 

            mysqli_query($conn, "UPDATE `last_visit_data` SET `supervisor_name`='$q200', `recomendation`='$q119' WHERE `facility_id`='$this_user_id' AND status='NEW'");											 

													 
	/* 		mysqli_query($conn, "UPDATE `lab` SET `q59`=,'$q59'`q60`='$q60',$219`q61`='$q61',`q62`='$q62',`q63`='$q63',`q64`='$q64',`q65`='$q65',`q66`='$q66',`q67`='$q67',`q68`='$q68',`q69`='$q69',`q70`='$q70',`q71`='$q71',`q72`='$q72',`q73`='$q73',`q74`='$q74',`q75`='$q75',`q76`='$q76',`q77`='$q77',`q78`='$q78',`q79`='$q79',`q80`='$q80',`q81`='$q81',`q82`='$q82' WHERE `facility_id`='$this_user_id'" );											 
			mysqli_query($conn, "UPDATE `pre_lession_material` SET `board`='$board',`incinerator`='$incinerator',`lesson_plan`='$lesson_plan' ,`library`='$library' WHERE `sch_access_id`='$this_user_id'" );											 

											 

				 */
          
            }
        }
//exit();
        if($res)
        {

					echo "<script>
		alert('Your file Uploaded Successfull');
			window.open('upload_qa_form.php','_self');
		</script>";
		exit();						

        }
        else
        {
         
			echo "<script>
		alert('Your file Uploaded Failed');
			window.open('upload_qa_form.php','_self');
		</script>";
		exit();		
        }

        // Close excel file
        $reader->close();
    }
    else
    {
		echo "<script>
		alert('Please Choose only Excel file');
			window.open('upload_qa_form.php','_self');
		</script>";
		exit();
    }
}
else
{

	echo "<script>
		alert('File is Empty"."<br>Please Choose Excel file');
			window.open('upload_qa_form.php','_self');
		</script>";
		exit();
	
}

?>
