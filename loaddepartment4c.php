<script type="text/javascript">
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

</script>

<?php 

require_once '../database/conn.php';

 		if(isset($_GET['parent_cat'])){
$parent_cat = $_GET['parent_cat'];
			echo "<div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Facility Name:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						 <select name='facility_name' id='parent_toilet' class='form-control' required >";
						 
$query = mysqli_query($conn,"SELECT * FROM facilitys WHERE facility_lga = '$parent_cat'");
	echo "<option selected='selected' disabled='disabled' value=''>Select Facility Name</option>";

while($row = mysqli_fetch_array($query)) {
	
	echo "<option value='$row[facility_name]'>$row[facility_name]</option>";
	
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
