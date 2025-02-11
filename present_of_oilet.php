<script type="text/javascript">
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

</script>
<?php 

require_once '../database/conn.php';

		if(isset($_GET['parent_toilet'])){
$parent_cat = $_GET['parent_toilet'];
			echo "<div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Type of Facility:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						 <select name='facility_name' id='present_fence' class='form-control' required >";
						 
$query = mysqli_query($conn,"SELECT * FROM facilitys WHERE facility_name = '$parent_cat'");
	echo "<option selected='selected' disabled='disabled' value=''>Select Type of Facility</option>";

while($row = mysqli_fetch_array($query)) {
	
	echo "<option value='$row[facility_type]'>$row[facility_type]</option>";
	
}	
                              echo   "								  
							  </select>
						  </div>						  
						  </div>
               
								</div>

	
								</div>
																					  <div class='col-lg-3'></div> 													
</div>";
		}		
?>
