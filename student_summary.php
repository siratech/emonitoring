<?php	include('../libr/config.php'); 
		include('session.php');
		include('getcadidated_data.php');		
	
		$geted_sch_Level=Mansir::get_sch_Level($this_user_id);
		//$mal_std = $no_ofmaleteater+$no_malenontech;
		//$fmal_std =$no_femalenontech+$no_offemaleteacher;
		
?>
								<?php include('header.php'); ?>	
								
								<?php include('mobile_menu_area.php'); ?>
    
								<?php include('modal_Main_Menu_area_start.php'); ?>	
<!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $no_malestudent;?></span></h2>
                            <p>Male Student</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,7,6</div>
                    </div>
									
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $no_femalestudent; ?></span></h2>
                            <p>Female Student</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5</div>
                    </div>
									
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2 style="color:red;"><span class="counter"> <?php echo $no_femalestudent+$no_malestudent; ?></span></h2>
                            <p>Total Number of Student</p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5</div>
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
                                <h3> <span class="counter"><?php echo $no_malestudent;?></span></h3>
                                <p>Number of Male Student</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar"></div>
                            </div>
                        </div> 						
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $no_femalestudent;?></span></h3>
                                <p>Number of Female Student</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div>                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3> <span class="counter"><?php echo $no_malestudent+$no_femalestudent; ?></span></h3>
                                <p>Total Number of Student</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>
              
                        <div class="past-statistic-an">
						<center><a type="submit" name="submit"   href="student_summary_by_class.php" class="btn btn-success"> Next Chart</a>
                        </center></div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                        </div>
                       <?php //include ('chart/chart.php');
include "../chart/studentpie.php";

?>
<div id="chartContainer"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                    </div>
                </div>				
            </div>
        </div>
    </div>	

								<?php include('footer.php'); ?>	
								
	