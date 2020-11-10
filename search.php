<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<script>
function getsearchbyname(val) {
	$.ajax({
	type: "POST",
	url: "get_search.php",
	data:'sname='+val,
	success: function(data){
		$("#search").html(data);
	}
	});
}
</script>

<script>
function getsearchbynumber(val) {
	$.ajax({
	type: "POST",
	url: "get_search.php",
	data:'snumber='+val,
	success: function(data){
		$("#search").html(data);
	}
	});
}
</script>

<script>
function getsearchbyall(val) {
	$.ajax({
	type: "POST",
	url: "get_search.php",
	data:'sall='+val,
	success: function(data){
		$("#search").html(data);
	}
	});
}
getsearchbyall('all');

</script>




	</head>
	<body>
		<div id="">		

			<div class="app-content">
				

					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" style="margin:0 80px;">
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title" hidden>
							<div class="row">
								<div class="col-sm-12">
									<h1 class="mainTitle">Patient Search</h1>
																	</div>
								
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						
						<div class="row">
						<button style="float:right;margin:10px;clear:both;"><a href="history.php">List &#8594;</a></button>
						</div>
						
						<div class="row">
						
							<div class="searchstyle-header">
								<div class="col-sm-6">
									<h3>Search by Name:</h3>
									<input type="text" name="sbyname" class="form-control" onkeypress="getsearchbyname(this.value);" style="width:50%; text-transform: capitalize;"></input>
								</div>
								
								<div class="col-sm-6">
									<h3>Search by Contact No:</h3>
									<input type="text" name="sbynumber" class="form-control" onkeypress="getsearchbynumber(this.value);" style="width:50%;"></input>
								</div>
							</div>
						</div>
						
						<div id="search" class="searchstyle-contentstyle";>
						
						</div>
						<div class="row">
							<button><a href="home.php">&#8592; Back to Home</a></button>
							
						</div>
						
						
						
						
						
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
			
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
			
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
