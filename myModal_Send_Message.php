                                <div class="modal fade" id="myModal_Send_Message" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Send Message</h2>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
<form method="POST" action="add_message.php">						
						

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Message Type</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-tax"></i>
                                    </div>
									
                                    <div class="nk-int-st">
                                    <select class="form-control"  name="msg_type" id="type">
									<?php
										$pq=mysqli_query($conn,"SELECT DISTINCT(`message_type`) FROM `message_type`");
										echo "<option value=''> --Select Message Type-- </option>";
										while($pqrow=mysqli_fetch_array($pq)){
										?>
											  <option Value="<?php echo $pqrow['message_type']; ?>"><?php echo $pqrow['message_type']; ?></option>						

										<?php
										}
									?>
                                </select>								
										
                                    </div>
                                </div>
                            </div>	                       
							</div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Message Desciption</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-tax"></i>
                                    </div>
									
                                    <div class="nk-int-st">

                                        <input type="text" class="form-control" data-mask="999-99-999-9999-9" name="msg_descp" placeholder="Item Desciption" 
										required />
										
                                    </div>
                                </div>
                            </div>	                       
							</div>	
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Send To School</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-tax"></i>
                                    </div>
									
                                    <div class="nk-int-st">

                                    <select class="form-control"  name="facility_name" id="type">
									<?php
										$pq=mysqli_query($conn,"SELECT DISTINCT(`schname`) FROM `school_infor`");
										echo "<option> --select School-- </option>";
										while($pqrow=mysqli_fetch_array($pq)){
										?>
											  <option Value="<?php echo $pqrow['schname']; ?>"><?php echo $pqrow['schname']; ?></option>						

										<?php
										}
									?>
                                </select>
										
                                    </div>
                                </div>
                            </div>	                       
							</div>							
                        <div class="row">
                        
					
							</div>						
                           <input type="hidden" name="the_user_id" value="<?php echo $this_user_id; ?>">
							<input type="hidden" name="the_year" value="<?php echo $this_year; ?>">
							<input type="hidden" name="the_month" value="<?php echo $this_month; ?>">						
							<input type="hidden" name="facilityid" value="<?php //echo Mansir::get_candidate_login_id($this_user_id); ?>">
					
                    </div>
                </div>
            </div>
										

                                            </div>
                                            <div class="modal-footer">
                                             <button type="submit" class="btn btn-default" name="submit">Add</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>							</form>	