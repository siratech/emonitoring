<?php	include('../libr/config.php'); 
		include('session.php');

		include('header.php');
		include('mobile_menu_area.php');
		include('modal_Main_Menu_area_start.php');


		//$geted_facID=Mansir::get_candidate_login_id($this_user_id);
		//$geted_captID=Mansir::get_capitation_id($geted_facID,$this_year,$this_month);
?>
								<?php  ?>	

    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2><?php //echo Mansir::get_candidate_name($this_user_id); ?></h2>
                            <p>List of Staff</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                <thead>
                    <tr>
                        <th>NAME</th>
						<th>D.O.B</th>
						<th>L.G.A</th>
						<th>QUAL</th>
						<th>RANK</th>
						<th>G.L</th>								
						<th>VER. NO</th>
						<th>D.O.FIRST. APPT</th>
						<th>D.O.PRE. APPT.</th>								
						<th>REMARK</th>
						<th>Action</th>						
                    </tr>
                </thead>
                <tbody>
				<?php
					$pq=mysqli_query($conn,"select * from sch_staff");
					while($pqrow=mysqli_fetch_array($pq)){
						$pid=$pqrow['id'];
					?>
						<tr>
							<td><?php echo $pqrow['fullname']; ?></td>
							<td><?php echo $pqrow['staff_d_o_b']; ?></td>
							<td><?php echo $pqrow['staff_lga']; ?></td>
							<td><?php echo $pqrow['qual']; ?></td>
							<td><?php echo $pqrow['staff_rank']; ?></td>
							<td><?php echo $pqrow['staff_gl']; ?></td>
							<td><?php echo $pqrow['staff_val_no']; ?></td>
							
							<td><?php echo $pqrow['first_date_of_appt']; ?></td>
							<td><?php echo $pqrow['pre_date_of_appt']; ?></td>
							<td><?php echo $pqrow['remark']; ?></td>		
							<td>					
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editprod_<?php echo $pid; ?>"><i class="fa fa-edit"></i> Edit</button>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delproduct_<?php echo $pid; ?>"><i class="fa fa-trash"></i> Delete</button>
								<?php include('staff_button.php'); ?></td>							
								
							</td>
						</tr>
					<?php
					}
				?>
                </tbody>
                                <tfoot>
                    <tr>
                        <th>NAME</th>
						<th>D.O.B</th>
						<th>L.G.A</th>
						<th>QUAL</th>
						<th>RANK</th>
						<th>G.L</th>								
						<th>VER. NO</th>
						<th>D.O.FIRST. APPT</th>
						<th>D.O.PRE. APPT.</th>								
						<th>REMARK</th>
						<th>Action</th>						
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
