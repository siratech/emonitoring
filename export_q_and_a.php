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
                        <th>Record KTSCHMA staff during the visit</th>
						<th>Current enrollee eligibility register displayed at record unit</th>
						<th>Shelves for KTSCHMA file jacket</th>
                        <th>Encounter register properly filled in and up-to-date</th>
						<th>Working mobile phone</th>
						<th>Laptop for sending referral/claims</th>
						<th>KTSCHMA call center complaint number displayed at record unit </th>
						<th>Satisfied with the waiting time to retrieve file</th>
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
						<th>Abdominal pelvic scan</th>
						<th>Full Blood count and differential </th>
						<th>Hepatitis B, C, Virus antibody screening</th>	
						<th>Genotype</th>
						<th>Uric acid test</th>
						<th>X-ray</th>	
						<th>HIV Screening </th>
						<th>Electrolyte Urea and Creatinine EUCR</th>
						<th>Are there any equipment breakdown or malfunction</th>	
						<th>Functional A and E Unit</th>
						<th>Clean and well-organized</th>
						<th>Working examination couches</th>	
						<th>Source of light even if tourch light</th>
						<th>Safety box which is readily available</th>
						<th>Needles and Syringes</th>
						<th>Sterile dressing kit during visit</th>
						<th>Functional sterilizer during visit</th>	
						<th>Functional emergency first aid kid</th>
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
						<th>Male ward with functional bed</th>
						<th>Female ward with functional bed</th>
						<th>Paediatric ward with functional bed</th>
						<th>Ability to conduct caesarean section (C/S)</th>	
						<th>All the ward mention above has a source of light</th>
						<th>All the ward mention above has a source of water</th>
						<th>Ward is clean and well-organized</th>	
						<th>Presence of staff in all the 3 ward during M&E visit</th>
						<th>Does the facility Recieved capitation in the reporting month</th>
						<th>Availability of cashbook</th>
						<th>Availability of Asset Register</th>
						<th>Reciept and Payment Voucher</th>	

						
                    </tr>
                </thead>
                <tbody>
				<?php
					$pq=mysqli_query($conn,"SELECT * FROM `health_info_mu_record` WHERE `facility_id`='$this_user_id'");
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
							
						</tr>
					<?php
					}
				?>
                </tbody>
                            </table>