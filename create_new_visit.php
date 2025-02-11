<?php	include('../libr/config.php'); 
		include('session.php');
		//$geted_sch_Level=Mansir::get_sch_Level($this_user_id);
		$query_parent = mysqli_query($conn,"SELECT DISTINCT(`facility_lga`) FROM `facilitys`") or die("Query failed: ".mysql_error());
		$query_Quater = mysqli_query($conn,"SELECT DISTINCT(`visit_quater`) FROM `visit_quater`") or die("Query failed: ".mysql_error());
		
?>
								<?php include('header.php'); ?>	
								
								<?php include('mobile_menu_area.php'); ?>
    
								<?php include('modal_Main_Menu_area_start.php'); ?>	
	<script type="text/javascript">
$(document).ready(function() {
    
	$("#school_ops").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('loaddepartment4c.php?school_ops=' + $(this).val(), function(data) {
			$("#sch_ops_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});	

$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('loaddepartment4c.php?parent_cat=' + $(this).val(), function(data) {
			$("#q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_water").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_water=' + $(this).val(), function(data) {
			$("#water_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});	

$(document).ready(function() {
    
	$("#present_light").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_light=' + $(this).val(), function(data) {
			$("#light_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_sickbay").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_sickbay=' + $(this).val(), function(data) {
			$("#sickbay_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_material").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_material=' + $(this).val(), function(data) {
			$("#material_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_materiallesson").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_materiallesson=' + $(this).val(), function(data) {
			$("#materiallesson_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_materialrecord").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_materialrecord=' + $(this).val(), function(data) {
			$("#materialrecord_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_students").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_students=' + $(this).val(), function(data) {
			$("#students_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_classcondition").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_classcondition=' + $(this).val(), function(data) {
			$("#classcondition_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_distribution").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_distribution=' + $(this).val(), function(data) {
			$("#distribution_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_books").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_books=' + $(this).val(), function(data) {
			$("#books_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#present_preseat").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_preseat=' + $(this).val(), function(data) {
			$("#seat_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});


$(document).ready(function() {
    
	$("#present_seat").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('present_water.php?present_seat=' + $(this).val(), function(data) {
			$("#p_seat_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});

$(document).ready(function() {
    
	$("#not_unctioning").change(function() {
		$(this).after('<div id="loader"></div>');
		$.get('not_unctioning.php?not_unctioning=' + $(this).val(), function(data) {
			$("#not_unctioning_q").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});
</script>
	<br><br><br>	
  <div class="row">
<div class="modal-content">
                <div class="modal-header">
                    <center><h4 class="modal-title" id="myModalLabel">Create New Visit</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">

					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="createvisit.php" enctype="multipart/form-data">
						<div style="height:10px;"></div>
			
						
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">


	
	</div>						  
						  

					      <div class="col-lg-3"></div>


				</div>	
					  <div class="row">
					      <div class="col-lg-3"></div>
    <div class="col-lg-6">


	
	</div>
					      <div class="col-lg-3"></div>


				</div>	




					 
									
												<center>
												<div style="height:10px;"></div>
						<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Create</button>
						<a href="index.php" class="btn btn-danger">Cancel</a>
						<input type="hidden" name="this_user_id" value="<?php echo $this_user_id ?>">

						</form>
						</center>
				</div>

        </div>
            </div>
        </div>	<br><br><br>							
								<?php include('footer.php'); ?>	
								
	