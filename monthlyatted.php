<?php	include('../libr/config.php'); 
		include('session.php');
		$geted_sch_Level=Mansir::get_sch_Level($this_user_id);

	$siq=mysqli_query($conn,"select * from `before_pictures` where sch_access_id='$this_user_id'");
	$sirow=mysqli_fetch_array($siq);	
	$picture_after1=$sirow['lst'];
	$picture_after2=$sirow['snd'];
	$picture_after3=$sirow['trd'];
	$picture_after4=$sirow['frd'];
	
?>
								<?php include('header.php'); ?>	
								
								<?php include('mobile_menu_area.php'); ?>
    
								<?php include('modal_Main_Menu_area_start.php'); ?>	

    

    <!-- End Status area-->
    <div class="sale-statistic-area">
        <div class="container">
  <div class="row">
<div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Monthy Attendance</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="add_monthy_atted.php" enctype="multipart/form-data">

					<div style="height:10px;"></div>
						<div style="height:10px;"></div>
<div class='form-group input'>
                            <span  class='input-group'>Monthly Attendance of Students:</span>
							 
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
					
						
					  <div class="row">
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
						<br>
						</div>


</div>		
        </div>
    </div>
	</div>
	</div>
	</div>

	

								<?php include('footer.php'); ?>	
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

$(document).ready(function(){
 $(document).on('change', '#file1', function(){
  var name = document.getElementById("file1").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file1").files[0]);
  var f = document.getElementById("file1").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file1", document.getElementById('file1').files[0]);
   $.ajax({
    url:"upload1.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image1').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image1').html(data);
    }
   });
  }
 });
});

$(document).ready(function(){
 $(document).on('change', '#file2', function(){
  var name = document.getElementById("file2").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file2").files[0]);
  var f = document.getElementById("file2").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file2", document.getElementById('file2').files[0]);
   $.ajax({
    url:"upload2.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image2').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image2').html(data);
    }
   });
  }
 });
});

$(document).ready(function(){
 $(document).on('change', '#file3', function(){
  var name = document.getElementById("file3").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file3").files[0]);
  var f = document.getElementById("file3").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file3", document.getElementById('file3').files[0]);
   $.ajax({
    url:"upload3.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image3').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image3').html(data);
    }
   });
  }
 });
});
</script>																					
	