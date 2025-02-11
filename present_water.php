 <?php 

require_once '../database/conn.php';

			if(isset($_GET['present_water'])){
$parent_cat = $_GET['present_water'];

	if($parent_cat != "Yes"){
		
		//echo "Yes";
		echo "<div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Tick Visit:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
						  <input type='radio' class='form-control' id='First Visit' name='tickvisit' value='First Visit'>
                          <span  class='input-group-addon'> First Visit:</span>
						  </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
						  <input type='radio' class='form-control' id='Second Visit' name='tickvisit' value='Second Visit'>
                          <span  class='input-group-addon'>Second Visit:</span>
						  </div>
						  </div>						  
						  </div>					 						                        
								</div>	


	
	</div>
													 <div class='col-lg-3'></div>
</div>	";
	
		}	if($parent_cat == "No"){
			
			echo "";
		}
			}
		if(isset($_GET['present_fence'])){
$parent_cat = $_GET['present_fence'];

	if($parent_cat == "GENERAL"){
		
		//echo "Yes";
		echo "<div class='row'>
													 <div class='col-lg-3'></div>
<div class='col-lg-6'>
						<div class='form-group input'>
                            <span  class='input-group'>Status of Fence:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Fair:</span>
                         <select name='fair' class='form-control' id='' required >
						 <option selected='selected' disabled='disabled' value=''>-- Select Availability--</option>
						 <option value='Yes' >Yes</option>						
						 <option  value='No'>No</option>  						 
						</select>                        </div>
						  </div>						  
						  </div>

							 						                        
								</div>	


	
	</div>
													 <div class='col-lg-3'></div>
</div>";
	
		}	if($parent_cat == "PRIVATE"){
			
			echo "PRIVATE";
		}
			if($parent_cat == "PHC"){
				
				echo "<a href='export_q_and_a.php' download>
  <img src='/images/myw3schoolsimage.jpg' alt='M & E Form'>
</a>";
		}		
			if($parent_cat == "CHC"){
			
			echo "CHC";
		}		
			}	
?>
