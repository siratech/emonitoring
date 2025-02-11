<?php 
include('../libr/config.php');
include ('../conn.php');
include('session.php');

header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=e-MBASE-QA Form.xls");

?>
<table cellpadding="0" cellspacing="0" border="1" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
					
 						<!-- Health Information Managmengt Unit 8-->
                       <th>Record KTSCHMA staff during the visit</th>
						<th>Current enrollee eligibility register displayed at record unit</th>
						<th>Shelves for KTSCHMA file jacket</th>
                        <th>Encounter register properly filled in and up-to-date</th>
						<th>Working mobile phone</th>
						<th>Laptop for sending referral/claims</th>
						<th>KTSCHMA call center complaint number displayed at record unit </th>
						<th>Satisfied with the waiting time to retrieve file</th>

						
						<!-- OPD 22-->
						<th>Presence of waiting area with benches or chairs for seating</th>
                        <th>Waiting area chairs and surrounding is clean during the visit </th>
						<th>Separate KTSCHMA consulting room </th>
						<th>Dedicated KTSCHMA staff for patient consultation during the visit </th>
						<th>Is Consulting room clean and well organized</th>
                        <th>Is there confidentiality in the consultation room </th>
						<th>Functional staff and patient chairs for consultation </th>
						<th>Functional working table</th>
						<th>Functional working examination couches'</th>
						<th>Functional thermometer</th>
                        <th>Functional blood pressure cuff</th>
						<th>Functional Stethoscope </th>
						<th>Functional weight scale for Adult </th>
                        <th>Functional weight scale for children </th>
						<th>Funtional children MUAC tape </th>
						<th>Latex gloves for patient examination (if need arises) </th>
						<th>Hand senitizer in the consulting room</th>
						<th>Water to wash hands, soap and clean towel </th>
						<th>Source of light if even just a working torch of functional </th>
                        <th>Waste disposal system secured and coveredthat is in use</th>
						<th>Clean, covered and working latrine  inspect before</th>
						<th>24hours OPD service </th>
                      
						<!-- Pharmacy 28-->						
					    <th>Separate KTSCHMA Pharmacy</th>						
						<th>Pharmacy is accessible during visit</th>
						<th>Dedicated KTSCHMA pharmacy staff </th>
						<th>KTSCHMA Drugs are easy to find and on shelves</th>
						<th>KTSCHMA drugs list and prices pasted clearly </th>
						<th>Register for 10% drugs co-payment </th>	
						<th>Source of Light in the Pharmacy</th>												
						<th>24Hours Pharmacy services</th>
						<th>ACT1 Tablet</th>	
						<th>ACT4 Tablet</th>	
						<th>Fansidar Tablet</th>
						<th>Amoxicillin suspension</th>	
						<th>ORS</th>	
						<th>Paracetamol Syrup</th>
						<th>Paracetamol Tablets</th>	
						<th>Iron sulphate </th>	
						<th>Ampiclox tablets</th>	
						<th>Folic acid tablets</th>	
						<th>Magnesium sulphate </th>
						<th>Misoprostal</th>	
						<th>Analgesic (Ibufrofen or Diclofenac)</th>	
						<th>Syringes</th>	
						<th>IV-Fluids</th>	
						<th>Blood bag</th>
						<th>Drugs are easy to find and on shelves</th>
						<th>Is Pharmacy clean and well organized</th>	
						<th>Laboratory is accessible during visit</th>	
						<th>24hr services</th>	
						
						<!-- Lab 16-->												
						<th>Dedicated KTSCHMA laboratory staff</th>						
						<th>List of Laboratory services covered under the scheme</th>
						<th>Seperated KTSCHMA enrolle's Laboratory register</th>
						<th>Are there delays in service delivery Observe</th>	
						<th>Are waste disposal system properly managed</th>	
						<th>Malaria Parasite using Rapid diagnostic test</th>	
						<th>Urinalysis</th>
						<th>Packed Cell Volume (PCV)</th>
						<th>Random Blood Sugar</th>	
						<th>Fasting Blood Sugar</th>
						<th>Pregnancy Test</th>
						<th>Stool M/C/S</th>	
						<th>Urine M/C/S
						<th>Blood grouping and cross matching</th>
						<th>Obsteric scanning</th>	
						<th>Are there any equipment breakdown or malfunction</th>	
						
						<!-- A & E 9-->																		
						<th>Functional A and E Unit</th>
						<th>Clean and well-organized</th>
						<th>Working examination couches</th>	
						<th>Source of light even if tourch light</th>
						<th>Safety box which is readily available</th>
						<th>Needles and Syringes</th>
						<th>Sterile dressing kit during visit</th>
						<th>Functional sterilizer during visit</th>	
						<th>Functional emergency first aid kid</th>
						
						<!-- Labour Room 15-->												
						<th>Functional delivery room </th>
						<th>Working delivery bed</th>
						<th>Atleast one Medical Doctor</th>
						<th>Atleast one registered Midwives</th>	
						<th>Atleast one registered Nurse</th>
						<th>Partograph</th>
						<th>Sterile cord cuter</th>
						<th>Fetoscope</th>
						<th>Anti-shock garment</th>	
						<th>Safety box which is readily available</th>
						<th>Clean and well-organized</th>
						<th>Source of light even if its touch light</th>	
						<th>Sunction machine</th>
						<th>Equipment for Manual Vacuum Aspiration (MVA)</th>
						<th>24 Hours services</th>	
						
						<!-- Finace 4-->												
						<th>Does the facility Recieved capitation in the reporting month</th>
						<th>Availability of cashbook</th>
						<th>Availability of Asset Register</th>
						<th>Reciept and Payment Voucher</th>
						
						<th>M & E Team Recommendation </th>	
						<th>Name of Supervisor </th>	

						
                    </tr>
                </thead>
                <tbody>
				<?php
					$pq=mysqli_query($conn,"SELECT  `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`,`q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`,`q31`, `q32`, `q33`, `q34`, `q35`, `q36`, `q37`, `q38`, `q39`, `q40`, `q41`, `q42`, `q43`, `q44`, `q45`, `q46`, `q47`, `q48`, `q49`, `q50`, `q51`, `q52`, `q53`, `q54`, `q55`, `q56`, `q57`, `q58`,`q59`, `q60`, `q61`, `q62`, `q63`, `q64`, `q65`, `q66`, `q67`, `q68`, `q69`, `q70`, `q71`, `q72`, `q73`, `q82`, `q83`, `q84`, `q85`, `q86`, `q87`, `q88`, `q89`, `q90`, `q91`,`q92`, `q93`, `q94`, `q95`, `q96`, `q97`, `q98`, `q99`, `q100`, `q101`, `q102`, `q103`, `q104`, `q105`, `q106`,`q115`, `q116`, `q117`, `q118`, recomendation, supervisor_name FROM `health_info_mu_record` as hir JOIN opd as opd ON hir.`facility_id` = opd.facility_id JOIN pharmacy as phr ON hir.`facility_id` = phr.facility_id JOIN lab as lab ON hir.`facility_id` = lab.facility_id JOIN a_and_e as ae ON hir.`facility_id` = ae.facility_id JOIN labour_room as lb ON hir.`facility_id` = lb.facility_id JOIN inpatient as ip ON hir.`facility_id` = ip.facility_id  JOIN finace as fin ON hir.`facility_id` = fin.facility_id
JOIN m_and_e_team_recomendation as rec ON hir.`facility_id` = rec.`facility_id` WHERE hir.`facility_id`='$this_user_id'");
					while($pqrow=mysqli_fetch_array($pq)){
					?>
						<tr>						
						
						
							<td><?php echo $pqrow['q1']; ?></td>
							<td><?php echo $pqrow['q2']; ?></td>
							<td><?php echo $pqrow['q3']; ?></td>
							<td><?php echo $pqrow['q4']; ?></td>
							<td><?php echo $pqrow['q5']; ?></td>
							<td><?php echo $pqrow['q6']; ?></td>
							<td><?php echo $pqrow['q7']; ?></td>
							<td><?php echo $pqrow['q8']; ?></td>
							<td><?php echo $pqrow['q9']; ?></td>
							<td><?php echo $pqrow['q10']; ?></td>
							<td><?php echo $pqrow['q11']; ?></td>
							<td><?php echo $pqrow['q12']; ?></td>
							<td><?php echo $pqrow['q13']; ?></td>
							<td><?php echo $pqrow['q14']; ?></td>
							<td><?php echo $pqrow['q15']; ?></td>
							<td><?php echo $pqrow['q16']; ?></td>
							<td><?php echo $pqrow['q17']; ?></td>
							<td><?php echo $pqrow['q18']; ?></td>
							<td><?php echo $pqrow['q19']; ?></td>
							<td><?php echo $pqrow['q20']; ?></td>				
						
							<td><?php echo $pqrow['q1']; ?></td>
							<td><?php echo $pqrow['q2']; ?></td>
							<td><?php echo $pqrow['q3']; ?></td>
							<td><?php echo $pqrow['q4']; ?></td>
							<td><?php echo $pqrow['q5']; ?></td>
							<td><?php echo $pqrow['q6']; ?></td>
							<td><?php echo $pqrow['q7']; ?></td>
							<td><?php echo $pqrow['q8']; ?></td>
							<td><?php echo $pqrow['q9']; ?></td>
							<td><?php echo $pqrow['q10']; ?></td>
							<td><?php echo $pqrow['q11']; ?></td>
							<td><?php echo $pqrow['q12']; ?></td>
							<td><?php echo $pqrow['q13']; ?></td>
							<td><?php echo $pqrow['q14']; ?></td>
							<td><?php echo $pqrow['q15']; ?></td>
							<td><?php echo $pqrow['q16']; ?></td>
							<td><?php echo $pqrow['q17']; ?></td>
							<td><?php echo $pqrow['q18']; ?></td>
							<td><?php echo $pqrow['q19']; ?></td>
							<td><?php echo $pqrow['q20']; ?></td>	

						
							<td><?php echo $pqrow['q1']; ?></td>
							<td><?php echo $pqrow['q2']; ?></td>
							<td><?php echo $pqrow['q3']; ?></td>
							<td><?php echo $pqrow['q4']; ?></td>
							<td><?php echo $pqrow['q5']; ?></td>
							<td><?php echo $pqrow['q6']; ?></td>
							<td><?php echo $pqrow['q7']; ?></td>
							<td><?php echo $pqrow['q8']; ?></td>
							<td><?php echo $pqrow['q9']; ?></td>
							<td><?php echo $pqrow['q10']; ?></td>
							<td><?php echo $pqrow['q11']; ?></td>
							<td><?php echo $pqrow['q12']; ?></td>
							<td><?php echo $pqrow['q13']; ?></td>
							<td><?php echo $pqrow['q14']; ?></td>
							<td><?php echo $pqrow['q15']; ?></td>
							<td><?php echo $pqrow['q16']; ?></td>
							<td><?php echo $pqrow['q17']; ?></td>
							<td><?php echo $pqrow['q18']; ?></td>
							<td><?php echo $pqrow['q19']; ?></td>
							<td><?php echo $pqrow['q20']; ?></td>	

						
							<td><?php echo $pqrow['q1']; ?></td>
							<td><?php echo $pqrow['q2']; ?></td>
							<td><?php echo $pqrow['q3']; ?></td>
							<td><?php echo $pqrow['q4']; ?></td>
							<td><?php echo $pqrow['q5']; ?></td>
							<td><?php echo $pqrow['q6']; ?></td>
							<td><?php echo $pqrow['q7']; ?></td>
							<td><?php echo $pqrow['q8']; ?></td>
							<td><?php echo $pqrow['q9']; ?></td>
							<td><?php echo $pqrow['q10']; ?></td>
							<td><?php echo $pqrow['q11']; ?></td>
							<td><?php echo $pqrow['q12']; ?></td>
							<td><?php echo $pqrow['q13']; ?></td>
							<td><?php echo $pqrow['q14']; ?></td>
							<td><?php echo $pqrow['q15']; ?></td>
							<td><?php echo $pqrow['q16']; ?></td>
							<td><?php echo $pqrow['q17']; ?></td>
							<td><?php echo $pqrow['q18']; ?></td>
							<td><?php echo $pqrow['q19']; ?></td>
							<td><?php echo $pqrow['q20']; ?></td>	

						
							<td><?php echo $pqrow['q1']; ?></td>
							<td><?php echo $pqrow['q2']; ?></td>
							<td><?php echo $pqrow['q3']; ?></td>
							<td><?php echo $pqrow['q4']; ?></td>
							<td><?php echo $pqrow['q5']; ?></td>
							<td><?php echo $pqrow['q6']; ?></td>
							<td><?php echo $pqrow['q7']; ?></td>
							<td><?php echo $pqrow['q8']; ?></td>
							<td><?php echo $pqrow['q9']; ?></td>
							<td><?php echo $pqrow['q10']; ?></td>
							<td><?php echo $pqrow['q11']; ?></td>
							<td><?php echo $pqrow['q12']; ?></td>
							<td><?php echo $pqrow['q13']; ?></td>
							<td><?php echo $pqrow['q14']; ?></td>
							<td><?php echo $pqrow['q15']; ?></td>
							<td><?php echo $pqrow['q16']; ?></td>
							<td><?php echo $pqrow['q17']; ?></td>
							<td><?php echo $pqrow['q18']; ?></td>
							<td><?php echo $pqrow['q19']; ?></td>
							<td><?php echo $pqrow['q20']; ?></td>							
							<td><?php echo $pqrow['q17']; ?></td>
							<td><?php echo $pqrow['q18']; ?></td>
							<td><?php echo $pqrow['recomendation']; ?></td>
							<td><?php echo $pqrow['supervisor_name']; ?></td>
							
						</tr>
					<?php
					}
				?>
                </tbody>
                            </table>