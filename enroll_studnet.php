<?php	include('../libr/config.php'); 
		include('session.php');


			
?>
								<?php include('header.php'); ?>	
								
								<?php include('mobile_menu_area.php'); ?>
    
								<?php include('modal_Main_Menu_area_start.php');

	$sch_name=Mansir::get_candidate_name($this_user_id);
	$lganame=Mansir::get_lagid($this_user_id);
 ?>	

    

    <!-- End Status area-->
    <div class="sale-statistic-area">
        <div class="container">
  <div class="row">
<div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Student Enrollment Form </h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="add_to_register_student.php" enctype="multipart/form-data">
				
					  <div class="row">
					      <div class="col-lg-1"></div>
    <div class="col-lg-5">
						<div class="form-group">
                          <span  class='input-group'>School Type:</span>
						  <select class='form-control' name='school_type' required >
						 <option value="">-- Select School Type --</option>						
						 <option value="Pre-Primary">Pre-Primary</option>						
						 <option  value="Primary">Primary </option>	
						 <option value="Secondary">Secondary</option>						
						 <option  value="Others">Others</option>						
						  </select>
	
	</div></div>
    <div class="col-lg-5">						
						
						<div class="form-group">
                          <span  class='input-group'>Registration Number:</span>
                          <input type='text' class='form-control' name='reg_number'  placeholder="Registration Number"  required>
                       </div>
						</div>
					      <div class="col-lg-1"></div>
				</div>					
	

					  <div class="row">
					      <div class="col-lg-1"></div>
    <div class="col-lg-5">
						<div class="form-group">
                          <span  class='input-group'>First Name:</span>
                          <input type='text' class='form-control' name='first_name'   placeholder="First Name" required>                      </div>

	
	</div>
    <div class="col-lg-5">						
						
						<div class="form-group">
                          <span  class='input-group'>Surname:</span>
                          <input type='text' class='form-control' name='sur_name'   placeholder="Surname" required> </div>
						</div>
					      <div class="col-lg-1"></div>
				</div>	


					  <div class="row">
					      <div class="col-lg-1"></div>
    <div class="col-lg-5">
						<div class="form-group">
                          <span  class='input-group'>Middle Name:</span>
                          <input type='text' class='form-control' name='middle_name'   placeholder="Middle Name" required>
                      
	
	</div>
					</div>	
    <div class="col-lg-5">						
						
						<div class="form-group">
                          <span  class='input-group'>Class:</span>
						  <select class='form-control' name='class' required >
						 <option value="">-- Select Class --</option>						
						 <option value="Pre-Primary 1">Pre-Primary 1</option>						
						 <option  value="Pre-Primary 2">Pre-Primary 2</option>
						 <option value="Pre-Primary 3">Pre-Primary 3</option>						
						 <option  value="Primary 1">Primary 1</option>
						 <option value="Primary 2">Primary 2</option>						
						 <option  value="Primary 3">Primary 3</option>	
						 <option value="Primary 4">Primary 4</option>						
						 <option  value="Primary 5">Primary 5</option>
						 <option value="Primary 6">Primary 6</option>						
						 <option  value="JSS 1">JSS 1</option>
						 <option value="JSS 2">JSS 2</option>						
						 <option  value="JSS 3">JSS 3</option>
						 <option  value="SSS 1">SSS 1</option>
						 <option value="SSS 2">SSS 2</option>						
						 <option  value="SSS 3">SSS 3</option>						 
						  </select>						  
                        </div>
						</div>
					      <div class="col-lg-1"></div>
				</div>							  
			


					  <div class="row">
					      <div class="col-lg-1"></div>
    <div class="col-lg-5">
						<div class="form-group">
                          <span  class='input-group'>Gender:</span>
						  <select class='form-control' name='gender' required >
						 <option value="">-- Select Gender --</option>						
						 <option value="Male">Male</option>						
						 <option  value="Female">Female</option>						
						  </select>
                      
	
	</div>
					</div>	
    <div class="col-lg-5">						
						
						<div class="form-group">
                          <span  class='input-group'>Address:</span>
                          <input type='text' class='form-control' name='addr'    placeholder="Address" required>
							</div>
						</div>
					      <div class="col-lg-1"></div>
				</div>	

						  
					  <div class="row">
					      <div class="col-lg-1"></div>
    <div class="col-lg-5">
						<div class="form-group">
                          <span  class='input-group'>Parent/Guardian Phone No.:</span>
                          <input type='text' class='form-control' name='p_g_pho_no'placeholder="Parent or Guardian Phone Number"  required>
                        
	
	</div>				</div>	
    <div class="col-lg-5">						
						
						<div class="form-group">
                          <span  class='input-group'>Home Address:</span>
                          <input type='text' class='form-control' name='home_addr' placeholder="Home Address" required>
                       </div>
						</div>
					      <div class="col-lg-1"></div>
				</div>							  


					  <div class="row">
					      <div class="col-lg-1"></div>
    <div class="col-lg-5">
						<div class="form-group">
                          <span  class='input-group'>Date of Brith:</span>
                          <input type='date' class='form-control' name='date_dob'  onchange = "ageCalculator()" id = 'DOB' required>
                        
	
	</div>				</div>	
    <div class="col-lg-5">						
						
						<div class="form-group">
                          <span  class='input-group'>Age:</span>
                          <input type='text' class='form-control' name='age' id = 'result' disabled>
                       </div>
						</div>
					      <div class="col-lg-1"></div>
				</div>	

						  
					  <div class="row">
					      <div class="col-lg-1"></div>
    <div class="col-lg-5">
						<div class="form-group">
                          <span  class='input-group'>Disability:</span>
 						  <select class='form-control' name='disability' required >
						 <option value="">-- Disability --</option>						
						 <option value="No Disability">No Disability</option>						
						 <option  value="With Disability">With Disability</option>						
						  </select>                       
	
	</div>				</div>	
    <div class="col-lg-5">						
						
						<div class="form-group">
                          <span  class='input-group'>Student School History:</span>
 						  <select class='form-control' name='edu_status' required >
						 <option value="">--Select School History --</option>						
						 <option value="Continues Student">Continues Student</option>						
						 <option  value="New Intake">New Intake</option>
						 <option value="Returning">Returning</option>						
						 <option  value="Transfer">Transfer</option>						
						  </select> 						  
                        </div>
						</div>
					      <div class="col-lg-1"></div>
				</div>							  


					  <div class="row">
    <div class="col-lg-1">
				</div>	
    <div class="col-lg-5">						
						
						<div class="form-group">
                            <span class="input-group">Student Picture:</span>
   						  <input type="hidden" name="this_user_id" value="<?php echo $this_user_id ?>">
    	   <input type="file" name="image" id="file" />
                
	
	</div>
						</div>
					      <div class="col-lg-5">
						  <span id="uploaded_image"></span>
						 <input type="hidden" name="alt_image" id="uploaded_image">

						  </div>
				</div>	

 
					  <div class="row">
    <div class="col-lg-10">
				</div>	
    <div class="col-lg-1">						
							<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Create</button>
					
						</div>
					      <div class="col-lg-1">
						  
						  </div>
				</div>	
							  
								</div>
								</div>
																					  <div class='col-lg-3'></div> 													
</div>
									
												<center>
												<div style="height:10px;"></div>
						<button type="reset" class="btn btn-primary">Cancel</button>

						<a href="../logout.php" class="btn btn-danger">Login</a>
						<input type="hidden" name="this_user_id" value="<?php echo $this_user_id ?>">
						
						<input type="hidden" name="school_name" value="<?php echo $sch_name ?>">
						<input type="hidden" name="local_govrn" value="<?php echo $lganame ?>">

						</form>
						</center>
						<br>
						</div>


</div>		
        </div>
    </div>
	</div>

								<?php 
								

								include('footer.php'); 
								
								
								?>	
<script>  
function ageCalculator() {  
    var userinput = document.getElementById("DOB").value;  
    var dob = new Date(userinput);  
    if(userinput==null || userinput=='') {  
      document.getElementById("message").innerHTML = "**Choose a date please!";    
      return false;   
    } else {  
      
    //calculate month difference from current date in time  
    var month_diff = Date.now() - dob.getTime();  
      
    //convert the calculated difference in date format  
    var age_dt = new Date(month_diff);   
      
    //extract year from date      
    var year = age_dt.getUTCFullYear();  
      
    //now calculate the age of the user  
    var age = Math.abs(year - 1970);  
      
    //display the calculated age  
	
    return document.getElementById("result").value =    
              age + " years. ";  
    }  
}  
</script> 								
<script>
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"upload.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }
 });
});
</script>			