<?php	include('../libr/config.php'); 
		include('session.php');
		//$geted_facID=Mansir::get_candidate_login_id($this_user_id);
		//$geted_captID=Mansir::get_capitation_id($geted_facID,$this_year,$this_month);
?>
								<?php include('header.php'); ?>	
								
								<?php include('mobile_menu_area.php'); ?>
    
								<?php include('modal_Main_Menu_area_start.php'); ?>	
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2><?php //echo Mansir::get_candidate_name($this_user_id); ?></h2>
                            <p>List of Message</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                <thead>
                    <tr>
                        <th>Messages</th>
						<th>Message Type</th>
						<th>Send Date</th>
						<th>Image</th>					
                    </tr>
                </thead>
                <tbody>
				<?php
					$pq=mysqli_query($conn,"select * from messages_tbl WHERE `sender`='$this_user_id' OR `reciever`='$this_user_id'");
					while($pqrow=mysqli_fetch_array($pq)){
						$pid=$pqrow['id'];
					?>
						<tr>
							<td><?php echo $pqrow['message']; ?></td>
							<td><?php echo $pqrow['message_type']; ?></td>
							<td><?php echo $pqrow['send_date']; ?></td>
							
							<td>	<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal_Send_Message"><i class="fa fa-edit"></i> Reply</button></td>
						</tr>
					<?php
					}
				?>
                </tbody>
                                <tfoot>
                    <tr>
                        <th>Messages</th>
						<th>Message Type</th>
						<th>Send Date</th>
						<th>Image</th>						
                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
								<?php include('footer.php'); ?>	
                