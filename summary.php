<!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<!-- RED-->
                  <div class="card" style="background-color: #8c0a0a;">
					  <div class="card2">
				<?php					
				if ($number_of_Yes<=29){
					?>						  
					  <div id="myDIV">
					  
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> RED </font></h1>
					  </div>
					  				<?php if($number_of_Yes<=29){
	mysqli_query($conn,"update rag_statueses set rag_status='RED', number_of_Yes='$number_of_Yes' where this_user_id='$this_user_id'");										

					?>	
					  </div>
					  				<?php	
				}?>	
					  </div>					  
					</div>									
</div>				

						<!--AMBER -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">				
                 <div class="card" style="background-color: #f7eb0a;">
					  <div class="card2">
					  <?php
				if($number_of_Yes>=30 & $number_of_Yes<=39){
	mysqli_query($conn,"update rag_statueses set rag_status='AMBER', number_of_Yes='$number_of_Yes' where this_user_id='$this_user_id'");										

					?>						  
					  <div id="myDIV">
					  
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> AMBER </font></h1>
					  </div>
					  				<?php if($number_of_Yes>=30 & $number_of_Yes<=39){
					?>	
					  </div>
					  				<?php	
				}?>						  
					  </div>					  
					</div>	
					</div>						
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<!--GREEN -->

                  <div class="card" style="background-color: #1bcf48;">
					  <div class="card2">
				<?php if($number_of_Yes>=40){
	mysqli_query($conn,"update rag_statueses set rag_status='GREEN', number_of_Yes='$number_of_Yes' where this_user_id='$this_user_id'");										

					?>					  
					  <div id="myDIV">
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> GREEN </font></h1>
					  </div>
					  				<?php if($number_of_Yes>=40){
					?>	
					  </div>
					  				<?php	
				}?>						  
					  </div>					  
					</div>					
					</div>							
		
			
					
                </div>	
<br>	
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $no_student;?></span></h2>
                            <p>Total Student</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,7,6</div>
                    </div>
									
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $no_mstd; ?></span></h2>
                            <p>Male Student</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5</div>
                    </div>
									
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $no_fstd; ?></span></h2>
                            <p>Female Student</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5</div>
                    </div>

                </div>				
            </div>	
<br>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $no_ofmaleteater;?></span></h2>
                            <p>Male Teachers</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,7,6</div>
                    </div>
									
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $no_offemaleteacher; ?></span></h2>
                            <p>Female Teachers</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5</div>
                    </div>
									
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $no_malenontech; ?></span></h2>
                            <p>Male Non-technical</p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5</div>
                    </div>
											
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $no_femalenontech; ?></span></h2>
                            <p>Female Non-technical</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5</div>
                    </div>

                </div>				
            </div>
        </div>
    </div>
    <!-- End Status area-->	
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="past-day-statis">
                            <h2><?php echo Mansir::get_candidate_name($this_user_id); ?></h2>
                            <p><?php echo $to_days_date; ?></p>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $mal;?></span></h3>
                                <p>Number of Male Staff</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar"></div>
                            </div>
                        </div> 						
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $fmal;?></span></h3>
                                <p>Number of Female Staff</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div>                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $mal+$fmal; ?></span></h3>
                                <p>Total Number of Staff</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>
              
                        <div class="past-statistic-an">
						<center><a type="submit" name="submit"   href="student_summary.php" class="btn btn-success"> Next Chart</a>
                        </center></div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                        </div>
                       <?php //include ('chart/chart.php');
include "../chart/staffpie.php";

?>
<div id="chartContainer"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                    </div>
                </div>				
            </div>
        </div>
    </div>