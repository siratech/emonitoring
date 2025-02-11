<!-- Delete Product -->
    <div class="modal fade" id="delproduct_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Staff</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from sch_staff where id='$pid'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Unique Identification Number: <strong><?php echo $b['id']; ?></strong></center></h5>
					<form role="form" method="POST" action="deleteencounter.php<?php echo '?id='.$pid; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Product -->
    <div class="modal fade" id="editprod_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Staff</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from sch_staff where id='$pid'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_encounter.php<?php echo '?id='.$pid; ?>" enctype="multipart/form-data">
						<div style="height:10px;"></div>
						
						                        <div class="row">
						    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Full Name</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
									
                                    <div class="nk-int-st">

                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" name="fullname"  value="<?php echo $b['fullname']; ?>" 
										required />
										
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="nk-int-mk">
                                    <h2>D.O.B</h2>
                                </div>
                                    <div class="nk-int-st">

                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" name="staff_d_o_b"  value="<?php echo $b['staff_d_o_b']; ?>" 
										required />
                                </div>
                            </div>	
							</div>
							<div class="row">							
							
                     
						
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>LGA</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
									
                                    <div class="nk-int-st">

                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" name="staff_lga"  value="<?php echo $b['staff_lga']; ?>" 
										required />
										
                                    </div>
                                </div>
                            </div>					

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Qual</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
									
                                    <div class="nk-int-st">

                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" name="qual"  value="<?php echo $b['qual']; ?>" 
										required />
										
                                    </div>
                                </div>
                            </div>								
							   </div>							
							<div class="row">							
							
                     
						
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Rank</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
									
                                    <div class="nk-int-st">

                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" name="staff_rank"  value="<?php echo $b['staff_rank']; ?>" 
										required />
										
                                    </div>
                                </div>
                            </div>					
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Remark</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
									
                                    <div class="nk-int-st">

                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" name="remark"  value="<?php echo $b['remark']; ?>" 
										required />
										
                                    </div>
                                </div>
                            </div>	
								
							   </div>
                       
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>GL</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
									
                                    <div class="nk-int-st">

                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" name="staff_gl"  
										 value="<?php echo $b['staff_gl']; ?>" required />
										
                                    </div>
                                </div>
                            </div>					

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Ver. No.</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
									
                                    <div class="nk-int-st">

                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" name="staff_val_no"  value="<?php echo $b['staff_val_no']; ?>" 
										required />
										
                                    </div>
                                </div>
                            </div>							
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>D.O.FIRST. APPT</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
									
                                    <div class="nk-int-st">

                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" name="first_date_of_appt"  
										 value="<?php echo $b['first_date_of_appt']; ?>" required />
										
                                    </div>
                                </div>
                            </div>					

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>D.O.PRE. APPT.</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
									
                                    <div class="nk-int-st">

                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" name="pre_date_of_appt"  value="<?php echo $b['pre_date_of_appt']; ?>" 
										required />
										
                                    </div>
                                </div>
                            </div>	
				</div>
				</div>
				
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					</form>
                </div>
        </div>
    </div>
	 </div>
<!-- /.modal -->




