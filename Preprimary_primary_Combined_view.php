
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
          <td>Pre 1</td>
		           <td>Pre 2</td>
				            <td>Pre 3</td>
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
    <th>Class condition/status Primary</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Class 1</td>
				            <td>Class 2</td>
											            <td>Class 3</td>	
				            <td>Class 4</td>
																		            <td>Class 5</td>	
				            <td>Class 6</td>												
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $class1; ?></td>
				   <td><?php echo $class2; ?></td>
		           <td><?php echo $class3; ?></td>
 		           <td><?php echo $class4; ?></td>
 		           <td><?php echo $class5; ?></td>
 		           <td><?php echo $class6; ?></td>
        </tr>
      </table></td>
  </tr>
</table>
	<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Class condition/status Pre-Primary</th>
     <th>Number of students (Male) Pre-Primary</th>
    <th>Number of students (Female) Pre-Primary</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Pre 1</td>
				            <td>Pre 2</td>
											            <td>Pre 3</td>	
				          
        </tr>
      </table></td>	
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Pre 1</td>
				            <td>Pre 2</td>
											            <td>Pre 3</td>	
				          
        </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Pre 1</td>
				            <td>Pre 2</td>
											            <td>Pre 3</td>												
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

		           <td><?php echo $pre1; ?></td>
				   		           <td><?php echo $pre2; ?></td>
				   <td><?php echo $pre3; ?></td>
	 </tr>
      </table></td>
  <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>

		           <td><?php echo $pre1_m; ?></td>
				   		           <td><?php echo $pre2_m; ?></td>
				   <td><?php echo $pre3_m; ?></td>
	 </tr>
      </table></td>
  <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $pre1_f; ?></td>
				   		           <td><?php echo $pre2_f; ?></td>
				   <td><?php echo $pre3_f; ?></td>

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
				            <td>Class 4</td>
																		            <td>Class 5</td>	
				            <td>Class 6</td>
        </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Class 1</td>
				            <td>Class 2</td>
											            <td>Class 3</td>	
				            <td>Class 4</td>
																		            <td>Class 5</td>	
				            <td>Class 6</td>												
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $class1_m; ?></td>
				   		           <td><?php echo $class2_m; ?></td>
				   <td><?php echo $class3_m; ?></td>
		           <td><?php echo $class4_m; ?></td>
				   <td><?php echo $class5_m; ?></td>
		           <td><?php echo $class6_m; ?></td>
	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $class1_f; ?></td>
				   <td><?php echo $class2_f; ?></td>
		           <td><?php echo $class3_f; ?></td>
 		           <td><?php echo $class4_f; ?></td>
				   <td><?php echo $class5_f; ?></td>
		           <td><?php echo $class6_f; ?></td>				   
 
        </tr>
      </table></td>
  </tr>
</table>

		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Per-Primary School Books Status</th>
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
		           <td>English</td>
				            <td>Maths</td>
											            <td>Basic Science</td>	
				            <td>Social Studies</td>
											            <td>Computer</td>												
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Number of Books</td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $pre_eng; ?></td>
				   <td><?php echo $pre_math; ?></td>
		           <td><?php echo $pre_bscience; ?></td>
				   <td><?php echo $pre_ssocial; ?></td>
		           <td><?php echo $pre_computer; ?></td>			   
 
        </tr>
      </table></td>
  </tr>
   <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Total Pre-primary Books Distribution</td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $pre_eng+ $pre_math+ $pre_bscience+ $pre_ssocial+ $pre_computer; ?></td>				   
 
        </tr>
      </table></td>
  </tr> 
</table>

		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Primary School Books Status</th>
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
				            <td>Class 4</td>
																		            <td>Class 5</td>	
				            <td>Class 6</td>												
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
 		           <td><?php echo $class_4_eng; ?></td>
				   <td><?php echo $class_5_eng; ?></td>
		           <td><?php echo $class_6_eng; ?></td>				   
 
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
 		           <td><?php echo $class_4_mat; ?></td>
				   <td><?php echo $class_5_mat; ?></td>
		           <td><?php echo $class_6_mat; ?></td>				   
 
        </tr>
      </table></td>
  </tr>
 
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Basic Science</td>
				   <td><?php echo $bscience; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $class_1_bs; ?></td>
				   <td><?php echo $class_2_bs; ?></td>
		           <td><?php echo $class_3_bs; ?></td>
 		           <td><?php echo $class_4_bs; ?></td>
				   <td><?php echo $class_5_bs; ?></td>
		           <td><?php echo $class_6_bs; ?></td>				   
 
        </tr>
      </table></td>
  </tr>

  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Social Studies</td>
				   <td><?php echo $sstudies; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $class_1_ss; ?></td>
				   <td><?php echo $class_2_ss; ?></td>
		           <td><?php echo $class_3_ss; ?></td>
 		           <td><?php echo $class_4_ss; ?></td>
				   <td><?php echo $class_5_ss; ?></td>
		           <td><?php echo $class_6_ss; ?></td>				   
 
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
 		           <td><?php echo $class_4_pc; ?></td>
				   <td><?php echo $class_5_pc; ?></td>
		           <td><?php echo $class_6_pc; ?></td>				   
 
        </tr>
      </table></td>
  </tr>


  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Hausa</td>
				   <td><?php echo $hausa; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $class_1_ha; ?></td>
				   <td><?php echo $class_2_ha; ?></td>
		           <td><?php echo $class_3_ha; ?></td>
 		           <td><?php echo $class_4_ha; ?></td>
				   <td><?php echo $class_5_ha; ?></td>
		           <td><?php echo $class_6_ha; ?></td>				   
 
        </tr>
      </table></td>
  </tr>




  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>IRK</td>
				   <td><?php echo $irk; ?></td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $class_1_irk; ?></td>
				   <td><?php echo $class_2_irk; ?></td>
		           <td><?php echo $class_3_irk; ?></td>
 		           <td><?php echo $class_4_irk; ?></td>
				   <td><?php echo $class_5_irk; ?></td>
		           <td><?php echo $class_6_irk; ?></td>				   
 
        </tr>
      </table></td>
  </tr>
   <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Total Primary Books Distribution</td>

	 </tr>
      </table></td>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $class_1_eng+ $class_1_mat+ $class_1_bs+ $class_1_pc+ $class_1_ha+ $class_1_irk; ?></td>				   
		           <td><?php echo $class_2_eng+ $class_2_mat+ $class_2_bs+ $class_2_pc+ $class_2_ha+ $class_2_irk; ?></td>				   
		           <td><?php echo $class_3_eng+ $class_3_mat+ $class_3_bs+ $class_3_pc+ $class_3_ha+ $class_3_irk; ?></td>				   
		           <td><?php echo $class_4_eng+ $class_4_mat+ $class_4_bs+ $class_4_pc+ $class_4_ha+ $class_4_irk; ?></td>				   
		           <td><?php echo $class_5_eng+ $class_5_mat+ $class_5_bs+ $class_5_pc+ $class_5_ha+ $class_5_irk; ?></td>				   
		           <td><?php echo $class_6_eng+ $class_6_mat+ $class_6_bs+ $class_6_pc+ $class_6_ha+ $class_6_irk; ?></td>				   

        </tr>
      </table></td>
  </tr> 
</table>

		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Per-Primary Seat Status </th>
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
		           <td>Pre 1</td>
				            <td>Pre 2</td>
											            <td>Pre 3</td>	
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
		           <td><?php echo $pre1_seat_type; ?></td>
				   <td><?php echo $pre2_seat_type; ?></td>
		           <td><?php echo $pre3_seat_type; ?></td>
			   
 
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
		           <td><?php echo $pre1_seat_no; ?></td>
				   <td><?php echo $pre2_seat_no; ?></td>
		           <td><?php echo $pre3_seat_no; ?></td>
			   
 
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
		           <td><?php echo $pre1_seat_no+ $pre2_seat_no+ $pre3_seat_no; ?></td>
			   
 
        </tr>
      </table></td>
  </tr>
  
</table>


		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Primary Seat Status </th>
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
		           <td>Class 4</td>
				            <td>Class 4</td>
											            <td>Class 6</td>														
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
		           <td><?php echo $class4_seat_type; ?></td>
				   <td><?php echo $class5_seat_type; ?></td>
		           <td><?php echo $class6_seat_type; ?></td>			   
 
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
		           <td><?php echo $class4_seat_no; ?></td>
				   <td><?php echo $class5_seat_no; ?></td>
		           <td><?php echo $class6_seat_no; ?></td>			   
 
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
  
</table>
 
  
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
    <th>Monthly Attendance of Students Percentage (Per-Primary)</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Pre 1</td>
				            <td>Pre 2</td>
											            <td>Pre 3</td>	
												
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $monthly_pre1; ?></td>
				   <td><?php echo $monthly_pre2; ?></td>
		           <td><?php echo $monthly_pre3; ?></td>
				   
 
        </tr>
      </table></td>
  </tr>
</table>

		<br>					
	<table  id="data-table-basic" class="table table-striped" style="width:100%">
  <tr>
    <th>Monthly Attendance of Students Percentage (Primary)</th>

  </tr>
    <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td>Class 1</td>
				            <td>Class 2</td>
											            <td>Class 3</td>	
				            <td>Class 4</td>
																		            <td>Class 5</td>	
				            <td>Class 6</td>												
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table  id="data-table-basic" class="table table-striped" style="width:100%">
        <tr>
		           <td><?php echo $monthly_class1; ?></td>
				   <td><?php echo $monthly_class2; ?></td>
		           <td><?php echo $monthly_class3; ?></td>
 		           <td><?php echo $monthly_class4; ?></td>
				   <td><?php echo $monthly_class5; ?></td>
		           <td><?php echo $monthly_class6; ?></td>				   
 
        </tr>
      </table></td>
  </tr>
</table>
  
</table>

        </div>
    </div>