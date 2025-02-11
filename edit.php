<?php	include('../libr/config.php'); 
		include('session.php');
		include('getcadidated_data.php');		

		$geted_sch_Level=Mansir::get_sch_Level($this_user_id);
		
		
?>
								<?php include('header.php'); ?>	
								
								<?php include('mobile_menu_area.php'); ?>
    
								<?php include('modal_Main_Menu_area_start.php'); ?>	

    
    <!-- Start Sale Statistic area-->
	<?php if (!empty($geted_sch_Level) AND $geted_sch_Level == "Pre-primary"){?>

    <!-- End Status area-->
    <div class="sale-statistic-area">
        <div class="container">
								<?php include('edit_Preprimary_and_primary.php'); ?>
        </div>
    </div>
	<?php
	}
	if(!empty($geted_sch_Level) AND $geted_sch_Level == "Primary School Only"){
	?>

    <!-- End Status area-->
    <div class="sale-statistic-area">
        <div class="container">
								<?php include('edit_Preprimary_and_primary.php'); ?>
        </div>
    </div>
	<?php
	}
	?>
		<?php
	
	if(!empty($geted_sch_Level) AND $geted_sch_Level == "Pre-primary and primary (Combined)"){
	?>

    <!-- End Status area-->
    <div class="sale-statistic-area">
        <div class="container">
								<?php include('edit_Preprimary_and_primary.php'); ?>
        </div>
    </div>
	<?php
	}
	?>
<?php
	
	if(!empty($geted_sch_Level) AND $geted_sch_Level == "Secondary School Senior Only"){
	?>

    <!-- End Status area-->
    <div class="sale-statistic-area">
        <div class="container">
								<?php include('[edit_Preprimary_and_primary.php'); ?>
        </div>
    </div>
    
	<?php
	}
	?>
		<?php
	if(!empty($geted_sch_Level) AND $geted_sch_Level == "Secondary School junior Only"){
	?>

    <!-- End Status area-->
    <div class="sale-statistic-area">
        <div class="container">
								<?php include('edit_Preprimary_and_primary.php'); ?>
        </div>
    </div>
	<?php
	}
	?>

		<?php
	
	if(!empty($geted_sch_Level) AND $geted_sch_Level == "Secondary School (Combined)"){
	?>

    <!-- End Status area-->
    <div class="sale-statistic-area">
        <div class="container">
								<?php include('edit_Preprimary_and_primary.php'); ?>
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
								
	