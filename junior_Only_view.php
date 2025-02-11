
    <!-- End Status area-->
    <div class="sale-statistic-area">
        <div class="container">
	<table   id="data-table-basic" class="table table-striped"  style="width:100%">
  <tr>
    <th>School Information 
      <table>
        <tr>
          <td> <table  id="data-table-basic" class="table table-striped"  style="width:100%">
        <tr>
		           <td>School Name: </td>
		           <td style="text-align:right;"><?php echo Mansir::get_candidate_name($this_user_id); ?></td>
				   
        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Ownership</td>
		           <td style="text-align:right;"><?php echo Mansir::get_sch_Ownership($this_user_id); ?></td>

        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>Type: </td>
		           <td style="text-align:right;"><?php echo Mansir::get_sch_type($this_user_id); ?></td>
							
        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>Year Of Est: </td>
		           <td style="text-align:right;"><?php echo Mansir::get_sch_YearOfEst($this_user_id); ?></td>
							
        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>SHP Scores: </td>
		           <td style="text-align:right;"><?php //echo Mansir::get_candidate_name($this_user_id); ?></td>
							
        </tr>
      </table></td>
        </tr>		
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>Category: </td>
		           <td style="text-align:right;"><?php echo Mansir::get_sch_category($this_user_id); ?></td>
							
        </tr>
      </table></td>
        </tr>		
      </table>
    </td>

	    <th>School Location
      <table>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>Name Of School Operate</td>		
		           <td style="text-align:right;"><?php echo Mansir::get_Name_of_Operate($this_user_id); ?></td>

        </tr>
      </table></td>
        </tr>	  
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>L.G.A</td>		
		           <td style="text-align:right;"><?php echo Mansir::get_lag_by_id(Mansir::get_sch_lga($this_user_id)); ?></td>

        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>Ward</td>
		           <td style="text-align:right;"><?php echo Mansir::get_ward_by_id(Mansir::get_sch_ward($this_user_id)); ?></td>
        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Location</td>
		           <td style="text-align:right;"><?php echo Mansir::get_SCH_Location($this_user_id); ?></td>
        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Level: </td>
		           <td style="text-align:right;"><?php echo Mansir::get_sch_Level($this_user_id); ?></td>
        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Shifting Status: </td>
		           <td style="text-align:right;"><?php //echo Mansir::get_candidate_name($this_user_id); ?></td>
        </tr>
      </table></td>
        </tr>	
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Another School Operate Within Primesis: </td>
		           <td style="text-align:right;"><?php //echo Mansir::get_candidate_name($this_user_id); ?></td>
        </tr>
      </table></td>
        </tr>		
      </table>
    </th>
  </tr>
  
</table>
<br>
<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Condition of Classroom
      <table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>      <table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>JS 1</td>
		           <td>JS 2</td>
				            <td>JS 3</td>
        </tr>
      </table></td>
        </tr>
        <tr>
          <td>      <table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td><?php echo $class1_con; ?></td>
		           <td><?php echo $class2_con; ?></td>
				            <td><?php echo $class3_con; ?></td>
        </tr>
      </table></td>
        </tr>
        <tr>
          <th>Intervention Needed</td>
        </tr>
        <tr>
          <td>    <table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td><?php echo $class1_int; ?></td>
		           <td><?php echo $class2_int; ?></td>
				            <td><?php echo $class3_int; ?></td>
        </tr>
      </table></td>
        </tr>
        <tr>
          <th>Number of Students</td>
        </tr>
        <tr>
          <td>    <table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td><?php echo $no_malestudent+$no_femalestudent; ?></td>

        </tr>
      </table></td>
        </tr>		
      </table>
    </td>
	    <th>Intervention Needed
      <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>      <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>Chair</td>
		           <td>Roof</td>
				            <td>Doors</td>
							   <td>Building</td>
        </tr>
      </table></td>
        </tr>
        <tr>
          <td>      <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		
          <td><?php echo $class1_int; ?></td>
		           <td><?php echo $class2_int; ?></td>
				            <td><?php echo $class3_int; ?></td>
								 <td><?php echo $class4_int; ?></td>

        </tr>
      </table></td>
        </tr>
        <tr>
		          <td>      <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>Male Teachers</td>
		           <td>Male Non-technical</td>
				            <td>Female Teachers</td>
							   <td>Female Non-technical</td>
        </tr>
      </table></td>

		  
        </tr>
	  		          <td>      <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td><?php echo $no_ofmaleteater; ?></td>
		           <td> <?php echo $no_malenontech; ?></td>
				            <td><?php echo $no_offemaleteacher; ?></td>
							   <td><?php echo $no_femalenontech; ?></td>
        </tr>
      </table></td>
        <tr>
          <th>    <table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <th>Number of Male Students</th>
		           <th>Number of Female Students</th>
        </tr>
      </table></th>		  
        </tr>
        <tr>
          <td>    <table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td><?php echo $no_malestudent; ?></td>
		           <td><?php echo $no_femalestudent; ?></td>
        </tr>
      </table></td>
        </tr>		  
      </table>
    </td>
  </tr>
  
</table>
	<br>
	<table   id="data-table-basic" class="table table-striped"  style="width:100%">
  <tr>
    <th>Separate toilet for Teachers
      <table>
        <tr>
          <td> <table  id="data-table-basic" class="table table-striped"  style="width:100%">
        <tr>
		           <td><?php echo $separate_teacher; ?></td>
        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>Separate Type</td>
		           <td>Toilet Type </td>
				            <td>Number Toilet</td>

        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td><?php echo $separate_type_teacher; ?></td>
		           <td><?php echo $toilet_type_teacher; ?></td>
				            <td><?php echo $no_teacher_toilet; ?></td>
							
        </tr>
      </table></td>
        </tr>
      </table>
    </td>
	    <th>Separate toilet for Students
      <table>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td><?php echo $separate_student; ?></td>

        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
          <td>Separate Type</td>
		           <td>Toilet Type </td>
				            <td>Number Toilet</td>
        </tr>
      </table></td>
        </tr>
        <tr>
          <td> <table id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $separate_type_student; ?></td>
				            <td><?php echo $toilet_type_student; ?></td>
											            <td><?php echo $no_student_toilet; ?></td>
        </tr>
      </table></td>
        </tr>

      </table>
    </td>
  </tr>
  
</table>
			<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Present/Source of Water</th>
    <th>Present/Status of fence</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Bore</td>
				            <td>Well</td>
											            <td>Tap</td>
				            <td>River</td>
											            <td>Buy</td>														
        </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Fair</td>
				            <td>Bad</td>
											            <td>Good</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $bore; ?></td>
				            <td><?php echo $well; ?></td>
											            <td><?php echo $tep; ?></td>
				            <td><?php echo $river; ?></td>
											            <td><?php echo $buy; ?></td>														
        </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $fair; ?></td>
		           <td><?php echo $bad; ?></td>
		           <td><?php echo $good; ?></td>
				      
        </tr>
      </table></td>
  </tr>
</table>
		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Present/Status of Light</th>
    <th>Present/Status of Sick Bay</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>NEPA</td>
				            <td>GEN</td>
											            <td>Solar</td>														
        </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Staff</td>
				            <td>First Aid</td>
											            <td>Data staff</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $nepa; ?></td>
				   		           <td><?php echo $gen; ?></td>

		           <td><?php echo $solar; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $staff; ?></td>
				   <td><?php echo $first_aid; ?></td>
		           <td><?php echo $data_staff; ?></td>
  
        </tr>
      </table></td>
  </tr>
</table>	
		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Present/Status of Lesson Material</th>
    <th>Present/Status of Teaching Material</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Board</td>
				            <td>Library</td>
											            <td>Incinerator</td>	
				            <td>Lesson Plan</td>
        </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Laptop</td>
				            <td>Desktop</td>
											            <td>Internet</td>
											            <td>TV</td>
														
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $board; ?></td>
				   		           <td><?php echo $library; ?></td>
				   <td><?php echo $incinerator; ?></td>
		           <td><?php echo $lesson_plan; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $laptop; ?></td>
				   <td><?php echo $desktop; ?></td>
		           <td><?php echo $internet; ?></td>
 		           <td><?php echo $tv; ?></td>
 
        </tr>
      </table></td>
  </tr>
</table>
		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Present/Status of Record Material</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Scheme of Work</td>
				            <td>Check List of S/W</td>
							 <td>Staff Record</td>	
				            <td>Staff Attendance</td>
		           <td>Visitors Register</td>
				            <td>Abstain Register</td>
							 <td>Staff Quarters</td>	
				            <td>Headmaster Office</td>
		           <td>bank Account</td>
				            <td>Overhead</td>
						<td>C A Records</td>	
				            <td>Others</td>							
        </tr>
      </table></td>

  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $schemeofwork; ?></td>
				   		           <td><?php echo $checklistofsw; ?></td>
				   <td><?php echo $staffrecord; ?></td>
		           <td><?php echo $staffattendance; ?></td>
		           <td><?php echo $visitorsregister; ?></td>
				       <td><?php echo $abstainregister; ?></td>
				   		           <td><?php echo $staffquarters; ?></td>
				   <td><?php echo $headmasteroffice; ?></td>
		           <td><?php echo $bankaccount; ?></td>
		           <td><?php echo $overhead; ?></td>
				   		           <td><?php echo $c_a_records; ?></td>
				   <td><?php echo $others; ?></td>
	 </tr>
      </table></td>

  </tr>
</table>
		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Class condition/status (JS) </th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Class 1</td>
				            <td>Class 2</td>
											            <td>Class 3</td>	
												
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class1; ?></td>
 		           <td><?php echo $class2; ?></td>
 		           <td><?php echo $class3; ?></td>
        </tr>
      </table></td>
  </tr>
</table>

		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Number of students (Male)</th>
    <th>Number of students (Female)</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Class 1</td>
				            <td>Class 2</td>
											            <td>Class 3</td>	

        </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Class 1</td>
				            <td>Class 2</td>
											            <td>Class 3</td>	
											
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

		           <td><?php echo $class1_m; ?></td>
				   <td><?php echo $class2_m; ?></td>
		           <td><?php echo $class3_m; ?></td>
	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class1_f; ?></td>
				   <td><?php echo $class2_f; ?></td>
		           <td><?php echo $class3_f; ?></td>				   
 
        </tr>
      </table></td>
  </tr>
</table>


		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Secondary School Books Status</th>
    <th>Class Distribution</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Book Subject</td>
				   <td>Book Status</td>

        </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Class 1</td>
				            <td>Class 2</td>
											            <td>Class 3</td>	
												
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Accounting</td>
				   <td><?php echo $accounting; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class_1_acc; ?></td>
				   <td><?php echo $class_2_acc; ?></td>
		           <td><?php echo $class_3_acc; ?></td>				   
 
        </tr>
      </table></td>
  </tr>
  
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Agric science</td>
				   <td><?php echo $agricscience; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class_1_agr; ?></td>
				   <td><?php echo $class_2_agr; ?></td>
		           <td><?php echo $class_3_agr; ?></td>				   
 
        </tr>
      </table></td>
  </tr>

  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Biology</td>
				   <td><?php echo $biology; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class_1_bio; ?></td>
				   <td><?php echo $class_2_bio; ?></td>
		           <td><?php echo $class_3_bio; ?></td>				   
 
        </tr>
      </table></td>
  </tr>


  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Chemistry</td>
				   <td><?php echo $chemistry; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class_1_chm; ?></td>
				   <td><?php echo $class_2_chm; ?></td>
		           <td><?php echo $class_3_chm; ?></td>				   
 
        </tr>
      </table></td>
  </tr>


  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Commerce</td>
				   <td><?php echo $commerce; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class_1_com; ?></td>
				   <td><?php echo $class_2_com; ?></td>
		           <td><?php echo $class_3_com; ?></td>				   
 
        </tr>
      </table></td>
  </tr>


  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Computer</td>
				   <td><?php echo $computer; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class_1_pc; ?></td>
				   <td><?php echo $class_2_pc; ?></td>
		           <td><?php echo $class_3_pc; ?></td>				   
 
        </tr>
      </table></td>
  </tr>



  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Economics</td>
				   <td><?php echo $economics; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class_1_eco; ?></td>
				   <td><?php echo $class_2_eco; ?></td>
		           <td><?php echo $class_3_eco; ?></td>				   
 
        </tr>
      </table></td>
  </tr>


  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>English</td>
				   <td><?php echo $english; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class_1_eng; ?></td>
				   <td><?php echo $class_2_eng; ?></td>
		           <td><?php echo $class_3_eng; ?></td>				   
 
        </tr>
      </table></td>
  </tr>

  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Geography</td>
				   <td><?php echo $geography; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class_1_geo; ?></td>
				   <td><?php echo $class_2_geo; ?></td>
		           <td><?php echo $class_3_geo; ?></td>				   
 
        </tr>
      </table></td>
  </tr>


  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Math</td>
				   <td><?php echo $maths; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class_1_mat; ?></td>
				   <td><?php echo $class_2_mat; ?></td>
		           <td><?php echo $class_3_mat; ?></td>				   
 
        </tr>
      </table></td>
  </tr>


  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Physics</td>
				   <td><?php echo $physics; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $class_1_phy; ?></td>
				   <td><?php echo $class_2_phy; ?></td>
		           <td><?php echo $class_2_phy; ?></td>				   
 
        </tr>
      </table></td>
  </tr>
   <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Total Secondary Books Distribution</td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $class_1_eng+ $class_1_mat+ $class_1_bs+ $class_1_pc+ $class_1_ha+ $class_1_irk; ?></td>				   
		           <td><?php echo $class_2_eng+ $class_2_mat+ $class_2_bs+ $class_2_pc+ $class_2_ha+ $class_2_irk; ?></td>				   
		           <td><?php echo $class_3_eng+ $class_3_mat+ $class_3_bs+ $class_3_pc+ $class_3_ha+ $class_3_irk; ?></td>				   
		           
        </tr>
      </table></td>
  </tr> 

		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Secondary Seat Status (JS)</th>
    <th>Seating Capacity</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Class</td>

        </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Class 1</td>
				            <td>Class 2</td>
											            <td>Class 3</td>	
														
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Seat Type</td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

		           <td><?php echo $class1_seat_type; ?></td>
				   <td><?php echo $class2_seat_type; ?></td>
		           <td><?php echo $class3_seat_type; ?></td>			   
 
        </tr>
      </table></td>
  </tr>

  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Number of Seats</td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

		           <td><?php echo $class1_seat_no; ?></td>
				   <td><?php echo $class2_seat_no; ?></td>
		           <td><?php echo $class3_seat_no; ?></td>			   
 
        </tr>
      </table></td>
  </tr>

  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Total Number of Seat By Class</td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $class1_seat_no+ $class2_seat_no+ $class3_seat_no+$class4_seat_no+ $class5_seat_no+ $class6_seat_no; ?></td>
			   
 
        </tr>
      </table></td>
  </tr>
  
		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Assessibility</th>
    <th>Distance</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>What is the distance from the nearest main road? </td>

        </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $nearest__main_road; ?></td>
													
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>What is the distance to town centre?</td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $distance_to_town_centre; ?></td>
 
        </tr>
      </table></td>
  </tr>

  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>What is the distance to the nearest police station?</td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $nearest_police_station; ?></td>
			   
 
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>What is the distance to the nearest hospital/health centre?</td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $nearest_health_centre; ?></td>
			   
 
        </tr>
      </table></td>
  </tr>
</table>
 
		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Monthly Attendance of Students Percentage (JS)</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Class 1</td>
				            <td>Class 2</td>
											            <td>Class 3</td>													
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

 		           <td><?php echo $monthly_class1; ?>%</td>
				   <td><?php echo $monthly_class2; ?>%</td>
		           <td><?php echo $monthly_class3; ?>%</td>				   
 
        </tr>
      </table></td>
  </tr>
</table>
  
</table>

        </div>
    </div>