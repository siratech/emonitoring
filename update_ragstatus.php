<?php	include('../libr/config.php'); 
		include('session.php');
		$geted_sch_Level=Mansir::get_sch_Level($this_user_id);

	
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
                    <center><h4 class="modal-title" id="myModalLabel">RAG Status</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="ragstatus.php" enctype="multipart/form-data">

					<div style="height:10px;"></div>
						<div style="height:10px;"></div>
<div class='form-group input'>												<center>

                            <span  class='input-group'>Update Your Current RAG Status:</span>
							 
							 <div class='row'>
<div class='col-lg-3'></div> 													
																					  <div class='col-lg-6'>
						  <div class='form-group input-group'>
						 <select name='tag' class='form-control' required >
						 <option selected='selected' disabled='disabled' value=''>-- select RAG Status --</option>
						 <option value='RED' >RED</option>						
						 <option  value='AMBER'>AMBER</option>
						 <option value='GREEN' >GREEN</option>						
						
						 
                                </select>
                       </div>
					   						<input type="hidden" name="this_user_id" value="<?php echo $this_user_id ?>">

						<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					   
						</form>
						</center>
						  </div>						  
						  
					


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
	