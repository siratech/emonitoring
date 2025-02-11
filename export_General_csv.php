<?php 
include('../libr/config.php');
include ('../conn.php');
include('session.php');
  

$file = 'Application_list'; // csv file name
$csv_output = "";

// Define a custom header (modify this array as per your requirement)
$custom_header = [
    "Record KTSCHMA staff during the visit", 
    "Current enrollee eligibility register displayed at record unit", 
    "Shelves for KTSCHMA file jacket", 
    "Encounter register properly filled in and up-to-date", 
    "Working mobile phone", 
    "Laptop for sending referral/claims", 
    "KTSCHMA call center complaint number displayed at record unit", 
    "Satisfied with the waiting time to retrieve file", 
	
    "Presence of waiting area with benches or chairs for seating", 
    "Waiting area chairs and surrounding is clean during the visit", 
    "Separate KTSCHMA consulting room", 
    "Dedicated KTSCHMA staff for patient consultation during the visit", 	
    "Is Consulting room clean and well organized", 
    "Is there confidentiality in the consultation room", 
    "Functional staff and patient chairs for consultation", 
    "Functional working table", 
    "Functional working examination couches", 
    "Functional thermometer", 
    "Functional blood pressure cuff", 
    "Functional Stethoscope", 
    "Functional weight scale for Adult", 
    "Functional weight scale for children", 
	 "Funtional children MUAC tape", 
    "Latex gloves for patient examination (if need arises)", 
    "Hand senitizer in the consulting room", 
    "Water to wash hands, soap and clean towel", 
    "Source of light if even just a working torch of functional", 
    "Waste disposal system secured and coveredthat is in use", 
    "Clean, covered and working latrine  inspect before", 
    "24hours OPD service", 
	
    "Separate KTSCHMA Pharmacy", 
    "Pharmacy is accessible during visit", 
	"Dedicated KTSCHMA pharmacy staff", 
    "KTSCHMA Drugs are easy to find and on shelves", 
    "KTSCHMA drugs list and prices pasted clearly", 
    "Register for 10% drugs co-payment", 
    "Source of Light in the Pharmacy", 
    "24Hours Pharmacy services", 
    "ACT1 Tablet", 
    "ACT4 Tablet", 
    "Fansidar Tablet", 
    "Amoxicillin suspension",     	
	"ORS", 
    "Paracetamol Syrup", 
    "Paracetamol Tablets", 
    "Iron sulphate", 
    "Ampiclox tablets", 
    "Folic acid tablets", 
    "Magnesium sulphate", 
    "Misoprostal", 
    "Analgesic (Ibufrofen or Diclofenac)", 
    "Syringes",
    "IV-Fluids", 
    "Blood bag", 
    "Drugs are easy to find and on shelves", 
    "Is Pharmacy clean and well organized", 
    "Laboratory is accessible during visit", 
    "24hr services", 
	
    "Dedicated KTSCHMA laboratory staff", 
    "List of Laboratory services covered under the scheme", 
    "Seperated KTSCHMA enrolle's Laboratory register", 
    "Are there delays in service delivery Observe", 
    "Are waste disposal system properly managed", 
    "Malaria Parasite using Rapid diagnostic test", 
    "Urinalysis", 
    "Packed Cell Volume (PCV)", 
    "Random Blood Sugar", 
    "Fasting Blood Sugar", 
    "Pregnancy Test", 
    "Stool M/C/S", 
    "Urine M/C/S", 
    "Blood grouping and cross matching", 
    "Obsteric scanning", 
    "Abdominal pelvic scan", 
    "Full Blood count and differential", 
    "Hepatitis B, C, Virus antibody screening", 
    "Genotype", 
    "Uric acid test", 
    "X-ray", 
    "HIV Screening", 
    "Electrolyte Urea and Creatinine EUCR", 
    "Are there any equipment breakdown or malfunction", 
	
    "Functional A and E Unit", 
    "Clean and well-organized", 
    "Working examination couches", 
    "Source of light even if tourch light", 
    "Safety box which is readily available", 
    "Needles and Syringes", 
    "Sterile dressing kit during visit", 
    "Functional sterilizer during visit", 
    "Functional emergency first aid kid", 
	
    "Functional delivery room", 
    "Working delivery bed", 
    "Atleast one Medical Doctor", 
    "Atleast one registered Midwives", 
    "Atleast one registered Nurse", 
    "Partograph", 
    "Sterile cord cuter", 
    "Fetoscope", 
    "Anti-shock garment", 
    "Safety box which is readily available", 
    "Clean and well-organized", 
    "Source of light even if its touch light", 
    "Sunction machine", 
    "Equipment for Manual Vacuum Aspiration (MVA)", 
    "24 Hours services", 
	
    "Male ward with functional bed", 
    "Female ward with functional bed", 
    "Paediatric ward with functional bed", 
    "Ability to conduct caesarean section (C/S)", 
    "All the ward mention above has a source of light", 
    "All the ward mention above has a source of water", 
    "Ward is clean and well-organized", 
    "Presence of staff in all the 3 ward during M&E visit",
	
    "Does the facility Recieved capitation in the reporting month", 
    "Availability of cashbook", 
    "Availability of Asset Register", 
    "Reciept and Payment Voucher", 	
    "Recommendation", 
    "Supervisor Name"
];

// Manually add the custom header to the CSV output
$csv_output = '"' . implode('","', $custom_header) . "\"\n";

// Sanitize user input to prevent SQL injection
$this_user_id = mysqli_real_escape_string($conn, $this_user_id);

// Prepare the query
$query = "
SELECT  `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`,`q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, 
		`q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`,`q31`, `q32`, `q33`, `q34`, `q35`, `q36`, `q37`, `q38`, `q39`, `q40`, 
		`q41`, `q42`, `q43`, `q44`, `q45`, `q46`, `q47`, `q48`, `q49`, `q50`, `q51`, `q52`, `q53`, `q54`, `q55`, `q56`, `q57`, `q58`,`q59`, `q60`, 
		`q61`, `q62`, `q63`, `q64`, `q65`, `q66`, `q67`, `q68`, `q69`, `q70`, `q71`, `q72`, `q73`, `q74`, `q75`, `q76`, `q77`, `q78`, `q79`, `q80`, 
		`q81`, `q82`, `q83`, `q84`, `q85`, `q86`, `q87`, `q88`, `q89`, `q90`, `q91`,`q92`, `q93`, `q94`, `q95`, `q96`, `q97`, `q98`, `q99`, `q100`, 
		`q101`, `q102`, `q103`, `q104`, `q105`, `q106`,`q107`, `q108`, `q109`, `q110`, `q111`, `q112`, `q113`, `q114`,`q115`, `q116`, `q117`, `q118`, recomendation, supervisor_name FROM `health_info_mu_record` as hir JOIN opd as opd ON hir.`facility_id` = opd.facility_id JOIN pharmacy as phr ON hir.`facility_id` = phr.facility_id JOIN lab as lab ON hir.`facility_id` = lab.facility_id JOIN a_and_e as ae ON hir.`facility_id` = ae.facility_id JOIN labour_room as lb ON hir.`facility_id` = lb.facility_id JOIN inpatient as ip ON hir.`facility_id` = ip.facility_id  JOIN finace as fin ON hir.`facility_id` = fin.facility_id
JOIN m_and_e_team_recomendation as rec ON hir.`facility_id` = rec.`facility_id` WHERE hir.`facility_id`='$this_user_id' AND rec.`facility_id`='$this_user_id'";

// Execute the query
$results = mysqli_query($conn, $query);

// Check if we have any rows returned
if (mysqli_num_rows($results) > 0) {
    // Loop through each result and add to CSV
    while ($row = mysqli_fetch_assoc($results)) {
        $row_data = [];
        foreach ($row as $value) {
            // Ensure that values containing commas or quotes are properly escaped
            $row_data[] = '"' . str_replace('"', '""', $value) . '"';
        }
        $csv_output .= implode(',', $row_data) . "\n";
    }

    // Set headers for file download
    $filename = $file . "_" . date("Y-m-d_H-i", time());
    header("Content-type: text/csv");
    header("Content-disposition: attachment; filename=" . $filename . ".csv");
    
    // Output the CSV content
    echo $csv_output;
    exit;
} else {
    echo "No records found.";
}
?>