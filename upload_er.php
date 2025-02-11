 <?php	include('../libr/config.php'); 
		include('session.php');

?>
								<?php include('header.php'); ?>	
								
								<?php include('mobile_menu_area.php'); ?>
    
								<?php include('modal_Main_Menu_area_start.php'); ?>                                          
										   <div class="modal-body">
                                                <h2>Upload Staff</h2>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
	   <form method='post' action='upload_Staff.php' enctype='multipart/form-data'>        		
						

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              
                     <label>Please Select File</label>  
                     <input type="file"  class="form-control" name="csvFile" id='file' /> 
                     <br />  
 
                                </div>
                            </div>	                       
					                        <div class="row">
                        
					                   <center>
				          <button class='btn btn-success' name='save' id='btns3' >&nbsp;       		 
       		 <span class='glyphicon glyphicon-import' style='color: #F0F0F0'> </span> &nbsp;Upload </button></center>
 
       </form>			 
							</div>
                    </div>
                </div>
            </div>
										

                                            </div>
                                      
                                        </div>
								<?php include('footer.php'); ?>	
										