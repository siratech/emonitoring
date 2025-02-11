<!-- Delete Product -->
    <div class="modal fade" id="delproduct_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Student</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from studentenrollmenttbl where id='$pid'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Are you sure Delete This Student?: <strong><?php  echo $b['first_name']." ".$b['sur_name']." ".$b['middle_name']; ?></strong></center></h5>
					<form role="form" method="POST" action="delete_student.php<?php echo '?id='.$pid; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Product -->
    <div class="modal fade" id="editprod_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Student</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from studentenrollmenttbl where id='$pid'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_encounter.php<?php echo '?id='.$pid; ?>" enctype="multipart/form-data">
						<div style="height:10px;"></div>
						
				
				
					  <div class="row">
					      <div class="col-lg-1"></div>
    <div class="col-lg-5">
						<div class="form-group">
                          <span  class='input-group'>School Type:</span>
						  <select class='form-control' name='school_type' required >
						 <option value="">-- Select School Type --</option>						
						 <option value="Primary">Primary</option>						
						 <option  value="Secondary">Secondary</option>						
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
                          <input type='date' class='form-control' name='date_dob' required>
                        
	
	</div>				</div>	
    <div class="col-lg-5">						
						
						<div class="form-group">
                          <span  class='input-group'>Age:</span>
                          <input type='number' class='form-control' name='age' required>
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
                          <span  class='input-group'>Studenet Status:</span>
 						  <select class='form-control' name='edu_status' required >
						 <option value="">--Select Status --</option>						
						 <option value="In School">In School</option>						
						 <option  value="Not School">Not School</option>						
						  </select> 						  
                        </div>
						</div>
					      <div class="col-lg-1"></div>
				</div>							  

				</div>
				</div>
				
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					</form>
                </div>
        </div>
    </div>
	 </div>
<!-- /.modal -->




