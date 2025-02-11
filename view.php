<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  width: 100%;
  border: 1px solid #ddd;
}

td {
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #eee;
}
</style>
</head>
<?php	include('../libr/config.php'); 
		include('session.php');
		include('getcadidated_data.php');		
		$geted_sch_Level=Mansir::get_sch_Level($this_user_id);
		//$geted_captID=Mansir::get_capitation_id($geted_facID,$this_year,$this_month);
		
	
		//$geted_captID_in=Mansir::get_capitation_id_informal($geted_facID,$this_year,$this_month);
			//echo $geted_captID_in;
		//exit();
		//$fcname=Mansir::get_candidate_name($this_user_id);
		
							//////////////////
					/* $pq=mysqli_query($conn,"SELECT cap_amount FROM `allocation_of_cap` WHERE capat_id='$geted_captID'");
					while($piqrow=mysqli_fetch_array($pq)){
						$cap=$piqrow[0];
					}							
					$pq=mysqli_query($conn,"SELECT SUM(`drugs_amount`) as alldrug FROM `allocation_of_cap` WHERE capat_id='$geted_captID'");
					while($piqrow=mysqli_fetch_array($pq)){
						$alldrug=$piqrow['alldrug'];
					}
						$pq=mysqli_query($conn,"SELECT SUM(`lab_amount`) as alllab FROM `allocation_of_cap` WHERE capat_id='$geted_captID'");
					while($piqrow=mysqli_fetch_array($pq)){
						$alllab=$piqrow['alllab'];
					}
						$pq=mysqli_query($conn,"SELECT SUM(`hr_amount`) as allhr FROM `allocation_of_cap` WHERE capat_id='$geted_captID'");
					while($piqrow=mysqli_fetch_array($pq)){
						$allhr=$piqrow['allhr'];
					}
					$pq=mysqli_query($conn,"SELECT SUM(`admin_chrgs_amount`) as alladmin FROM `allocation_of_cap` WHERE capat_id='$geted_captID'");
					while($piqrow=mysqli_fetch_array($pq)){
						$alladmin=$piqrow['alladmin'];
					}
					$pq=mysqli_query($conn,"SELECT SUM(`rf_amount`) as allrf FROM `allocation_of_cap` WHERE capat_id='$geted_captID'");
					while($piqrow=mysqli_fetch_array($pq)){
						$allrf=$piqrow['allrf'];
					}										
					//////////////////
					
							//////////////////
					$pq=mysqli_query($conn,"SELECT cap_amount FROM `allocation_of_cap_informal` WHERE capat_id='$geted_captID_in'");
					while($piqrow=mysqli_fetch_array($pq)){
						$cap_in=$piqrow[0];
					}							
					$pq=mysqli_query($conn,"SELECT SUM(`drugs_amount`) as alldrug FROM `allocation_of_cap_informal` WHERE capat_id='$geted_captID_in'");
					while($piqrow=mysqli_fetch_array($pq)){
						$alldrug_in=$piqrow['alldrug'];
					}
						$pq=mysqli_query($conn,"SELECT SUM(`lab_amount`) as alllab FROM `allocation_of_cap_informal` WHERE capat_id='$geted_captID_in'");
					while($piqrow=mysqli_fetch_array($pq)){
						$alllab_in=$piqrow['alllab'];
					}
						$pq=mysqli_query($conn,"SELECT SUM(`hr_amount`) as allhr FROM `allocation_of_cap_informal` WHERE capat_id='$geted_captID_in'");
					while($piqrow=mysqli_fetch_array($pq)){
						$allhr_in=$piqrow['allhr'];
					}
					$pq=mysqli_query($conn,"SELECT SUM(`admin_chrgs_amount`) as alladmin FROM `allocation_of_cap_informal` WHERE capat_id='$geted_captID_in'");
					while($piqrow=mysqli_fetch_array($pq)){
						$alladmin_in=$piqrow['alladmin'];
					}
					$pq=mysqli_query($conn,"SELECT SUM(`rf_amount`) as allrf FROM `allocation_of_cap_informal` WHERE capat_id='$geted_captID_in'");
					while($piqrow=mysqli_fetch_array($pq)){
						$allrf_in=$piqrow['allrf'];
					}										 */
					//////////////////
		
?>
								<?php include('header.php'); ?>	
								
								<?php include('mobile_menu_area.php'); ?>
    
								<?php include('modal_Main_Menu_area_start.php'); ?>	

    
    <!-- Start Sale Statistic area-->
	<?php if (!empty($geted_sch_Level) AND $geted_sch_Level == "Pre-primary"){?>
								<?php include('Preprimary_view.php'); ?>

	<?php
	}
	if(!empty($geted_sch_Level) AND $geted_sch_Level == "Primary School Only"){
	?>
								<?php include('primary_School_Only_view.php'); ?>

	<?php
	}
	?>
		<?php
	
	if(!empty($geted_sch_Level) AND $geted_sch_Level == "Pre-primary and primary (Combined)"){
	?>
								<?php include('Preprimary_primary_Combined_view.php'); ?>

	<?php
	}
	?>
<?php
	
	if(!empty($geted_sch_Level) AND $geted_sch_Level == "Secondary School Senior Only"){
	?>
								<?php include('secondary_school_Senior_only_view.php'); ?>

    
	<?php
	}
	?>
		<?php
	if(!empty($geted_sch_Level) AND $geted_sch_Level == "Secondary School junior Only"){
	?>
	   								<?php include('junior_Only_view.php'); ?>

	<?php
	}
	?>	
		<?php
	
	if(!empty($geted_sch_Level) AND $geted_sch_Level == "Secondary School (Combined)"){
	?>
    <!-- End Status area-->
    <div class="sale-statistic-area">
        <div class="container">
								<?php include('secondary_Combined_view.php'); ?>
        </div>
    </div>
	<?php
	}
	?>		
    <!-- End Sale Statistic area-->
                                <div class="modal fade" id="myModalone" role="dialog">
                                    <div class="modal-dialog modals-default">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>Modal title</h2>
                                                <p>Curabitur blandit mollis lacus. Nulla sit amet est. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Cras sagittis.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Save changes</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
	

								<?php include('footer.php'); ?>	
								
	