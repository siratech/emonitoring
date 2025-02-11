<?php	include('../libr/config.php'); 
		include('session.php');

		include('header.php');
		include('mobile_menu_area.php');
		include('modal_Main_Menu_area_start.php');


		//$geted_facID=Mansir::get_candidate_login_id($this_user_id);
		//$geted_captID=Mansir::get_capitation_id($geted_facID,$this_year,$this_month);

$schoolname=Mansir::get_candidate_name($this_user_id);

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

						<th>L.G.A</th>
						<th>School Name</th>
						<th>School Type</th>
						<th>Registration Number</th>								
						<th>Full Name</th>
						<th>Class</th>
						<th>Gender</th>								
						<th>Studenet Status</th>
						<th>Image</th>													
						<th>Action</th>						
                    </tr>
                </thead>
                <tbody>
				<?php
					$pq=mysqli_query($conn,"select * from studentenrollmenttbl  WHERE `school_name`='$schoolname'");
					while($pqrow=mysqli_fetch_array($pq)){
						$pid=$pqrow['id'];
					?>
						<tr>
							<td><?php echo $pqrow['local_govrn']; ?></td>
							<td><?php echo $pqrow['school_name']; ?></td>
							<td><?php echo $pqrow['school_type']; ?></td>
							<td><?php echo $pqrow['reg_number']; ?></td>
							<td><?php echo $pqrow['first_name']." ".$pqrow['sur_name']." ".$pqrow['middle_name']; ?></td>
							<td><?php echo $pqrow['classed']; ?></td>
							<td><?php echo $pqrow['gender']; ?></td>
							
							<td><?php echo $pqrow['edu_status']; ?></td>
							<td><a href="../upload/<?php if(empty($pqrow['image_path'])){echo "profile.jpg";}else{echo $pqrow['image_path'];} ?>"><img src="../upload/<?php if(empty($pqrow['image_path'])){echo "profile.jpg";}else{echo $pqrow['image_path'];} ?>" height="70px" width="70px;"></a></td>
		
							<td>					
								<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#editprod_<?php echo $pid; ?>"><i class="fa fa-edit"></i> Edit</button>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delproduct_<?php echo $pid; ?>"><i class="fa fa-trash"></i> Delete</button>
								<?php include('student_button.php'); ?></td>							
								
							</td>
						</tr>
					<?php
					}
				?>
                </tbody>
                                <tfoot>
                    <tr>
						<th>L.G.A</th>
						<th>School Name</th>
						<th>School Type</th>
						<th>Registration Number</th>								
						<th>Full Name</th>
						<th>Class</th>
						<th>Gender</th>								
						<th>Studenet Status</th>
						<th>Image</th>													
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
