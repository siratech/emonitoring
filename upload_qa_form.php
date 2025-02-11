 <?php	include('../libr/config.php'); 
		include('session.php');
		$geted_sch_Level=Mansir::get_sch_Level($this_user_id);

?>
								<?php include('header.php'); ?>	
								
								<?php include('mobile_menu_area.php'); ?>
    
								<?php include('modal_Main_Menu_area_start.php'); 
if($geted_sch_Level=='CHC' || $geted_sch_Level=='PHC' ){								
?>                                          
										   <div class="modal-body">
                                                <h2>Upload M & E Form PHC/CHC</h2>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
	   <form method='post' action='upload_qa_primary.php' enctype='multipart/form-data'>        		
						

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              
                     <label>Please Select File</label>  
                     <input type="file"  class="form-control" name="excelfile" id='file' /> 
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
                                      
<?php }
if($geted_sch_Level=='PRIVATE' ){	
?>  
										   <div class="modal-body">
                                                <h2>Upload  M & E Form Private</h2>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
	   <form method='post' action='upload_qa.php' enctype='multipart/form-data'>        		
						

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              
                     <label>Please Select File</label>  
                     <input type="file"  class="form-control" name="excelfile" id='file' /> 
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
<?php }
if($geted_sch_Level=='GENERAL'){	
?> 
										   <div class="modal-body">
                                                <h2>Upload M & E Form General</h2>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
	   <form method='post' action='upload_qa_genaral.php' enctype='multipart/form-data'>        		
						

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              
                     <label>Please Select File</label>  
                     <input type="file"  class="form-control" name="excelfile" id='file' /> 
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
<?php }	
?> 
                                     </div>
								<?php include('footer.php'); ?>	
										