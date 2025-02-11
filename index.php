<?php	include('../libr/config.php'); 
		include('session.php');
	
		$geted_sch_Level=Mansir::get_sch_Level($this_user_id);
					
					//corrent data
					$pq=mysqli_query($conn,"SELECT  health_info_mu_record FROM `facility_status` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$health_info_mu_record=$piqrow['health_info_mu_record'];

					}
					$pq=mysqli_query($conn,"SELECT  opd FROM `facility_status` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$opd=$piqrow['opd'];

					}
					$pq=mysqli_query($conn,"SELECT  pharmacy FROM `facility_status` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$pharmacy=$piqrow['pharmacy'];

					}		
					$pq=mysqli_query($conn,"SELECT  lab FROM `facility_status` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lab=$piqrow['lab'];

					}
					$pq=mysqli_query($conn,"SELECT  a_and_e FROM `facility_status` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$a_and_e=$piqrow['a_and_e'];

					}	
					$pq=mysqli_query($conn,"SELECT  labour_room FROM `facility_status` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$labour_room=$piqrow['labour_room'];

					}
					$pq=mysqli_query($conn,"SELECT  inpatient FROM `facility_status` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$inpatient=$piqrow['inpatient'];

					}
					$pq=mysqli_query($conn,"SELECT  finace FROM `facility_status` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$finace=$piqrow['finace'];

					}		
					$pq=mysqli_query($conn,"SELECT  total_score FROM `facility_status` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$total_score=$piqrow['total_score'];

					}
					$pq=mysqli_query($conn,"SELECT  rag_status FROM `facility_status` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$rag_status=$piqrow['rag_status'];

					}	
					//Current RAG Score
					$pq=mysqli_query($conn,"SELECT  total_score FROM `facility_status` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$total_score=$piqrow['total_score'];

					}	
					$pq=mysqli_query($conn,"SELECT  monitoringteam FROM `facility_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$monitoringteam=$piqrow['monitoringteam'];

					}
					$pq=mysqli_query($conn,"SELECT  visitquarter FROM `facility_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$visitquarter=$piqrow['visitquarter'];

					}	
					$pq=mysqli_query($conn,"SELECT  thedate FROM `facility_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$thedate=$piqrow['thedate'];

					}	
					$pq=mysqli_query($conn,"SELECT  recomendation FROM `m_and_e_team_recomendation` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$recomendation=$piqrow['recomendation'];

					}
					$pq=mysqli_query($conn,"SELECT  supervisor_name FROM `m_and_e_team_recomendation` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$supervisor_name=$piqrow['supervisor_name'];

					}					
					//Privi  Data		
					$pq=mysqli_query($conn,"SELECT  health_info_mu_record FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lhealth_info_mu_record=$piqrow['health_info_mu_record'];

					}
					$pq=mysqli_query($conn,"SELECT  opd FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lopd=$piqrow['opd'];

					}
					$pq=mysqli_query($conn,"SELECT  pharmacy FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lpharmacy=$piqrow['pharmacy'];

					}		
					$pq=mysqli_query($conn,"SELECT  lab FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$llab=$piqrow['lab'];

					}
					$pq=mysqli_query($conn,"SELECT  a_and_e FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$la_and_e=$piqrow['a_and_e'];

					}	
					$pq=mysqli_query($conn,"SELECT  labour_room FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$llabour_room=$piqrow['labour_room'];

					}
					$pq=mysqli_query($conn,"SELECT  inpatient FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$linpatient=$piqrow['inpatient'];

					}
					$pq=mysqli_query($conn,"SELECT  finace FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lfinace=$piqrow['finace'];

					}		
					$pq=mysqli_query($conn,"SELECT  total_score FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$ltotal_score=$piqrow['total_score'];

					}
					$pq=mysqli_query($conn,"SELECT  rag_status FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lrag_status=$piqrow['rag_status'];

					}	
					$pq=mysqli_query($conn,"SELECT  monitoringteam FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lmonitoringteam=$piqrow['monitoringteam'];

					}
					$pq=mysqli_query($conn,"SELECT  visitquarter FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lvisitquarter=$piqrow['visitquarter'];

					}	
					$pq=mysqli_query($conn,"SELECT  tickvisit FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$ltickvisit=$piqrow['tickvisit'];

					}
					$pq=mysqli_query($conn,"SELECT  yearly FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lyearly=$piqrow['yearly'];

					}	
					$pq=mysqli_query($conn,"SELECT  monthly FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lmonthly=$piqrow['monthly'];

					}
					$pq=mysqli_query($conn,"SELECT  thedate FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lthedate=$piqrow['thedate'];

					}	
					$pq=mysqli_query($conn,"SELECT  recomendation FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lrecomendation=$piqrow['recomendation'];

					}
					$pq=mysqli_query($conn,"SELECT  recomendation FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lrecomendation=$piqrow['recomendation'];

					}
					$pq=mysqli_query($conn,"SELECT  supervisor_name FROM `last_visit_data` WHERE `facility_id` ='$this_user_id'");
					while($piqrow=mysqli_fetch_array($pq)){
						$lsupervisor_name=$piqrow['supervisor_name'];

					}					
include('questios.php');
			mysqli_query($conn, "UPDATE `facility_status` SET `health_info_mu_record`='$him' WHERE `facility_id`='$this_user_id' AND status='NEW'");											 
			mysqli_query($conn, "UPDATE `facility_status` SET `opd`='$opd_opd' WHERE `facility_id`='$this_user_id' AND status='NEW'");											 
			mysqli_query($conn, "UPDATE `facility_status` SET `pharmacy`='$pharmacy_ph' WHERE `facility_id`='$this_user_id' AND status='NEW'");											 
	        mysqli_query($conn, "UPDATE `facility_status` SET `lab`='$lab_lab' WHERE `facility_id`='$this_user_id' AND status='NEW'");											 
	        mysqli_query($conn, "UPDATE `facility_status` SET `a_and_e`='$a_and_e_a_and_e' WHERE `facility_id`='$this_user_id' AND status='NEW'");											 
	        mysqli_query($conn, "UPDATE `facility_status` SET `labour_room`='$labouroom' WHERE `facility_id`='$this_user_id' AND status='NEW'");											 
	        mysqli_query($conn, "UPDATE `facility_status` SET `inpatient`='$in_patient' WHERE `facility_id`='$this_user_id' AND status='NEW'");											 
	        mysqli_query($conn, "UPDATE `facility_status` SET `finace`='$finance' WHERE `facility_id`='$this_user_id' AND status='NEW'");											 
	        mysqli_query($conn, "UPDATE `facility_status` SET `total_score`='$number_of_Yes' WHERE `facility_id`='$this_user_id' AND status='NEW'");											 

?>
								<?php include('header.php'); ?>	
								
								<?php include('mobile_menu_area.php'); ?>
    
								<?php include('modal_Main_Menu_area_start.php'); ?>	

 <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
  

<?php if($geted_sch_Level=='CHC' || $geted_sch_Level=='PHC' ){

?>
          <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<!-- RED-->
                  <div class="card" style="background-color: #8c0a0a;">
					  <div class="card2">
				<?php					
				if ($number_of_Yes<=50){
					?>						  
					  <div id="myDIV">
					  
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> RED </font></h1>
					  </div>
					  				<?php if($number_of_Yes<=50){
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
				if($number_of_Yes>=51 & $number_of_Yes<=82){
	mysqli_query($conn,"update rag_statueses set rag_status='AMBER', number_of_Yes='$number_of_Yes' where this_user_id='$this_user_id'");										

					?>						  
					  <div id="myDIV">
					  
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> AMBER </font></h1>
					  </div>
					  				<?php if($number_of_Yes>=51 & $number_of_Yes<=82){
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
				<?php if($number_of_Yes>=83){
	mysqli_query($conn,"update rag_statueses set rag_status='GREEN', number_of_Yes='$number_of_Yes' where this_user_id='$this_user_id'");										

					?>					  
					  <div id="myDIV">
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> GREEN </font></h1>
					  </div>
					  				<?php if($number_of_Yes>=83){
					?>	
					  </div>
					  				<?php	
				}?>						  
					  </div>					  
					</div>					
					</div>							
		
			
					
                </div>	
<?php
}
?>

<?php if($geted_sch_Level=='PRIVATE'){

?>
          <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<!-- RED-->
                  <div class="card" style="background-color: #8c0a0a;">
					  <div class="card2">
				<?php					
				if ($number_of_Yes<=59){
					?>						  
					  <div id="myDIV">
					  
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> RED </font></h1>
					  </div>
					  				<?php if($number_of_Yes<=59){
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
				if($number_of_Yes>=60 & $number_of_Yes<=95){
	mysqli_query($conn,"update rag_statueses set rag_status='AMBER', number_of_Yes='$number_of_Yes' where this_user_id='$this_user_id'");										

					?>						  
					  <div id="myDIV">
					  
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> AMBER </font></h1>
					  </div>
					  				<?php if($number_of_Yes>=60 & $number_of_Yes<=95){
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
				<?php if($number_of_Yes>=95){
	mysqli_query($conn,"update rag_statueses set rag_status='GREEN', number_of_Yes='$number_of_Yes' where this_user_id='$this_user_id'");										

					?>					  
					  <div id="myDIV">
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> GREEN </font></h1>
					  </div>
					  				<?php if($number_of_Yes>=95){
					?>	
					  </div>
					  				<?php	
				}?>						  
					  </div>					  
					</div>					
					</div>							
		
			
					
                </div>	
<?php
}
?>

<?php if($geted_sch_Level=='GENERAL'){

?>
          <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<!-- RED-->
                  <div class="card" style="background-color: #8c0a0a;">
					  <div class="card2">
				<?php					
				if ($number_of_Yes<=60){
					?>						  
					  <div id="myDIV">
					  
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> RED </font></h1>
					  </div>
					  				<?php if($number_of_Yes<=60){
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
				if($number_of_Yes>=61 & $number_of_Yes<=92){
	mysqli_query($conn,"update rag_statueses set rag_status='AMBER', number_of_Yes='$number_of_Yes' where this_user_id='$this_user_id'");										

					?>						  
					  <div id="myDIV">
					  
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> AMBER </font></h1>
					  </div>
					  				<?php if($number_of_Yes>=61 & $number_of_Yes<=92){
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
				<?php if($number_of_Yes>=93){
	mysqli_query($conn,"update rag_statueses set rag_status='GREEN', number_of_Yes='$number_of_Yes' where this_user_id='$this_user_id'");										

					?>					  
					  <div id="myDIV">
					  				<?php	
				}?>						  
					  <div class="card3">
					  <h1><font color="#f7f7f7"> GREEN </font></h1>
					  </div>
					  				<?php if($number_of_Yes>=93){
					?>	
					  </div>
					  				<?php	
				}?>						  
					  </div>					  
					</div>					
					</div>							
		
			
					
                </div>	
<?php
}
?>
		
			<br>	
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $health_info_mu_record;?></span></h2>
                            <p>HIM </p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,7,6</div>
                    </div>
									
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $opd; ?></span></h2>
                            <p>OPD</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5</div>
                    </div>
									
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $pharmacy; ?></span></h2>
                            <p>Pharmacy</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5</div>
                    </div>

                </div>	
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $lab; ?></span></h2>
                            <p>Laboratory </p>
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
                            <h2 style="color:red;"><span class="counter"> <?php echo $a_and_e;?></span></h2>
                            <p>A & E</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,7,6</div>
                    </div>
									
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $labour_room; ?></span></h2>
                            <p>Labour Room</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5</div>
                    </div>
									
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $inpatient; ?></span></h2>
                            <p>In-Patient</p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5</div>
                    </div>
											
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $finace; ?></span></h2>
                            <p>Finance</p>
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
                                <h3> <span class=""><?php echo $lmonitoringteam;?></span></h3>
                                <p>Monitoring Team</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar"></div>
                            </div>
                        </div> 						
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class=""><?php echo $lvisitquarter;?></span></h3>
                                <p>Visit Quarter</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div>
						<div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class=""><?php echo $lthedate; ?></span></h3>
                                <p>Visit Date</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>
						<div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class=""><?php echo $lsupervisor_name; ?></span></h3>
                                <p>Name of Supervisor</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>						
                       <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $lhealth_info_mu_record;?></span></h3>
                                <p>HIM </p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar"></div>
                            </div>
                        </div> 						
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $lopd;?></span></h3>
                                <p>OPD</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div>
						<div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $lpharmacy; ?></span></h3>
                                <p>Pharmacy</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>
                       <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $llab;?></span></h3>
                                <p>Laboratory</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar"></div>
                            </div>
                        </div> 						
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $la_and_e;?></span></h3>
                                <p>A & E</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div>
						<div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $llabour_room; ?></span></h3>
                                <p>Labour Room</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>						
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $linpatient;?></span></h3>
                                <p>In-Patient</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar"></div>
                            </div>
                        </div> 						
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $lfinace;?></span></h3>
                                <p>Finance</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div>
						<div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $ltotal_score; ?></span></h3>
                                <p>Total Score</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>
						<div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><?php echo $lrecomendation; ?></h3>
                                <p>Recomendation</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
				
<br>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><?php echo $monitoringteam;?></h2>
                            <p>Monitoring Team </p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,7,6</div>
                    </div>
									
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><?php echo $thedate; ?></h2>
                            <p>Visit Date</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5</div>
                    </div>
									
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $total_score; ?></span></h2>
                            <p>Total Score</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5</div>
                    </div>

                </div>	
<br>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"> <?php echo $visitquarter;?></h2>
                            <p>Visit Quarter </p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,7,6</div>
                    </div>
									
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><?php echo $supervisor_name; ?></h2>
                            <p>Supervisor</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5</div>
                    </div>
									
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><?php echo $recomendation; ?></h2>
                            <p>Recomendation</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5</div>
                    </div>

                </div>								
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                        </div>
                       <?php //include ('chart/chart.php');
include "../chart/barstaff.php";

?>
<div id="chartContainer"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                    </div>
                </div>	

				
            </div>
        </div>
    </div>   
  
  
								<?php 
								

								include('footer.php'); 
								
								
								?>	
								
	