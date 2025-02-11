
  <div class="row">
<div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Edit School Data (Pre-primary and primary)</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">

					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_to_register_sch.php" enctype="multipart/form-data">
						<div style="height:10px;"></div>
			
						
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Is the School Operational?</span>
                         <select name="school_ops" class="form-control" id="school_ops" required >
						 <option selected value="<?php echo $school_ops;?>"><?php echo $school_ops;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>
						 
                                </select>
					   </div>


	
	</div>
					      <div class="col-lg-3"></div>


				</div>	<?php if($school_ops=="No"){
				
				?>
				<div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>If No Reasons For Not Functioning:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						 <select name='yeyason' id='not_unctioning' class='form-control' required >
						 <option selected='selected' disabled='disabled' value=''>-- Select Class Condition --</option>
						 <option value='1' >School are dilapidated (no roofing and building collapse)</option>						
						 <option  value='2'>Insecurity</option>		
						 <option value='3' >Fire incident</option>						
						 <option  value='4'>Government close the school</option>	
						 <option value='Other' >Other</option>						
                                </select>
						  </div>						  
						  </div>
               
								</div>

	
								</div>
																					  <div class='col-lg-3'></div> 													
</div>
<div id='not_unctioning_q'></div>
				<?php }
				?>
						
					 
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Class Availability:</span>
                         <select name="class_conditional" class="form-control" id="present_classcondition" required />
						 <option selected value="<?php echo $class_conditional; ?>"><?php echo $class_conditional;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
<div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>

						<div class='form-group input'>
                            <span  class='input-group'>Secondary:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>JS 1:</span>
                         <select name='class1' class='form-control' id='' required >
						 <option selected value="<?php echo $class1; ?>"><?php echo $class1;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  					 
						</select>                        </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>JS 2:</span>
                         <select name='class2' class='form-control' id='' required >
						 <option selected value="<?php echo $class2; ?>"><?php echo $class2;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>JS 3:</span>
                         <select name='class3' class='form-control' id='' required >
						 <option selected value="<?php echo $class3; ?>"><?php echo $class3;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>SS 1:</span>
                         <select name='class4' class='form-control' id='' required >
						 <option selected value="<?php echo $class4; ?>"><?php echo $class4;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>   						 
						</select>                        </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>SS 2:</span>
                         <select name='class5' class='form-control' id='' required >
						 <option selected value="<?php echo $class5; ?>"><?php echo $class5;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  					 
						</select>                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>SS 3:</span>
                         <select name='class6' class='form-control' id='' required >
						 <option selected value="<?php echo $class6; ?>"><?php echo $class6;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  					 
						</select>                        </div>
						  </div>						  
						  </div>                     
								</div>

	
	</div>
													 <div class='col-lg-3'></div>
</div>

					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Condition of Classroom:</span>
                         <select name="presentofclassroom" class="form-control" id="parent_cat" required >
						 <option selected value="<?php echo $presentofclassroom; ?>"><?php echo $presentofclassroom;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>
						 
                                </select>
					   </div>


	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
		
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
					
						
						<div class="form-group">
                            <span  class="input-group">Number of Male Teachers:</span>
                          <input type="number" class="form-control" name="no_ofmaleteater" value="<?php echo $no_ofmaleteater; ?>" placeholder="Enter Number" required>
                        </div>
						
												<div class="form-group">
                            <span class="input-group">Number of Female Teachers:</span>
                          <input type="number" class="form-control" name="no_offemaleteacher" value="<?php echo $no_offemaleteacher; ?>" placeholder="Enter Number" required>
                        </div>
						
						<div class="form-group">
                            <span class="input-group">Number of Male Non-technical:</span>
                          <input type="number" class="form-control" name="no_malenontech" value="<?php echo $no_malenontech; ?>" placeholder="Enter Number" required>
                        </div>
						
						<div class="form-group">
                            <span class="input-group">Number of Female Non-technical:</span>
                          <input type="number" class="form-control" name="no_femalenontech" value="<?php echo $no_femalenontech; ?>" placeholder="Enter Number" required>
                        </div>
						

	
	</div>
						
						
						
						
					      <div class="col-lg-3"></div>


				</div>	


				
					  <div class="row">
					  					      <div class="col-lg-3"></div>

    <div class="col-lg-3">
						<div class="form-group">
                            <span class="input-group">Number of Male Students:</span>
                          <input type="number" class="form-control" name="no_malestudent" value="<?php echo $no_malestudent; ?>"  placeholder="Enter Number" required>
 
								</div>

	
	</div>
    <div class="col-lg-3">						
						
						<div class="form-group">
                            <span  class="input-group">Number of Female Students:</span>
                          <input type="number" class="form-control" name="no_femalestudent" value="<?php echo $no_femalestudent; ?>"  placeholder="Enter Number" required>
                                               </div>
						</div>
					      <div class="col-lg-3"></div>
				</div>
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present of Toilet :</span>
                         <select name="presentoftoilet" class="form-control" id="parent_toilet" required />
						 <option selected value="<?php echo $presentoftoilet; ?>"><?php echo $presentoftoilet;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>
						 
                                </select>
					   </div>


	
	</div>


	

					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="toilet_q"></div>

							 <div class='row'>
						  <div class='col-lg-3'>
						  <span class='input-group'>Separate Toilet for Teachers :</span>
						 <select name='separate_teacher' id='cond' class='form-control' required >
						 <option selected value="<?php echo $separate_teacher; ?>"><?php echo $separate_teacher;?></option>
						 <option  value='Yes'>Yes</option>	
						 <option  value='No'>No</option>												 
						 
                                </select>
						  </div>
						  <div class='col-lg-3'>
						  						  <span class='input-group'>Separation Type :</span>

						 <select name='separate_type_teacher' id='loadcond' class='form-control' required >
						 <option selected value="<?php echo $separate_type_teacher; ?>"><?php echo $separate_type_teacher;?></option>
						 <option value='Male Only' >Male Only</option>						
						 <option  value='Female Only'>Female Only</option>
						 <option value='Combine' >Combine</option>													 
                                </select>
						  </div>
						  <div class='col-lg-3'>
						 <span class='input-group'>Toilet Type for Teachers :</span>
						 <select name='toilet_type_teacher' class='form-control' required >
						 <option selected value="<?php echo $toilet_type_teacher; ?>"><?php echo $toilet_type_teacher;?></option>
						 <option value='PIT' >PIT</option>						
						 <option  value='WC'>WC</option>
						 <option value='Bucket' >Bucket</option>						
						 <option  value='Squat'>Squat</option>
						 <option  value='Open'>Open</option>						 
						 <option  value='No'>No</option>						 
						 
                                </select>
						  </div>						  
						  <div class='col-lg-3'>
						  						  <span class='input-group'>Enter Number of Toilet for Teachers :</span>

                          <input type='number' class='form-control' name='no_teacher_toilet'  value="<?php echo $no_teacher_toilet; ?>"placeholder='Enter Number' required>
												 
                                </select>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-3'>
						 <span class='input-group'>Separate Toilet for Students :</span>
						 <select name='separate_student' id='cond1' class='form-control' required >
						 <option selected value="<?php echo $separate_student; ?>"><?php echo $separate_student;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>												 
                                </select>
						  </div>
						  <div class='col-lg-3'>
						  						  <span class='input-group'>Separation Type :</span>

						 <select name='separate_type_student' id='loadcond1' class='form-control' required >
						 <option selected value="<?php echo $separate_type_student; ?>"><?php echo $separate_type_student;?></option>
						 <option value='Male Only' >Male Only</option>						
						 <option  value='Female Only'>Female Only</option>
						 <option value='Combine' >Combine</option>													 
                                </select>												 
                                </select>
						  </div>
						  <div class='col-lg-3'>
						 <span class='input-group'>Toilet Type for Students :</span>
						 <select name='toilet_type_student' class='form-control' required >
						 <option selected value="<?php echo $toilet_type_student; ?>"><?php echo $toilet_type_student;?></option>
						 <option value='PIT' >PIT</option>						
						 <option  value='WC'>WC</option>
						 <option value='Bucket' >Bucket</option>						
						 <option  value='Squat'>Squat</option>
						 <option  value='Open'>Open</option>	
						 <option  value='No'>No</option>						 
						 
                                </select>
						  </div>						  
						  <div class='col-lg-3'>
						  						  <span class='input-group'>Enter Number of Toilet for Students :</span>

                          <input type='number' class='form-control' name='no_student_toilet'  value="<?php echo $no_student_toilet; ?>" required>
												 
                                </select>
						  </div>						  
						  </div>
				
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present of Water:</span>
                         <select name="presentofwater" class="form-control" id="present_water" required />
						 <option selected value="<?php echo $presentofwater; ?>"><?php echo $presentofwater;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
<div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Source of Wate:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Bore:</span>
                         <select name='bore' class='form-control' id='' required >
						 <option selected value="<?php echo $bore; ?>"><?php echo $bore;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>well:</span>
                         <select name='well' class='form-control' id='' required >
						 <option selected value="<?php echo $well; ?>"><?php echo $well;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Tap:</span>
                         <select name='tep' class='form-control' id='' required >
						 <option selected value="<?php echo $tep; ?>"><?php echo $tep;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>River:</span>
                         <select name='river' class='form-control' id='' required >
						 <option selected value="<?php echo $river; ?>"><?php echo $river;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Buy:</span>
                         <select name='buy' class='form-control' id='' required >
						 <option selected value="<?php echo $buy; ?>"><?php echo $buy;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>							 						                        
								</div>	


	
	</div>
													 <div class='col-lg-3'></div>
</div>	
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of fence:</span>
                         <select name="presentoffence" class="form-control" id="present_fence" required />
						 <option selected value="<?php echo $presentoffence; ?>"><?php echo $presentoffence;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
<div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Status of Fence:</span>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Bad Status (50%) Covered:</span>
                         <select name='bad' class='form-control' id='' required >
						 <option selected value="<?php echo $bad; ?>"><?php echo $bad;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Good Status (100%) Covered:</span>
                         <select name='good' class='form-control' id='' required >
						 <option selected value="<?php echo $good; ?>"><?php echo $good;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  

							 						                        
								</div>	


	
	</div>
													 <div class='col-lg-3'></div>
</div>
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of Light:</span>
                         <select name="presentoflight" class="form-control" id="present_light" required />
						 <option selected value="<?php echo $presentoflight; ?>"><?php echo $presentoflight;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
<div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Status of Light:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Nepa:</span>
                         <select name='nepa' class='form-control' id='' required >
						 <option selected value="<?php echo $nepa; ?>"><?php echo $nepa;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Gen:</span>
                         <select name='gen' class='form-control' id='' required >
						 <option selected value="<?php echo $gen; ?>"><?php echo $gen;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Solar:</span>
                         <select name='solar' class='form-control' id='' required >
						 <option selected value="<?php echo $solar; ?>"><?php echo $solar;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  

							 						                        
								</div>	


	
	</div>
													 <div class='col-lg-3'></div>
</div>
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of Sick Bay:</span>
                         <select name="presentofslickbay" class="form-control" id="present_sickbay" required />
						 <option selected value="<?php echo $presentofslickbay; ?>"><?php echo $presentofslickbay;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
<div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Status of Sick Bay:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Staff:</span>
                         <select name='staff' class='form-control' id='' required >
						 <option selected value="<?php echo $staff; ?>"><?php echo $staff;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>First Aid:</span>
                         <select name='data_staff' class='form-control' id='' required >
						 <option selected value="<?php echo $data_staff; ?>"><?php echo $data_staff;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Data staff:</span>
                         <select name='data_staff' class='form-control' id='' required >
						 <option selected value="<?php echo $data_staff; ?>"><?php echo $data_staff;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  							 						                        
								</div>	


	
	</div>
													 <div class='col-lg-3'></div>
</div>	
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of Teaching Material:</span>
                         <select name="pre_teaching_material" class="form-control" id="present_material" required />
						 <option selected value="<?php echo $pre_teaching_material; ?>"><?php echo $pre_teaching_material;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
<div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Status of Teaching Material:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Desktop:</span>
                         <select name='laptop' class='form-control' id='' required >
						 <option selected value="<?php echo $laptop; ?>"><?php echo $laptop;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Laptop:</span>
                         <select name='desktop' class='form-control' id='' required >
						 <option selected value="<?php echo $desktop; ?>"><?php echo $desktop;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Internet:</span>
                         <select name='internet' class='form-control' id='' required >
						 <option selected value="<?php echo $internet; ?>"><?php echo $internet;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>TV:</span>
                         <select name='tv' class='form-control' id='' required >
						 <option selected value="<?php echo $tv; ?>"><?php echo $tv;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>						  							 						                        
								</div>	


	
	</div>
													 <div class='col-lg-3'></div>
</div>	
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of Lesson Material:</span>
                         <select name="pre_lession_material" class="form-control" id="present_materiallesson" required />
						 <option selected value="<?php echo $pre_lession_material; ?>"><?php echo $pre_lession_material;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
<div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Status of Lesson Material:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>board:</span>
                         <select name='board' class='form-control' id='' required >
						 <option selected value="<?php echo $board; ?>"><?php echo $board;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Library:</span>
                         <select name='library' class='form-control' id='' required >
						 <option selected value="<?php echo $library; ?>"><?php echo $library;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Incinerator:</span>
                         <select name='incinerator' class='form-control' id='' required >
						 <option selected value="<?php echo $incinerator; ?>"><?php echo $incinerator;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Lesson plan:</span>
                         <select name='lesson_plan' class='form-control' id='' required >
						 <option selected value="<?php echo $lesson_plan; ?>"><?php echo $lesson_plan;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>						  							 						                        
								</div>	


	
	</div>
													 <div class='col-lg-3'></div>
</div>	
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of Record Material:</span>
                         <select name="pre_record_material" class="form-control" id="present_materialrecord" required />
						 <option selected value="<?php echo $pre_record_material; ?>"><?php echo $pre_record_material;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
<div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Status of Record Material:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Scheme of work:</span>
                         <select name='schemeofwork' class='form-control' id='' required >
						 <option selected value="<?php echo $schemeofwork; ?>"><?php echo $schemeofwork;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Checklist of S/W:</span>
                         <select name='checklistofsw' class='form-control' id='' required >
						 <option selected value="<?php echo $checklistofsw; ?>"><?php echo $checklistofsw;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Staff Record:</span>
                         <select name='staffrecord' class='form-control' id='' required >
						 <option selected value="<?php echo $staffrecord; ?>"><?php echo $staffrecord;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Staff Attendance:</span>
                         <select name='staffattendance' class='form-control' id='' required >
						 <option selected value="<?php echo $staffattendance; ?>"><?php echo $staffattendance;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Visitors Register:</span>
                         <select name='visitorsregister' class='form-control' id='' required >
						 <option selected value="<?php echo $visitorsregister; ?>"><?php echo $visitorsregister;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Abstain Register:</span>
                         <select name='abstainregister' class='form-control' id='' required >
						 <option selected value="<?php echo $abstainregister; ?>"><?php echo $abstainregister;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Staff Quarters:</span>
                         <select name='staffquarters' class='form-control' id='' required >
						 <option selected value="<?php echo $staffquarters; ?>"><?php echo $staffquarters;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Headmaster Office:</span>
                         <select name='headmasteroffice' class='form-control' id='' required >
						 <option selected value="<?php echo $headmasteroffice; ?>"><?php echo $headmasteroffice;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Bank Account:</span>
                         <select name='bankaccount' class='form-control' id='' required >
						 <option selected value="<?php echo $bankaccount; ?>"><?php echo $bankaccount;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Overhead:</span>
                         <select name='overhead' class='form-control' id='' required >
						 <option selected value="<?php echo $overhead; ?>"><?php echo $overhead;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>C.A Records:</span>
                         <select name='c_a_records' class='form-control' id='' required >
						 <option selected value="<?php echo $c_a_records; ?>"><?php echo $c_a_records;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>						  							 						                        
								</div>	


	
	</div>
													 <div class='col-lg-3'></div>
</div>
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Number of Students By Class:</span>
                         <select name="studentbyclass" class="form-control" id="present_students" required />
						 <option selected value="<?php echo $studentbyclass; ?>"><?php echo $studentbyclass;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="students_q"></div>	

												
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Secondary School Books Status (Exist):</span>
                         <select name="classdistribution" class="form-control" id="present_books" required />
						 <option selected value="<?php echo $classdistribution; ?>"><?php echo $classdistribution;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
 <div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>
						<div class='form-group input'>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>English:</span>
                         <select name='english' class='form-control' id='english' required >
						 <option selected value="<?php echo $english; ?>"><?php echo $english;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span class='input-group-addon'>Maths:</span>
                         <select name='maths' class='form-control' id='math' required >
						 <option selected value="<?php echo $maths; ?>"><?php echo $maths;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                         </div>
						  </div>						  
						  </div>
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span class='input-group-addon'>B/Science:</span>
                         <select name='bscience' class='form-control' id='bscience' required >
						 <option selected value="<?php echo $bscience; ?>"><?php echo $bscience;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span class='input-group-addon'>S/Studies:</span>
                         <select name='sstudies' class='form-control' id='sstudies' required >
						 <option selected value="<?php echo $sstudies; ?>"><?php echo $sstudies;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>						  

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span class='input-group-addon'>Computer:</span>
                         <select name='computer' class='form-control' id='computer' required >
						 <option selected value="<?php echo $computer; ?>"><?php echo $computer;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                         </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span class='input-group-addon'>Hausa:</span>
                         <select name='hausa' class='form-control' id='hausa' required >
						 <option selected value="<?php echo $hausa; ?>"><?php echo $hausa;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                         </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span class='input-group-addon'>IRK:</span>
                         <select name='irk' class='form-control' id='irk' required >
						 <option selected value="<?php echo $irk; ?>"><?php echo $irk;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                         </div>
						  </div>						  
						  </div>						  

	</div>
	</div>
													 <div class='col-lg-3'></div>
</div>

					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Seat Status:</span>
                         <select name="seatstasus" class="form-control" id="present_preseat" required />
						 <option selected value="<?php echo $seatstasus; ?>"><?php echo $seatstasus;?></option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="seat_q"></div>
													
													 <div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>
						<div class='form-group input'>
						                            <span  class='input-group'>Assessibility:</span>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>What is the distance from the nearest main road?</span>
                         <select name='nearest__main_road' class='form-control' id='' required >
						 <option selected value="<?php echo $nearest__main_road; ?>"><?php echo $nearest__main_road;?></option>
						 <option value='500M' >500M</option>						
						 <option  value='1KM'>1KM</option>  	
						 <option value='1-2KM' >1-2KM</option>						
						 <option  value='3-4KM'>3-4KM</option>  	
						 <option value='>5KM' >>5KM</option>						
						</select>                        </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span class='input-group-addon'>What is the distance to town centre?</span>
                          <select name='distance_to_town_centre' class='form-control' id='' required >
						 <option selected value="<?php echo $distance_to_town_centre; ?>"><?php echo $distance_to_town_centre;?></option>
						 <option value='500M' >500M</option>						
						 <option  value='1KM'>1KM</option>  	
						 <option value='1-2KM' >1-2KM</option>						
						 <option  value='3-4KM'>3-4KM</option>  	
						 <option value='>5KM' >>5KM</option>						
						</select>                        </div>
						  </div>						  
						  </div>
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span class='input-group-addon'>What is the distance to the nearest police station?</span>
                         <select name='nearest_police_station' class='form-control' id='' required >
						 <option selected value="<?php echo $nearest_police_station; ?>"><?php echo $nearest_police_station;?></option>
						 <option value='500M' >500M</option>						
						 <option  value='1KM'>1KM</option>  	
						 <option value='1-2KM' >1-2KM</option>						
						 <option  value='3-4KM'>3-4KM</option>  	
						 <option value='>5KM' >>5KM</option>						
						</select>                        </div>
						  </div>						  
						  </div>
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span class='input-group-addon'>What is the distance to the nearest hospital/health centre?</span>
                         <select name='nearest_health_centre' class='form-control' id='' required >
						 <option selected value="<?php echo $nearest_health_centre; ?>"><?php echo $nearest_health_centre;?></option>
						 <option value='500M' >500M</option>						
						 <option  value='1KM'>1KM</option>  	
						 <option value='1-2KM' >1-2KM</option>						
						 <option  value='3-4KM'>3-4KM</option>  	
						 <option value='>5KM' >>5KM</option>						
						</select>                       </div>
						  </div>						  
						  </div>						  						  

	</div>
	</div>
													 <div class='col-lg-3'></div>
</div>					  							


									
												<center>
												<div style="height:10px;"></div>
						<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
						<button type="reset" class="btn btn-primary">Cancel</button>

						<a href="../logout.php" class="btn btn-danger">Login</a>
						<input type="hidden" name="this_user_id" value="<?php echo $this_user_id ?>">

						</form>
						</center>
				</div>

        </div>
            </div>
        </div>