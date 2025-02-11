<?php



 	$asiq=mysqli_query($conn,"select * from `sch_data` where sch_access_id='$this_user_id'");
	$asirow=mysqli_fetch_array($asiq);
	
	$school_ops=$asirow['school_ops'];
	$presentofclassroom=$asirow['presentofclassroom'];
	$no_ofmaleteater=$asirow['no_ofmaleteater'];
	$no_offemaleteacher=$asirow['no_offemaleteacher']; 
	$no_malenontech=$asirow['no_malenontech'];
	$no_femalenontech=$asirow['no_femalenontech'];
	$school_ops=$asirow['school_ops'];
	$no_malestudent=$asirow['no_malestudent'];
	$no_femalestudent=$asirow['no_femalestudent'];
	$presentoftoilet=$asirow['presentoftoilet']; 
	$presentofwater=$asirow['presentofwater'];
	$presentoffence=$asirow['presentoffence'];	
	$presentoflight=$asirow['presentoflight'];
	$presentofslickbay=$asirow['presentofslickbay'];
	$pre_teaching_material=$asirow['pre_teaching_material']; 
	$pre_lession_material=$asirow['pre_lession_material'];
	$pre_record_material=$asirow['pre_record_material'];	
	
	$studentbyclass=$asirow['studentbyclass'];
	$class_conditional=$asirow['class_conditional'];
	$classdistribution=$asirow['classdistribution']; 
	$seatstasus=$asirow['seatstasus'];
	
	$siq=mysqli_query($conn,"select * from `presentofclassroom` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class1_con=$sirow['class1_con'];
	$class1_int=$sirow['class1_int'];
	$class2_con=$sirow['class2_con'];
	$class2_int=$sirow['class2_int'];
	$class3_con=$sirow['class3_con'];
	$class3_int=$sirow['class3_int'];
	$class4_con=$sirow['class4_con'];
	$class4_int=$sirow['class4_int'];
	$class5_con=$sirow['class5_con'];
	$class5_int=$sirow['class5_int'];
	$class6_con=$sirow['class6_con'];
	$class6_int=$sirow['class6_int'];
		$class7_con=$sirow['class7_con'];
	$class7_int=$sirow['class7_int'];
	$class8_con=$sirow['class8_con'];
	$class8_int=$sirow['class8_int'];
		$class9_con=$sirow['class9_con'];
	$class9_int=$sirow['class9_int'];
	
 	$sqw=mysqli_query($conn,"select * from `presentoftoilet` where sch_access_id='$this_user_id'");
	$sroww=mysqli_fetch_array($sqw);

	$separate_teacher=$sroww['separate_teacher'];	
	$separate_type_teacher=$sroww['separate_type_teacher'];
	$toilet_type_teacher=$sroww['toilet_type_teacher']; 
	$no_teacher_toilet=$sroww['no_teacher_toilet']; 

	$separate_student=$sroww['separate_student'];	
	$separate_type_student=$sroww['separate_type_student'];
	$toilet_type_student=$sroww['toilet_type_student']; 
	$no_student_toilet=$sroww['no_student_toilet'];

	$sq=mysqli_query($conn,"select * from `presentofwater` where sch_access_id='$this_user_id'");
	$srow=mysqli_fetch_array($sq);

	$bore=$srow['bore'];
	$well=$srow['well'];
	$tep=$srow['tep'];
		$river=$srow['river'];
	$buy=$srow['buy'];

	
	$qs=mysqli_query($conn,"select * from `presentoffence` where sch_access_id='$this_user_id'");
	$srows=mysqli_fetch_array($qs);
	
	$fair=$srows['fair'];
	$good=$srows['good'];
	$bad=$srows['bad'];
		
	$qs=mysqli_query($conn,"select * from `presentoflight` where sch_access_id='$this_user_id'");
	$srows=mysqli_fetch_array($qs);
	
	$nepa=$srows['nepa'];
	$gen=$srows['gen'];
	$solar=$srows['solar'];


	$qs=mysqli_query($conn,"select * from `presentofslickbay` where sch_access_id='$this_user_id'");
	$srows=mysqli_fetch_array($qs);
	
	$staff=$srows['staff'];
	$first_aid=$srows['first_aid'];	
	$data_staff=$srows['data_staff'];

	$qs=mysqli_query($conn,"select * from `pre_lession_material` where sch_access_id='$this_user_id'");
	$srows=mysqli_fetch_array($qs);
	
	$board=$srows['board'];
	$library=$srows['library'];	
	$incinerator=$srows['incinerator'];	
	$lesson_plan=$srows['lesson_plan'];

	$qs=mysqli_query($conn,"select * from `pre_teaching_material` where sch_access_id='$this_user_id'");
	$srows=mysqli_fetch_array($qs);
	
	$laptop=$srows['laptop'];
	$desktop=$srows['desktop'];	
	$internet=$srows['internet'];
	$tv=$srows['tv'];

 	$sqw=mysqli_query($conn,"select * from `pre_record_material` where sch_access_id='$this_user_id'");
	$sroww=mysqli_fetch_array($sqw);

	$schemeofwork=$sroww['schemeofwork'];	
	$checklistofsw=$sroww['checklistofsw'];
	$staffrecord=$sroww['staffrecord']; 
	$staffattendance=$sroww['staffattendance']; 

	$visitorsregister=$sroww['visitorsregister'];	
	$abstainregister=$sroww['abstainregister'];
	$staffquarters=$sroww['staffquarters']; 
	$headmasteroffice=$sroww['headmasteroffice'];
	
	$overhead=$sroww['overhead'];	
	$bankaccount=$sroww['bankaccount'];
	$c_a_records=$sroww['c_a_records']; 
	$others=$sroww['others'];	
	
 	$sqw=mysqli_query($conn,"select * from `class_conditional` where sch_access_id='$this_user_id'");
	$sroww=mysqli_fetch_array($sqw);

	$pre1=$sroww['pre1'];	
	$pre2=$sroww['pre2'];
	$pre3=$sroww['pre3']; 
	$class1=$sroww['class1']; 

	$class2=$sroww['class2'];	
	$class3=$sroww['class3'];
	$class4=$sroww['class4']; 
	$class5=$sroww['class5'];	
	$class6=$sroww['class6'];	

	
	$siq=mysqli_query($conn,"select * from `studentbyclass` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class1_m=$sirow['class1_m'];
	$class2_m=$sirow['class2_m'];
	$class3_m=$sirow['class3_m'];
	$class4_m=$sirow['class4_m'];
	$class5_m=$sirow['class5_m'];
	$class6_m=$sirow['class6_m'];
	$class1_f=$sirow['class1_f'];
	$class2_f=$sirow['class2_f'];
	$class3_f=$sirow['class3_f'];
	$class4_f=$sirow['class4_f'];
	$class5_f=$sirow['class5_f'];
	$class6_f=$sirow['class6_f'];
	$pre1_m=$sirow['pre1_m'];
	$pre2_m=$sirow['pre2_m'];
	$pre3_m=$sirow['pre3_m'];
	$pre1_f=$sirow['pre1_f'];
	$pre2_f=$sirow['pre2_f'];
	$pre3_f=$sirow['pre3_f'];

	$siq=mysqli_query($conn,"select * from `classdistribution` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$english=$sirow['english'];
	$maths=$sirow['maths'];
	$bscience=$sirow['bscience'];
	$sstudies=$sirow['sstudies'];
	$computer=$sirow['computer'];
	$hausa=$sirow['hausa'];
	$irk=$sirow['irk'];
	$accounting=$sirow['accounting'];
	$agricscience=$sirow['agricscience'];
	$biology=$sirow['biology'];
	$chemistry=$sirow['chemistry'];
	$commerce=$sirow['commerce'];
	$economics=$sirow['economics'];
	$geography=$sirow['geography'];
	$physics=$sirow['physics'];
	
	
	$siq=mysqli_query($conn,"select * from `booksavailability_english` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_eng=$sirow['class_1'];
	$class_2_eng=$sirow['class_2'];
	$class_3_eng=$sirow['class_3'];
	$class_4_eng=$sirow['class_4'];
	$class_5_eng=$sirow['class_5'];
	$class_6_eng=$sirow['class_6'];
	
	$siq=mysqli_query($conn,"select * from `booksavailability_bisic_science` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_bs=$sirow['class_1'];
	$class_2_bs=$sirow['class_2'];
	$class_3_bs=$sirow['class_3'];
	$class_4_bs=$sirow['class_4'];
	$class_5_bs=$sirow['class_5'];
	$class_6_bs=$sirow['class_6'];	
	
	$siq=mysqli_query($conn,"select * from `booksavailability_computer` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_pc=$sirow['class_1'];
	$class_2_pc=$sirow['class_2'];
	$class_3_pc=$sirow['class_3'];
	$class_4_pc=$sirow['class_4'];
	$class_5_pc=$sirow['class_5'];
	$class_6_pc=$sirow['class_6'];	
		
	$siq=mysqli_query($conn,"select * from `booksavailability_hausa` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_ha=$sirow['class_1'];
	$class_2_ha=$sirow['class_2'];
	$class_3_ha=$sirow['class_3'];
	$class_4_ha=$sirow['class_4'];
	$class_5_ha=$sirow['class_5'];
	$class_6_ha=$sirow['class_6'];	
		
	$siq=mysqli_query($conn,"select * from `booksavailability_irk` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_irk=$sirow['class_1'];
	$class_2_irk=$sirow['class_2'];
	$class_3_irk=$sirow['class_3'];
	$class_4_irk=$sirow['class_4'];
	$class_5_irk=$sirow['class_5'];
	$class_6_irk=$sirow['class_6'];	
		
	$siq=mysqli_query($conn,"select * from `booksavailability_maths` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_mat=$sirow['class_1'];
	$class_2_mat=$sirow['class_2'];
	$class_3_mat=$sirow['class_3'];
	$class_4_mat=$sirow['class_4'];
	$class_5_mat=$sirow['class_5'];
	$class_6_mat=$sirow['class_6'];	
		
	$siq=mysqli_query($conn,"select * from `booksavailability_social_studies` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_ss=$sirow['class_1'];
	$class_2_ss=$sirow['class_2'];
	$class_3_ss=$sirow['class_3'];
	$class_4_ss=$sirow['class_4'];
	$class_5_ss=$sirow['class_5'];
	$class_6_ss=$sirow['class_6'];	
		
	$siq=mysqli_query($conn,"select * from `booksavailability` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$pre_eng=$sirow['eng'];
	$pre_math=$sirow['math'];
	$pre_bscience=$sirow['bscience'];
	$pre_ssocial=$sirow['ssocial'];
	$pre_computer=$sirow['computer'];
	
	////////////////////////////////////////////
	$siq=mysqli_query($conn,"select * from `booksavailability_accounting` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_acc=$sirow['class_1'];
	$class_2_acc=$sirow['class_2'];
	$class_3_acc=$sirow['class_3'];
	$class_4_acc=$sirow['class_4'];
	$class_5_acc=$sirow['class_5'];
	$class_6_acc=$sirow['class_6'];
	
	$siq=mysqli_query($conn,"select * from `booksavailability_agricscience` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_agr=$sirow['class_1'];
	$class_2_agr=$sirow['class_2'];
	$class_3_agr=$sirow['class_3'];
	$class_4_agr=$sirow['class_4'];
	$class_5_agr=$sirow['class_5'];
	$class_6_agr=$sirow['class_6'];	
	
	$siq=mysqli_query($conn,"select * from `booksavailability_biology` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_bio=$sirow['class_1'];
	$class_2_bio=$sirow['class_2'];
	$class_3_bio=$sirow['class_3'];
	$class_4_bio=$sirow['class_4'];
	$class_5_bio=$sirow['class_5'];
	$class_6_bio=$sirow['class_6'];	
		
	$siq=mysqli_query($conn,"select * from `booksavailability_chemistry` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_chm=$sirow['class_1'];
	$class_2_chm=$sirow['class_2'];
	$class_3_chm=$sirow['class_3'];
	$class_4_chm=$sirow['class_4'];
	$class_5_chm=$sirow['class_5'];
	$class_6_chm=$sirow['class_6'];	
		
	$siq=mysqli_query($conn,"select * from `booksavailability_commerce` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_com=$sirow['class_1'];
	$class_2_com=$sirow['class_2'];
	$class_3_com=$sirow['class_3'];
	$class_4_com=$sirow['class_4'];
	$class_5_com=$sirow['class_5'];
	$class_6_com=$sirow['class_6'];	
		
	$siq=mysqli_query($conn,"select * from `booksavailability_economics` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_eco=$sirow['class_1'];
	$class_2_eco=$sirow['class_2'];
	$class_3_eco=$sirow['class_3'];
	$class_4_eco=$sirow['class_4'];
	$class_5_eco=$sirow['class_5'];
	$class_6_eco=$sirow['class_6'];	
		
	$siq=mysqli_query($conn,"select * from `booksavailability_geography` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_geo=$sirow['class_1'];
	$class_2_geo=$sirow['class_2'];
	$class_3_geo=$sirow['class_3'];
	$class_4_geo=$sirow['class_4'];
	$class_5_geo=$sirow['class_5'];
	$class_6_geo=$sirow['class_6'];		
		
	$siq=mysqli_query($conn,"select * from `booksavailability_physics` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$class_1_phy=$sirow['class_1'];
	$class_2_phy=$sirow['class_2'];
	$class_3_phy=$sirow['class_3'];
	$class_4_phy=$sirow['class_4'];
	$class_5_phy=$sirow['class_5'];
	$class_6_phy=$sirow['class_6'];	

	
	$siq=mysqli_query($conn,"select * from `seatstasus` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$pre1_seat_type=$sirow['pre1_seat_type'];
	$pre1_seat_no=$sirow['pre1_seat_no'];
	$pre2_seat_type=$sirow['pre2_seat_type'];
	$pre2_seat_no=$sirow['pre2_seat_no'];
	$pre3_seat_type=$sirow['pre3_seat_type'];
	$pre3_seat_no=$sirow['pre3_seat_no'];
	
	$class1_seat_type=$sirow['class1_seat_type'];
	$class2_seat_type=$sirow['class2_seat_type'];
	$class3_seat_type=$sirow['class3_seat_type'];
	$class4_seat_type=$sirow['class4_seat_type'];
	$class5_seat_type=$sirow['class5_seat_type'];
	$class6_seat_type=$sirow['class6_seat_type'];

	$class1_seat_no=$sirow['class1_seat_no'];
	$class2_seat_no=$sirow['class2_seat_no'];
	$class3_seat_no=$sirow['class3_seat_no'];
	$class4_seat_no=$sirow['class4_seat_no'];
	$class5_seat_no=$sirow['class5_seat_no'];
	$class6_seat_no=$sirow['class6_seat_no'];

	
	$qss=mysqli_query($conn,"select * from `assessibility` where sch_access_id='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);
	
	$nearest__main_road=$srowss['nearest__main_road'];
	$distance_to_town_centre=$srowss['distance_to_town_centre'];
	$nearest_police_station=$srowss['nearest_police_station'];
	$nearest_health_centre=$srowss['nearest_health_centre'];
	
	/////////////////////////////////////////////////////////
	
	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as english FROM `booksavailability_english` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_english=$srowss['english'];
	
	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as maths FROM `booksavailability_maths` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_maths=$srowss['maths'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as bscience FROM `booksavailability_bisic_science` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_bscience=$srowss['bscience'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as sstudies FROM `booksavailability_social_studies` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_sstudies=$srowss['sstudies'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as computer FROM `booksavailability_computer` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_computer=$srowss['computer'];
	
	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as hausa FROM `booksavailability_hausa` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_hausa=$srowss['hausa'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as irk FROM `booksavailability_irk` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_irk=$srowss['irk'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as accounting FROM `booksavailability_accounting` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_accounting=$srowss['accounting'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as agricscience FROM `booksavailability_agricscience` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_agricscience=$srowss['agricscience'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as biology FROM `booksavailability_biology` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_biology=$srowss['biology'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as chemistry FROM `booksavailability_chemistry` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_chemistry=$srowss['chemistry'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as commerce FROM `booksavailability_commerce` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_commerce=$srowss['commerce'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as economics FROM `booksavailability_economics` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_economics=$srowss['economics'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as geography FROM `booksavailability_geography` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_geography=$srowss['geography'];

	$qss=mysqli_query($conn,"SELECT SUM(`class_1`+`class_2`+`class_3`+`class_4`+`class_5`+`class_6`) as physics FROM `booksavailability_physics` WHERE `sch_access_id`='$this_user_id'");
	$srowss=mysqli_fetch_array($qss);	
	$sum_physics=$srowss['physics'];

	$siq=mysqli_query($conn,"select * from `monthly_attendance` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);
	
	$monthly_pre1=$sirow['monthly_pre1'];
	$monthly_pre2=$sirow['monthly_pre2'];
	$monthly_pre3=$sirow['monthly_pre3'];
	$monthly_class1=$sirow['monthly_class1'];
	$monthly_class2=$sirow['monthly_class2'];
	$monthly_class3=$sirow['monthly_class3'];
	$monthly_class4=$sirow['monthly_class4'];
	$monthly_class5=$sirow['monthly_class5'];
	$monthly_class6=$sirow['monthly_class6'];
	$monthly=$sirow['monthly'];

	
				/*$qsss=mysqli_query($conn,"select * from `candidates_olevelexams` where login_rowid='$login_rowid' AND olevels='1'");
	$srowsss=mysqli_fetch_array($qsss);
	
	$examtypeid=$srowsss['examtypeid'];
	$examyear=$srowsss['examyear'];
	$examnumber=$srowsss['examnumber'];
	$centernumber=$srowsss['centernumber'];
	$centername=$srowsss['centername'];
	
	
	$qssss=mysqli_query($conn,"select * from `candidates_olevelexams` where login_rowid='$login_rowid' AND olevels='2'");
	$srowssss=mysqli_fetch_array($qssss);
	
	$sexamtypeid=$srowssss['examtypeid'];
	$sexamyear=$srowssss['examyear'];
	$sexamnumber=$srowssss['examnumber'];
	$scenternumber=$srowssss['centernumber'];
	$scentername=$srowssss['centername']; */

	
	$sch_name=Mansir::get_candidate_name($this_user_id);
	$qss=mysqli_query($conn,"SELECT COUNT(`id`) as no_student FROM `studentenrollmenttbl` WHERE `school_name`='$sch_name'");
	$srowss=mysqli_fetch_array($qss);	
	$no_student=$srowss['no_student'];
	
	$qss1=mysqli_query($conn,"SELECT COUNT(`id`) as no_mstd FROM `studentenrollmenttbl` WHERE `school_name`='$sch_name' AND `gender`='Male'");
	$srowss=mysqli_fetch_array($qss1);	
	$no_mstd=$srowss['no_mstd'];

	$qss2=mysqli_query($conn,"SELECT COUNT(`id`) as no_fstd FROM `studentenrollmenttbl` WHERE `school_name`='$sch_name' AND `gender`='Female'");
	$srowss=mysqli_fetch_array($qss2);	
	$no_fstd=$srowss['no_fstd'];

?>