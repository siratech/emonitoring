<?php 
	ob_start();
	include '../libr/config.php';  


	if(isset($_POST['submit'])){

		$school_ops = mysqli_real_escape_string($conn, $_POST['school_ops']);		
		$presentofclassroom = mysqli_real_escape_string($conn, $_POST['presentofclassroom']);
		$no_ofmaleteater = mysqli_real_escape_string($conn, $_POST['no_ofmaleteater']);
		$no_offemaleteacher	 = mysqli_real_escape_string($conn, $_POST['no_offemaleteacher']);
		$no_malenontech	 = mysqli_real_escape_string($conn, $_POST['no_malenontech']);
		$no_femalenontech = mysqli_real_escape_string($conn, $_POST['no_femalenontech']);
		$no_malestudent = mysqli_real_escape_string($conn, $_POST['no_malestudent']);	
		$no_femalestudent = mysqli_real_escape_string($conn, $_POST['no_femalestudent']);
		$presentoftoilet = mysqli_real_escape_string($conn, $_POST['presentoftoilet']);
		$presentofwater = mysqli_real_escape_string($conn, $_POST['presentofwater']);
		$presentoffence = mysqli_real_escape_string($conn, $_POST['presentoffence']);
		$presentoflight = mysqli_real_escape_string($conn, $_POST['presentoflight']);		
		$presentofslickbay = mysqli_real_escape_string($conn, $_POST['presentofslickbay']);
		$pre_teaching_material = mysqli_real_escape_string($conn, $_POST['pre_teaching_material']);
		$pre_lession_material = mysqli_real_escape_string($conn, $_POST['pre_lession_material']);
		$pre_record_material = mysqli_real_escape_string($conn, $_POST['pre_record_material']);
		$studentbyclass = mysqli_real_escape_string($conn, $_POST['studentbyclass']);			
		$class_conditional = mysqli_real_escape_string($conn, $_POST['class_conditional']);
		$classdistribution = mysqli_real_escape_string($conn, $_POST['classdistribution']);
		$seatstasus = mysqli_real_escape_string($conn, $_POST['seatstasus']);		
		$sch_access_id = mysqli_real_escape_string($conn, $_POST['this_user_id']);

//Present of Classroom		
		$class1_con = mysqli_real_escape_string($conn, $_POST['class1_con']);
		$class1_int = mysqli_real_escape_string($conn, $_POST['class1_int']);
		$class2_con	 = mysqli_real_escape_string($conn, $_POST['class2_con']);
		$class2_int	 = mysqli_real_escape_string($conn, $_POST['class2_int']);
		$class3_con = mysqli_real_escape_string($conn, $_POST['class3_con']);
		$class3_int = mysqli_real_escape_string($conn, $_POST['class3_int']);	
		$class4_con = mysqli_real_escape_string($conn, $_POST['class4_con']);
		$class4_int = mysqli_real_escape_string($conn, $_POST['class4_int']);
		$class5_con = mysqli_real_escape_string($conn, $_POST['class5_con']);
		$class5_int = mysqli_real_escape_string($conn, $_POST['class5_int']);		
		$class6_con = mysqli_real_escape_string($conn, $_POST['class6_con']);
		$class6_int = mysqli_real_escape_string($conn, $_POST['class6_int']);		
		$class7_con = mysqli_real_escape_string($conn, $_POST['class7_con']);
		$class7_int = mysqli_real_escape_string($conn, $_POST['class7_int']);
		$class8_con = mysqli_real_escape_string($conn, $_POST['class8_con']);
		$class8_int = mysqli_real_escape_string($conn, $_POST['class8_int']);
		$class9_con = mysqli_real_escape_string($conn, $_POST['class9_con']);			
		$class9_int = mysqli_real_escape_string($conn, $_POST['class9_int']);
		
//Present of Toilet
		$separate_teacher = mysqli_real_escape_string($conn, $_POST['separate_teacher']);
		$separate_type_teacher = mysqli_real_escape_string($conn, $_POST['separate_type_teacher']);
		$toilet_type_teacher	 = mysqli_real_escape_string($conn, $_POST['toilet_type_teacher']);
		$no_teacher_toilet	 = mysqli_real_escape_string($conn, $_POST['no_teacher_toilet']);
		$separate_student = mysqli_real_escape_string($conn, $_POST['separate_student']);
		$separate_type_student = mysqli_real_escape_string($conn, $_POST['separate_type_student']);	
		$toilet_type_student = mysqli_real_escape_string($conn, $_POST['toilet_type_student']);
		$no_student_toilet = mysqli_real_escape_string($conn, $_POST['no_student_toilet']);

		
//Present of Water
		$bore = mysqli_real_escape_string($conn, $_POST['bore']);
		$well = mysqli_real_escape_string($conn, $_POST['well']);
		$tep	 = mysqli_real_escape_string($conn, $_POST['tep']);
		$river = mysqli_real_escape_string($conn, $_POST['river']);
		$buy = mysqli_real_escape_string($conn, $_POST['buy']);	

//Present of Fence
		$fair = mysqli_real_escape_string($conn, $_POST['fair']);
		$bad = mysqli_real_escape_string($conn, $_POST['bad']);
		$good = mysqli_real_escape_string($conn, $_POST['good']);

//Present of ligth
		$nepa = mysqli_real_escape_string($conn, $_POST['nepa']);
		$gen = mysqli_real_escape_string($conn, $_POST['gen']);
		$solar = mysqli_real_escape_string($conn, $_POST['solar']);	

//Present of Slick Bay
		$staff = mysqli_real_escape_string($conn, $_POST['staff']);
		$first_aid = mysqli_real_escape_string($conn, $_POST['first_aid']);
		$data_staff	 = mysqli_real_escape_string($conn, $_POST['data_staff']);
		
//Pre Teaching Material
		$laptop = mysqli_real_escape_string($conn, $_POST['laptop']);
		$desktop = mysqli_real_escape_string($conn, $_POST['desktop']);
		$internet	 = mysqli_real_escape_string($conn, $_POST['internet']);
		$tv = mysqli_real_escape_string($conn, $_POST['tv']);
		
//pre Lession Material
		$board = mysqli_real_escape_string($conn, $_POST['board']);
		$library = mysqli_real_escape_string($conn, $_POST['library']);
		$incinerator	 = mysqli_real_escape_string($conn, $_POST['incinerator']);
		$lesson_plan = mysqli_real_escape_string($conn, $_POST['lesson_plan']);

//Pre Record Material
		$schemeofwork = mysqli_real_escape_string($conn, $_POST['schemeofwork']);
		$checklistofsw = mysqli_real_escape_string($conn, $_POST['checklistofsw']);
		$staffrecord	 = mysqli_real_escape_string($conn, $_POST['staffrecord']);
		$staffattendance = mysqli_real_escape_string($conn, $_POST['staffattendance']);
		$visitorsregister = mysqli_real_escape_string($conn, $_POST['visitorsregister']);
		$abstainregister = mysqli_real_escape_string($conn, $_POST['abstainregister']);
		$staffquarters	 = mysqli_real_escape_string($conn, $_POST['staffquarters']);
		$headmasteroffice = mysqli_real_escape_string($conn, $_POST['headmasteroffice']);
		$bankaccount = mysqli_real_escape_string($conn, $_POST['bankaccount']);
		$overhead = mysqli_real_escape_string($conn, $_POST['overhead']);
		$c_a_records	 = mysqli_real_escape_string($conn, $_POST['c_a_records']);
		$others = mysqli_real_escape_string($conn, $_POST['others']);

//Student by Class
		$pre1_m = mysqli_real_escape_string($conn, $_POST['pre1_m']);
		$pre2_m = mysqli_real_escape_string($conn, $_POST['pre2_m']);
		$pre3_m	 = mysqli_real_escape_string($conn, $_POST['pre3_m']);
		$pre1_f = mysqli_real_escape_string($conn, $_POST['pre1_f']);
		$pre2_f = mysqli_real_escape_string($conn, $_POST['pre2_f']);
		$pre3_f = mysqli_real_escape_string($conn, $_POST['pre3_f']);
		$class1_m	 = mysqli_real_escape_string($conn, $_POST['class1_m']);
		$class2_m = mysqli_real_escape_string($conn, $_POST['class2_m']);
		$class3_m = mysqli_real_escape_string($conn, $_POST['class3_m']);
		$class4_m = mysqli_real_escape_string($conn, $_POST['class4_m']);
		$class5_m	 = mysqli_real_escape_string($conn, $_POST['class5_m']);
		$class6_m = mysqli_real_escape_string($conn, $_POST['class6_m']);
		$class1_f = mysqli_real_escape_string($conn, $_POST['class1_f']);
		$class2_f = mysqli_real_escape_string($conn, $_POST['class2_f']);
		$class3_f	 = mysqli_real_escape_string($conn, $_POST['class3_f']);
		$class4_f = mysqli_real_escape_string($conn, $_POST['class4_f']);
		$class5_f	 = mysqli_real_escape_string($conn, $_POST['class5_f']);
		$class6_f = mysqli_real_escape_string($conn, $_POST['class6_f']);

//Class Conditional
		$pre1 = mysqli_real_escape_string($conn, $_POST['pre1']);
		$pre2 = mysqli_real_escape_string($conn, $_POST['pre2']);
		$pre3	 = mysqli_real_escape_string($conn, $_POST['pre3']);
		$class1	 = mysqli_real_escape_string($conn, $_POST['class1']);
		$class2 = mysqli_real_escape_string($conn, $_POST['class2']);
		$class3 = mysqli_real_escape_string($conn, $_POST['class3']);
		$class4 = mysqli_real_escape_string($conn, $_POST['class4']);
		$class5	 = mysqli_real_escape_string($conn, $_POST['class5']);
		$class6 = mysqli_real_escape_string($conn, $_POST['class6']);
		
//Books Availability
		$eng = mysqli_real_escape_string($conn, $_POST['eng']);
		$math = mysqli_real_escape_string($conn, $_POST['math']);
		$bscience	 = mysqli_real_escape_string($conn, $_POST['bscience']);
		$ssocial = mysqli_real_escape_string($conn, $_POST['ssocial']);
		$computer = mysqli_real_escape_string($conn, $_POST['computer']);

//Class Distribution
		$english = mysqli_real_escape_string($conn, $_POST['english']);
		$maths = mysqli_real_escape_string($conn, $_POST['maths']);
		$bscience	 = mysqli_real_escape_string($conn, $_POST['bscience']);
		$sstudies = mysqli_real_escape_string($conn, $_POST['sstudies']);
		$computer = mysqli_real_escape_string($conn, $_POST['computer']);
		$hausa = mysqli_real_escape_string($conn, $_POST['hausa']);
		$irk	 = mysqli_real_escape_string($conn, $_POST['irk']);
		$accounting = mysqli_real_escape_string($conn, $_POST['accounting']);
		$agricscience = mysqli_real_escape_string($conn, $_POST['agricscience']);
		$biology = mysqli_real_escape_string($conn, $_POST['biology']);
		$chemistry	 = mysqli_real_escape_string($conn, $_POST['chemistry']);
		$commerce = mysqli_real_escape_string($conn, $_POST['commerce']);
		$economics = mysqli_real_escape_string($conn, $_POST['economics']);
		$geography = mysqli_real_escape_string($conn, $_POST['geography']);
		$physics	 = mysqli_real_escape_string($conn, $_POST['physics']);
		
//Eng Availability
		$class_1_eng = mysqli_real_escape_string($conn, $_POST['class_1_eng']);
		$class_2_eng = mysqli_real_escape_string($conn, $_POST['class_2_eng']);
		$class_3_eng = mysqli_real_escape_string($conn, $_POST['class_3_eng']);
		$class_4_eng = mysqli_real_escape_string($conn, $_POST['class_4_eng']);
		$class_5_eng = mysqli_real_escape_string($conn, $_POST['class_5_eng']);
	    $class_6_eng = mysqli_real_escape_string($conn, $_POST['class_6_eng']);

//math Availability
		$class_1_math = mysqli_real_escape_string($conn, $_POST['class_1_math']);
		$class_2_math = mysqli_real_escape_string($conn, $_POST['class_2_math']);
		$class_3_math = mysqli_real_escape_string($conn, $_POST['class_3_math']);
		$class_4_math = mysqli_real_escape_string($conn, $_POST['class_4_math']);
		$class_5_math = mysqli_real_escape_string($conn, $_POST['class_5_math']);
	    $class_6_math = mysqli_real_escape_string($conn, $_POST['class_6_math']);

//basic Availability
		$class_1_basic = mysqli_real_escape_string($conn, $_POST['class_1_basic']);
		$class_2_basic = mysqli_real_escape_string($conn, $_POST['class_2_basic']);
		$class_3_basic = mysqli_real_escape_string($conn, $_POST['class_3_basic']);
		$class_4_basic = mysqli_real_escape_string($conn, $_POST['class_4_basic']);
		$class_5_basic = mysqli_real_escape_string($conn, $_POST['class_5_basic']);
	    $class_6_basic = mysqli_real_escape_string($conn, $_POST['class_6_basic']);

//social Availability
		$class_1_social = mysqli_real_escape_string($conn, $_POST['class_1_social']);
		$class_2_social = mysqli_real_escape_string($conn, $_POST['class_2_social']);
		$class_3_social = mysqli_real_escape_string($conn, $_POST['class_3_social']);
		$class_4_social = mysqli_real_escape_string($conn, $_POST['class_4_social']);
		$class_5_social = mysqli_real_escape_string($conn, $_POST['class_5_social']);
	    $class_6_social = mysqli_real_escape_string($conn, $_POST['class_6_social']);

//computer Availability
		$class_1_computer = mysqli_real_escape_string($conn, $_POST['class_1_computer']);
		$class_2_computer = mysqli_real_escape_string($conn, $_POST['class_2_computer']);
		$class_3_computer = mysqli_real_escape_string($conn, $_POST['class_3_computer']);
		$class_4_computer = mysqli_real_escape_string($conn, $_POST['class_4_computer']);
		$class_5_computer = mysqli_real_escape_string($conn, $_POST['class_5_computer']);
	    $class_6_computer = mysqli_real_escape_string($conn, $_POST['class_6_computer']);

//hausa Availability
		$class_1_hausa = mysqli_real_escape_string($conn, $_POST['class_1_hausa']);
		$class_2_hausa = mysqli_real_escape_string($conn, $_POST['class_2_hausa']);
		$class_3_hausa = mysqli_real_escape_string($conn, $_POST['class_3_hausa']);
		$class_4_hausa = mysqli_real_escape_string($conn, $_POST['class_4_hausa']);
		$class_5_hausa = mysqli_real_escape_string($conn, $_POST['class_5_hausa']);
	    $class_6_hausa = mysqli_real_escape_string($conn, $_POST['class_6_hausa']);

//irk Availability 
		$class_1_irk = mysqli_real_escape_string($conn, $_POST['class_1_irk']);
		$class_2_irk = mysqli_real_escape_string($conn, $_POST['class_2_irk']);
		$class_3_irk = mysqli_real_escape_string($conn, $_POST['class_3_irk']);
		$class_4_irk = mysqli_real_escape_string($conn, $_POST['class_4_irk']);
		$class_5_irk = mysqli_real_escape_string($conn, $_POST['class_5_irk']);
	    $class_6_irk = mysqli_real_escape_string($conn, $_POST['class_6_irk']);				

//Seating Capacity 
		$class1_seat_type = mysqli_real_escape_string($conn, $_POST['class1_seat_type']);
		$class2_seat_type = mysqli_real_escape_string($conn, $_POST['class2_seat_type']);
		$class3_seat_type = mysqli_real_escape_string($conn, $_POST['class3_seat_type']);
		$class4_seat_type = mysqli_real_escape_string($conn, $_POST['class4_seat_type']);
		$class5_seat_type = mysqli_real_escape_string($conn, $_POST['class5_seat_type']);
	    $class6_seat_type = mysqli_real_escape_string($conn, $_POST['class6_seat_type']);

		$pre1_seat_type = mysqli_real_escape_string($conn, $_POST['pre1_seat_type']);
		$pre2_seat_type = mysqli_real_escape_string($conn, $_POST['pre2_seat_type']);
	    $pre3_seat_type = mysqli_real_escape_string($conn, $_POST['pre3_seat_type']);


		$class1_seat_no = mysqli_real_escape_string($conn, $_POST['class1_seat_no']);
		$class2_seat_no = mysqli_real_escape_string($conn, $_POST['class2_seat_no']);
		$class3_seat_no = mysqli_real_escape_string($conn, $_POST['class3_seat_no']);
		$class4_seat_no = mysqli_real_escape_string($conn, $_POST['class4_seat_no']);
		$class5_seat_no = mysqli_real_escape_string($conn, $_POST['class5_seat_no']);
	    $class6_seat_no = mysqli_real_escape_string($conn, $_POST['class6_seat_no']);		

		$pre1_seat_no = mysqli_real_escape_string($conn, $_POST['pre1_seat_no']);
		$pre2_seat_no = mysqli_real_escape_string($conn, $_POST['pre2_seat_no']);
	    $pre3_seat_no = mysqli_real_escape_string($conn, $_POST['pre3_seat_no']);

//Assessibility 
		$nearest__main_road = mysqli_real_escape_string($conn, $_POST['nearest__main_road']);
		$distance_to_town_centre = mysqli_real_escape_string($conn, $_POST['distance_to_town_centre']);
		$nearest_police_station = mysqli_real_escape_string($conn, $_POST['nearest_police_station']);
		$nearest_health_centre = mysqli_real_escape_string($conn, $_POST['nearest_health_centre']);

//Monthly Attendance of Students (Percentage)
		$monthly_pre1 = mysqli_real_escape_string($conn, $_POST['monthly_pre1']);
		$monthly_pre2 = mysqli_real_escape_string($conn, $_POST['monthly_pre2']);
		$monthly_pre3 = mysqli_real_escape_string($conn, $_POST['monthly_pre3']);
		$monthly_class1 = mysqli_real_escape_string($conn, $_POST['monthly_class1']);
		$monthly_class2 = mysqli_real_escape_string($conn, $_POST['monthly_class2']);
		$monthly_class3 = mysqli_real_escape_string($conn, $_POST['monthly_class3']);
		$monthly_class4 = mysqli_real_escape_string($conn, $_POST['monthly_class4']);
		$monthly_class5 = mysqli_real_escape_string($conn, $_POST['monthly_class5']);
		$monthly_class6 = mysqli_real_escape_string($conn, $_POST['monthly_class6']);
		$monthly = mysqli_real_escape_string($conn, $_POST['monthly']);


		
		$gen1=Mansir::get_randomString(4, "Sch");
		$username=$gen1.$lga.$ward;
		$password = md5($username);
		$usertype="f85ae74db48db6d5d3b4f329c93161754de0ab2a";
		$status="Active";
		$access_id ="";
	


			$query = mysqli_query($conn, "UPDATE `sch_data` SET `school_ops`='$school_ops',`presentofclassroom`='$presentofclassroom',`presentoftoilet`='$presentoftoilet',`presentofwater`='$presentofwater',`presentoffence`='$presentoffence',`presentoflight`='$presentoflight',`presentofslickbay`='$presentofslickbay',`pre_teaching_material`='$pre_teaching_material',`pre_lession_material`='$pre_lession_material',`pre_record_material`='$pre_record_material',`studentbyclass`='$studentbyclass',`class_conditional`='$class_conditional',`classdistribution`='$classdistribution',`seatstasus`='$seatstasus' WHERE `sch_access_id`='$sch_access_id'" );
	
			//$pid=mysqli_insert_id($conn);fair
							
				if($query){
			mysqli_query($conn, "UPDATE `presentoftoilet` SET separate_teacher='$separate_teacher',`separate_type_teacher`='$separate_type_teacher',`toilet_type_teacher`='$toilet_type_teacher',`no_teacher_toilet`='$no_teacher_toilet',`separate_student`='$separate_student',`separate_type_student`='$separate_type_student',`toilet_type_student`='$toilet_type_student',`no_student_toilet`='$no_student_toilet' WHERE `sch_access_id`='$sch_access_id'" );											 
			mysqli_query($conn, "UPDATE `presentofwater` SET `bore`='$bore',`well`='$well',`tep`='$tep',`river`='$river' ,`buy`='$buy' WHERE `sch_access_id`='$sch_access_id'" );											 
			mysqli_query($conn, "UPDATE `presentoffence` SET `fair`='$fair' ,`bad`='$bad' ,`good`='$good' WHERE `sch_access_id`='$sch_access_id'" );
			mysqli_query($conn, "UPDATE `presentoflight` SET `nepa`='$nepa' ,`gen`='$gen' ,`solar`='$solar' WHERE `sch_access_id`='$sch_access_id'" );											 
			mysqli_query($conn, "UPDATE `presentofslickbay` SET `staff`='$staff', `first_aid`='$first_aid', `data_staff`='$data_staff' WHERE `sch_access_id`='$sch_access_id'" );											 			
			mysqli_query($conn, "UPDATE `pre_teaching_material` SET `laptop`='$laptop',`desktop`='$desktop',`internet`='$internet' ,`tv`='$tv' WHERE `sch_access_id`='$sch_access_id'" );										 
			mysqli_query($conn, "UPDATE `pre_lession_material` SET `board`='$board',`incinerator`='$incinerator',`lesson_plan`='$lesson_plan' ,`library`='$library' WHERE `sch_access_id`='$sch_access_id'" );											 
			mysqli_query($conn, "UPDATE `pre_record_material` SET `schemeofwork`='$schemeofwork',`checklistofsw`='$checklistofsw',`staffrecord`='$staffrecord' ,`staffattendance`='$staffattendance', `visitorsregister`='$visitorsregister',`abstainregister`='$abstainregister',`staffquarters`='$staffquarters' ,`headmasteroffice`='$headmasteroffice',`bankaccount`='$bankaccount',`overhead`='$overhead',`c_a_records`='$c_a_records' WHERE `sch_access_id`='$sch_access_id'" );											 
			mysqli_query($conn, "UPDATE `classdistribution` SET `english`='$english',`maths`='$maths',`bscience`='$bscience' ,`sstudies`='$sstudies' ,`computer`='$computer' ,`hausa`='$hausa' ,`irk`='$irk' WHERE `sch_access_id`='$sch_access_id'" );											 
			mysqli_query($conn, "UPDATE `class_conditional` SET `class1`='$class1',`class2`='$class2',`class3`='$class3' ,`class4`='$class4' ,`class5`='$class5' ,`class6`='$class6'  WHERE `sch_access_id`='$sch_access_id'" );											 


          


	
					//echo json_encode(array("status" => "Success"));
							echo "<script>
			window.alert('School Data Edited Successfully!');
			window.open('index.php','_self');
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


	}



?>