 		<script type="text/javascript">
$(document).ready(function() {
    
	$("#condition").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_of_oilet.php?condition=' + $(this).val(), function(data) {
			$("#loadcondition").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});	

$(document).ready(function() {
    
	$("#condition1").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_of_oilet.php?condition=' + $(this).val(), function(data) {
			$("#loadcondition1").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});


</script> 
<?php 

require_once '../database/conn.php';

			if(isset($_GET['english'])){
$parent_cat = $_GET['english'];

	if($parent_cat == "Yes"){
		
		//echo "Yes";
		echo "												 <div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>													
												  
<div class='form-group input'>
                            <span  class='input-group'>English for Primary:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 1:</span>
                          <input type='number' class='form-control' name='class_1_eng' required>
                       </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 2:</span>
                          <input type='number' class='form-control' name='class_2_eng' required>
                       </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 3:</span>
                          <input type='number' class='form-control' name='class_3_eng' required>
                      </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 4:</span>
                          <input type='number' class='form-control' name='class_4_eng' required>
							</div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 5:</span>
                          <input type='number' class='form-control' name='class_5_eng' required>
                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 6:</span>
                          <input type='number' class='form-control' name='class_6_eng' required>
                        </div>
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
		
	if(isset($_GET['math'])){
$parent_cat = $_GET['math'];

	if($parent_cat == "Yes"){
		
		//echo "Yes";
		echo "												 <div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>													
												  
<div class='form-group input'>
                            <span  class='input-group'>Math for Primary:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 1:</span>
                          <input type='number' class='form-control' name='class_1_math' required>
                       </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 2:</span>
                          <input type='number' class='form-control' name='class_2_math' required>
                       </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 3:</span>
                          <input type='number' class='form-control' name='class_3_math' required>
                      </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 4:</span>
                          <input type='number' class='form-control' name='class_4_math' required>
							</div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 5:</span>
                          <input type='number' class='form-control' name='class_5_math' required>
                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 6:</span>
                          <input type='number' class='form-control' name='class_6_math' required>
                        </div>
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
			
	if(isset($_GET['bscience'])){
$parent_cat = $_GET['bscience'];

	if($parent_cat == "Yes"){
		
		//echo "Yes";
		echo "												 <div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>													
												  
<div class='form-group input'>
                            <span  class='input-group'>Bisic Science for Primary:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 1:</span>
                          <input type='number' class='form-control' name='class_1_basic' required>
                       </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 2:</span>
                          <input type='number' class='form-control' name='class_2_basic' required>
                       </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 3:</span>
                          <input type='number' class='form-control' name='class_3_basic' required>
                      </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 4:</span>
                          <input type='number' class='form-control' name='class_4_basic' required>
							</div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 5:</span>
                          <input type='number' class='form-control' name='class_5_basic' required>
                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 6:</span>
                          <input type='number' class='form-control' name='class_6_basic' required>
                        </div>
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

		if(isset($_GET['sstudies'])){
$parent_cat = $_GET['sstudies'];

	if($parent_cat == "Yes"){
		
		//echo "Yes";
		echo "												 <div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>													
												  
<div class='form-group input'>
                            <span  class='input-group'>Social Studies for Primary:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 1:</span>
                          <input type='number' class='form-control' name='class_1_social' required>
                       </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 2:</span>
                          <input type='number' class='form-control' name='class_2_social' required>
                       </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 3:</span>
                          <input type='number' class='form-control' name='class_3_social' required>
                      </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 4:</span>
                          <input type='number' class='form-control' name='class_4_social' required>
							</div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 5:</span>
                          <input type='number' class='form-control' name='class_5_social' required>
                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 6:</span>
                          <input type='number' class='form-control' name='class_6_social' required>
                        </div>
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

		if(isset($_GET['computer'])){
$parent_cat = $_GET['computer'];

	if($parent_cat == "Yes"){
		
		//echo "Yes";
		echo "												 <div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>													
												  
<div class='form-group input'>
                            <span  class='input-group'>Computer for Primary:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 1:</span>
                          <input type='number' class='form-control' name='class_1_computer' required>
                       </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 2:</span>
                          <input type='number' class='form-control' name='class_2_computer' required>
                       </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 3:</span>
                          <input type='number' class='form-control' name='class_3_computer' required>
                      </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 4:</span>
                          <input type='number' class='form-control' name='class_4_computer' required>
							</div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 5:</span>
                          <input type='number' class='form-control' name='class_5_computer' required>
                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 6:</span>
                          <input type='number' class='form-control' name='class_6_computer' required>
                        </div>
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

		if(isset($_GET['hausa'])){
$parent_cat = $_GET['hausa'];

	if($parent_cat == "Yes"){
		
		//echo "Yes";
		echo "												 <div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>													
												  
<div class='form-group input'>
                            <span  class='input-group'>Hausa for Primary:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 1:</span>
                          <input type='number' class='form-control' name='class_1_hausa' required>
                       </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 2:</span>
                          <input type='number' class='form-control' name='class_2_hausa' required>
                       </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 3:</span>
                          <input type='number' class='form-control' name='class_3_hausa' required>
                      </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 4:</span>
                          <input type='number' class='form-control' name='class_4_hausa' required>
							</div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 5:</span>
                          <input type='number' class='form-control' name='class_5_hausa' required>
                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 6:</span>
                          <input type='number' class='form-control' name='class_6_hausa' required>
                        </div>
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

		if(isset($_GET['irk'])){
$parent_cat = $_GET['irk'];

	if($parent_cat == "Yes"){
		
		//echo "Yes";
		echo "												 <div class='row'>
													  <div class='col-lg-3'></div> 
														  <div class='col-lg-6'>													
												  
<div class='form-group input'>
                            <span  class='input-group'>IRK for Primary:</span>
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 1:</span>
                          <input type='number' class='form-control' name='class_1_irk' required>
                       </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 2:</span>
                          <input type='number' class='form-control' name='class_2_irk' required>
                       </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 3:</span>
                          <input type='number' class='form-control' name='class_3_irk' required>
                      </div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 4:</span>
                          <input type='number' class='form-control' name='class_4_irk' required>
							</div>
						  </div>						  
						  </div>

							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 5:</span>
                          <input type='number' class='form-control' name='class_5_irk' required>
                        </div>
						  </div>						  
						  </div>
						  
						  
							 <div class='row'>
						  <div class='col-lg-12'>
						  <div class='form-group input-group'>
                          <span  class='input-group-addon'>Class 6:</span>
                          <input type='number' class='form-control' name='class_6_irk' required>
                        </div>
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
?>
