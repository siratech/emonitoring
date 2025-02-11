 <?php 
 	$sq=mysqli_query($conn,"select * from `facilitys` where user_access_id='$this_user_id'");
	$srow=mysqli_fetch_array($sq);	
	$facility_type	=$srow['facility_type'];
	
 	$sq=mysqli_query($conn,"select status from `facility_data` where facility_id='$this_user_id'");
	$srow=mysqli_fetch_array($sq);	
	$status	=$srow['status'];

?> 
   <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a href="index.php"><i class="notika-icon notika-house"></i> Dashboard</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-windows"></i>Facility Data</a>
                        </li>
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-form"></i> Upload Pictures</a>
                        </li>					

                        <li><a data-toggle="tab" href="#qaforms"><i class="notika-icon notika-mail"></i> M & E Form</a>
                        </li>

                        <li><a href="update_ragstatus.php"><i class="notika-icon notika-bar-chart"></i> RAG Status</a>
                        </li>	
                        <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-mail"></i> Message</a>
                        </li>				
						
						    <li class=""><a  href="../logout.php"><i class="notika-icon notika-support"></i> Logout</a>
                        </li>
                        <!--<li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Tables</a>
                        </li> -->
                        
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
<?php if($status=="OLD"){
	?>

                               <li class=""><a  href="add_new_visit.php"><i class="notika-icon notika-form"></i> Add New Visit</a>
                        </li>							
<?php }if($status=="NEW"){
	?>
                               <li class=""><a  href="add_new_visit.php"><i class="notika-icon notika-form"></i> Add New Visit</a>
                        </li>
<?php }
 else{
	?>
                               <li class=""><a  href="add.php"><i class="notika-icon notika-form"></i> Add Visit</a>
                        </li>
<?php }
?>
                               <li class=""><a  href="view.php"><i class="notika-icon notika-form"></i>Veiw</a>
                        </li>	
						
						<li class=""><a  href="edit.php"><i class="notika-icon notika-bar-chart"></i> Edit</a>
                        </li>	
                                <li class=""><a  href="STAFF_LIST.xlsx"download><i class="notika-icon notika-form"></i> Download Staff List Template</a>
                        </li>

		
	
						
						  <li class=""><a  href="upload_er.php"><i class="notika-icon notika-form"></i> Upload Staff List</a>
                        </li>
 						 
 						    <li class=""><a  href="veiw_staff.php"><i class="notika-icon notika-form"></i> View Staff</a>
                        </li>                         						
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">

                               <li class=""><a  href="add_picturebefore.php"><i class="notika-icon notika-form"></i> Upload Pictures Before</a>
                        </li>

						
                               <li class=""><a  href="add_pictureafter.php"><i class="notika-icon notika-form"></i> Upload Pictures After</a>
                        </li>
					
                            </ul>
                        </div>
                        <div id="progress" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                               <li class=""><a  href="STAFF_LIST.xlsx"download><i class="notika-icon notika-form"></i> Download Staff List Template</a>
                        </li>

		
	
						
						  <li class=""><a  href="upload_er.php"><i class="notika-icon notika-form"></i> Upload Staff List</a>
                        </li>
 						 
 						    <li class=""><a  href="veiw_staff.php"><i class="notika-icon notika-form"></i> View Staff</a>
                        </li>
						
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
							<li><a data-toggle="modal" data-target="#myModal_Send_Message"><i class="notika-icon notika-dollar"> </i> Send Message</a>
							</li>
 						    <li class=""><a  href="veiw_message.php"><i class="notika-icon notika-form"></i> View Message</a>
                        </li>                               
                            </ul>
                        </div>						
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="normal-table.html">Normal Table</a>
                                </li>
                                <li><a href="data-table.html">Data Table</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="form-elements.html">Form Elements</a>
                                </li>
                                <li><a href="form-components.html">Form Components</a>
                                </li>
                                <li><a href="form-examples.html">Form Examples</a>
                                </li>
                            </ul>
                        </div>
                        <div id="qaforms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
						<?php 	if($facility_type==='CHC' || $facility_type==='PHC'){
						?>							
 						    <li class=""><a  href="export_Primary_m_and_e.php"><i class="notika-icon notika-form"></i> Download Form</a>
                        </li>
						  <li class=""><a  href="upload_qa_form.php"><i class="notika-icon notika-form"></i> Upload Form</a>
                        </li>
		                <li class=""><a  href="export_public_csv.php"><i class="notika-icon notika-form"></i> Download General Form CSV</a>
                        </li>
						  <li class=""><a  href="upload_qa_form_csv.php"><i class="notika-icon notika-form"></i> Upload General Form CSV</a>
                        </li>						
<?php 
						}
						?>	
						<?php 	if($facility_type==='GENERAL'){
						?>							
 						    <li class=""><a  href="export_General_m_and_e.php"><i class="notika-icon notika-form"></i> Download General Form</a>
                        </li>
						  <li class=""><a  href="upload_qa_form.php"><i class="notika-icon notika-form"></i> Upload General Form</a>
                        </li>
 						    <li class=""><a  href="export_General_csv.php"><i class="notika-icon notika-form"></i> Download General Form CSV</a>
                        </li>
						  <li class=""><a  href="upload_qa_form_csv.php"><i class="notika-icon notika-form"></i> Upload General Form CSV</a>
                        </li>						
<?php 
						}
						?>	
						<?php 	if($facility_type==='PRIVATE'){
						?>							
 						    <li class=""><a  href="export_Private_m_and_e.php"><i class="notika-icon notika-form"></i> Download Private Form</a>
                        </li>
						  <li class=""><a  href="upload_qa_form.php"><i class="notika-icon notika-form"></i> Upload Private Form</a>
                        </li>
 						    <li class=""><a  href="export_Private_csv.php"><i class="notika-icon notika-form"></i> Download General Form CSV</a>
                        </li>
						  <li class=""><a  href="upload_qa_form_csv.php"><i class="notika-icon notika-form"></i> Upload General Form CSV</a>
                        </li>						
<?php 
						}
						?>	
                                <li><a href="create_new_visit.php"><i class="notika-icon notika-form"></i> Create New Visit</a>
                                </li>						
                            </ul>
                        </div>
                        <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="notification.html">Notifications</a>
                                </li>
                                <li><a href="alert.html">Alerts</a>
                                </li>
                                <li><a href="modals.html">Modals</a>
                                </li>
                                <li><a href="buttons.html">Buttons</a>
                                </li>
                                <li><a href="tabs.html">Tabs</a>
                                </li>
                                <li><a href="accordion.html">Accordion</a>
                                </li>
                                <li><a href="dialog.html">Dialogs</a>
                                </li>
                                <li><a href="popovers.html">Popovers</a>
                                </li>
                                <li><a href="tooltips.html">Tooltips</a>
                                </li>
                                <li><a href="dropdown.html">Dropdowns</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="contact.html">Contact</a>
                                </li>
                                <li><a href="invoice.html">Invoice</a>
                                </li>
                                <li><a href="typography.html">Typography</a>
                                </li>
                                <li><a href="color.html">Color</a>
                                </li>
                                <li><a href="login-register.html">Login Register</a>
                                </li>
                                <li><a href="404.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                        <div id="student" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="enroll_studnet.php">Enroll Student </a>
                                </li>
                                <li><a href="veiw_student.php">Student List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->