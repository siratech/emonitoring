 <?php 
 	$sq=mysqli_query($conn,"select * from `facilitys` where user_access_id='$this_user_id'");
	$srow=mysqli_fetch_array($sq);	
	$facility_type	=$srow['facility_type'];
	
 	$sq=mysqli_query($conn,"select status from `facility_data` where facility_id='$this_user_id'");
	$srow=mysqli_fetch_array($sq);	
	$status	=$srow['status'];

?> 
<!-- Mobile Menu start -->
    <div class="mobile-menu-area" id="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Dashboard</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.php">Dashboard</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#"> M & E Form</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
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
                            				
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Facility Data</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                       
  						<li class=""><a  href="add.php"><i class="notika-icon notika-bar-chart"></i> Add </a>
                        </li>
						<li class=""><a  href="view.php"><i class="notika-icon notika-bar-chart"></i> View</a>
                        </li>						
						<li class=""><a  href="edit.php"><i class="notika-icon notika-bar-chart"></i> Edit</a>
                        </li>    
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#pic" href="#">Upload Pictures</a>
                                    <ul id="pic" class="collapse dropdown-header-top">
                                       
  						<li class=""><a  href="add_picturebefore.php"><i class="notika-icon notika-bar-chart"></i> Upload Pictures Before </a>
                        </li>
						<li class=""><a  href="add_pictureafter.php"><i class="notika-icon notika-bar-chart"></i> Upload Pictures After</a>
                        </li>						    
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#rag" href="#">RAG Status</a>
                                    <ul id="rag" class="collapse dropdown-header-top">
                                       
  						<li class=""><a  href="update_ragstatus.php"><i class="notika-icon notika-bar-chart"></i> RAG Status </a>
                        </li>
	   
                                    </ul>
                                </li>								
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">View Message</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a data-toggle="modal" data-target="#myModal_Send_Message" id="yourlink"><i class="notika-icon notika-dollar"> </i> Send Message</a>
							</li>
 						    <li class=""><a  href="veiw_message.php"><i class="notika-icon notika-form"></i> View Message</a>
                        </li>   
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Logout</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                   <li class=""><a  href="../logout.php"><i class="notika-icon notika-support"></i> Logout</a>
                        </li>
						</ul>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->