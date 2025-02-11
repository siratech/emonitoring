 		<script type="text/javascript">
$(document).ready(function() {
    
	$("#cond").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_of_oilet.php?condition=' + $(this).val(), function(data) {
			$("#loadcond").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});	

$(document).ready(function() {
    
	$("#cond1").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_of_oilet.php?condition=' + $(this).val(), function(data) {
			$("#loadcond1").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});


</script> 
<?php 

require_once '../database/conn.php';

			if(isset($_GET['not_unctioning'])){
$parent_cat = $_GET['not_unctioning'];

	if($parent_cat == "Other"){
		
		//echo "Yes";
		echo "<div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Reason:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
							<input type='text' class='form-control' name='yeason' required>
						  </div>						  
						  </div>
               
								</div>

	
								</div>
																					  <div class='col-lg-3'></div> 													
</div>";
	
		}	if($parent_cat == "No"){
			
			echo "";
		}
			}
			
			if(isset($_GET['condition'])){
$parent_cat = $_GET['condition'];

	if($parent_cat == "Yes"){
		
		//echo "Yes";
						 //echo "<option value='Good' >Yes</option>";					

$query = mysqli_query($conn,"SELECT DISTINCT(separate_toilet) FROM separate_toilet");
	echo "<option selected='selected' disabled='disabled' value=''>Separation Type</option>";

while($row = mysqli_fetch_array($query)) {
	
  echo "<option value='$row[separate_toilet]'>$row[separate_toilet]</option>";
	
}	
		}	if($parent_cat == "No"){
			
						 echo "<option value='Good' >No</option>";					
		}
			}			
?>
