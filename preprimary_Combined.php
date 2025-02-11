 		<script type="text/javascript">
$(document).ready(function() {
    
	$("#school_ops").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('loaddepartment4c.php?school_ops=' + $(this).val(), function(data) {
			$("#sch_ops_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});	

$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('loaddepartment4c.php?parent_cat=' + $(this).val(), function(data) {
			$("#q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#parent_toilet").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_of_oilet.php?parent_toilet=' + $(this).val(), function(data) {
			$("#toilet_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});	

$(document).ready(function() {
    
	$("#present_water").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_water=' + $(this).val(), function(data) {
			$("#water_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});	
$(document).ready(function() {
    
	$("#present_fence").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_fence=' + $(this).val(), function(data) {
			$("#fence_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_light").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_light=' + $(this).val(), function(data) {
			$("#light_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_sickbay").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_sickbay=' + $(this).val(), function(data) {
			$("#sickbay_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_material").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_material=' + $(this).val(), function(data) {
			$("#material_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_materiallesson").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_materiallesson=' + $(this).val(), function(data) {
			$("#materiallesson_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_materialrecord").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_materialrecord=' + $(this).val(), function(data) {
			$("#materialrecord_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_students").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_students=' + $(this).val(), function(data) {
			$("#students_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_classcondition").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_classcondition=' + $(this).val(), function(data) {
			$("#classcondition_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_distribution").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_distribution=' + $(this).val(), function(data) {
			$("#distribution_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_books").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_books=' + $(this).val(), function(data) {
			$("#books_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_preseat").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_preseat=' + $(this).val(), function(data) {
			$("#seat_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});


$(document).ready(function() {
    
	$("#present_seat").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_seat=' + $(this).val(), function(data) {
			$("#p_seat_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});
</script>
  <div class="row">
<div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Insert School Data</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">

					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="add_to_register_sch.php" enctype="multipart/form-data">
						<div style="height:10px;"></div>
			
						
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Is the School Operational?</span>
                         <select name="school_ops" class="form-control" id="school_ops" required >
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>
						 
                                </select>
					   </div>


	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
<div id="sch_ops_q"></div>
						


					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present of Classroom:</span>
                         <select name="presentofclassroom" class="form-control" id="parent_cat" required >
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>
						 
                                </select>
					   </div>


	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
<div id="q"></div>				
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
					
						
						<div class="form-group">
                            <span  class="input-group">Number of Male Teachers:</span>
                          <input type="number" class="form-control" name="no_ofmaleteater" placeholder="Enter Number" required>
                        </div>
						
												<div class="form-group">
                            <span class="input-group">Number of Female Teachers:</span>
                          <input type="number" class="form-control" name="no_offemaleteacher" placeholder="Enter Number" required>
                        </div>
						
						<div class="form-group">
                            <span class="input-group">Number of Male Non-technical:</span>
                          <input type="number" class="form-control" name="no_malenontech" placeholder="Enter Number" required>
                        </div>
						
						<div class="form-group">
                            <span class="input-group">Number of Female Non-technical:</span>
                          <input type="number" class="form-control" name="no_femalenontech" placeholder="Enter Number" required>
                        </div>
						

	
	</div>
						
						
						
						
					      <div class="col-lg-3"></div>


				</div>	


				
					  <div class="row">
					  					      <div class="col-lg-3"></div>

    <div class="col-lg-3">
						<div class="form-group">
                            <span class="input-group">Number of Male Students:</span>
                          <input type="number" class="form-control" name="no_malestudent" placeholder="Enter Number" required>
 
								</div>

	
	</div>
    <div class="col-lg-3">						
						
						<div class="form-group">
                            <span  class="input-group">Number of Female Students:</span>
                          <input type="number" class="form-control" name="no_femalestudent" placeholder="Enter Number" required>
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
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>
						 
                                </select>
					   </div>


	
	</div>


	

					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="toilet_q"></div>


				
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present of Water:</span>
                         <select name="presentofwater" class="form-control" id="present_water" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="water_q"></div>
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of fence:</span>
                         <select name="presentoffence" class="form-control" id="present_fence" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="fence_q"></div>
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of Light:</span>
                         <select name="presentoflight" class="form-control" id="present_light" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="light_q"></div>
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of Sick Bay:</span>
                         <select name="presentofslickbay" class="form-control" id="present_sickbay" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="sickbay_q"></div>	
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of Teaching Material:</span>
                         <select name="pre_teaching_material" class="form-control" id="present_material" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="material_q"></div>		
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of Lesson Material:</span>
                         <select name="pre_lession_material" class="form-control" id="present_materiallesson" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="materiallesson_q"></div>
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Present/Status of Record Material:</span>
                         <select name="pre_record_material" class="form-control" id="present_materialrecord" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="materialrecord_q"></div>
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Number of Students By Class:</span>
                         <select name="studentbyclass" class="form-control" id="present_students" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
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
                            <span class="input-group">Class Availability:</span>
                         <select name="class_conditional" class="form-control" id="present_classcondition" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="classcondition_q"></div>
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Books Availability (Pre-Primary Exist):</span>
                         <select name="classdistribution" class="form-control" id="present_distribution" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="distribution_q"></div>													
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Primary School Books Status (Primary Exist):</span>
                         <select name="classdistribution" class="form-control" id="present_books" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  
						</select>						 
						 </div>

	
	</div>
					      <div class="col-lg-3"></div>


				</div>	
						                            <div id="books_q"></div>	
													


						                            <div id="english_q"></div>
						                            <div id="math_q"></div>
						                            <div id="bscience_q"></div>
						                            <div id="sstudies_q"></div>
						                            <div id="computer_q"></div>
						                            <div id="hausa_q"></div>
						                            <div id="irk_q"></div>

					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">
						<div class="form-group">
                            <span class="input-group">Pre-Primary Seat Status:</span>
                         <select name="seatstasus" class="form-control" id="present_preseat" required />
						 <option selected='selected' disabled='disabled' value=''>-- Select --</option>
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
						 <option selected='selected' disabled='disabled' value=''>-- Select Distance --</option>
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
						 <option selected='selected' disabled='disabled' value=''>-- Select Distance --</option>
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
						 <option selected='selected' disabled='disabled' value=''>-- Select Distance --</option>
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
						 <option selected='selected' disabled='disabled' value=''>-- Select Distance --</option>
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

<div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>													
												  
<div class='form-group input'>
                            <span  class='input-group'>Monthly Attendance of Students (Percentage):</span>
							 
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
						 <select name='monthly' class='form-control' required >
						 <option selected='selected' disabled='disabled' value=''>-- select Month --</option>
						 <option value='January' >January</option>						
						 <option  value='February'>February</option>
						 <option value='March' >March</option>						
						 <option  value='April'>April</option>
						 <option  value='May'>May</option>	
						 <option  value='June'>June</option>						 
						 <option value='July' >July</option>						
						 <option  value='August'>August</option>
						 <option  value='September'>September</option>
						 <option  value='October'>October</option>							 
						 <option  value='November'>November</option>	
						 <option value='December' >December</option>						
						 
                                </select>
                       </div>
						  </div>						  
						  </div>
						  
							 <div class='row'>							 
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Pre 1:</span>
                          <input type='number' class='form-control' name='monthly_pre1' required>
                       </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Pre 2:</span>
                          <input type='number' class='form-control' name='monthly_pre2' required>
                       </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Pre 3:</span>
                          <input type='number' class='form-control' name='monthly_pre3' required>
                      </div>
						  </div>						  
						  </div>							
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 1:</span>
                          <input type='number' class='form-control' name='monthly_class1' required>
                       </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 2:</span>
                          <input type='number' class='form-control' name='monthly_class2' required>
                       </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 3:</span>
                          <input type='number' class='form-control' name='monthly_class3' required>
                      </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 4:</span>
                          <input type='number' class='form-control' name='monthly_class4' required>
							</div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 5:</span>
                          <input type='number' class='form-control' name='monthly_class5' required>
                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 6:</span>
                          <input type='number' class='form-control' name='monthly_class6' required>
                        </div>
						  </div>						  
						  </div>                     
								</div>
								</div>
																					  <div class='col-lg-3'></div> 													
</div>
									
												<center>
												<div style="height:10px;"></div>
						<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Create</button>
						<button type="reset" class="btn btn-primary">Cancel</button>

						<a href="../logout.php" class="btn btn-danger">Login</a>
						<input type="hidden" name="this_user_id" value="<?php echo $this_user_id ?>">

						</form>
						</center>
				</div>

        </div>
            </div>
        </div>