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
                    <center><h4 class="modal-title" id="myModalLabel">Upload Pictures Before</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">

					<div style="height:10px;"></div>
						<div style="height:10px;"></div>
			
						
					  <div class="row">
					  					      <div class="col-lg-3">
											  						<div class="form-group">
                            <span class="input-group">Picture 1</span>
														<?php if (empty($picture_after1)){ ?>

                          <input type="file" class="form-control" name="file" id="file" required>
						  	   <span id="uploaded_image"></span>

							<?php }else {?>
							<img src="../Upload/<?php echo $picture_after1; ?>" height="150" width="225" class="img-thumbnail" />
							<?php  }?>							   
					   </div>
											  </div>

					      <div class="col-lg-3">
						  						<div class="form-group">
                            <span class="input-group">Picture 2</span>
														<?php if (empty($picture_after2)){ ?>

                          <input type="file" class="form-control" name="file1" id="file1" required>
						  	   <span id="uploaded_image1"></span>

							<?php }else {?>
							<img src="../Upload/<?php echo $picture_after2; ?>" height="150" width="225" class="img-thumbnail" />
							<?php  }?>							   
					   </div>
						  </div>
						<div class="col-lg-3">
			   
					   						<div class="form-group">
                            <span class="input-group">Picture 3</span>
														<?php if (empty($picture_after3)){ ?>

                          <input type="file" class="form-control" name="file2" id="file2" required>
						  	   <span id="uploaded_image2"></span>

							<?php }else {?>
							<img src="../Upload/<?php echo $picture_after3; ?>" height="150" width="225" class="img-thumbnail" />
							<?php  }?>
					   </div>

	</div>
					      <div class="col-lg-3">
						   						<div class="form-group">
                            <span class="input-group">Picture 4</span>
														<?php if (empty($picture_after4)){ ?>

                          <input type="file" class="form-control" name="file3" id="file3" required>
						  	   <span id="uploaded_image3"></span>

							<?php }else {?>
							<img src="../Upload/<?php echo $picture_after4; ?>" height="150" width="225" class="img-thumbnail" />
							<?php  }?>
						  </div>					  
						  </div>


				</div>	
				<br><br><br><br>
						<div class="form-group">
					<center><a href="index.php" class="btn btn-success"><i class="fa fa-check-square-o"></i> Ok</a></center>

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
	