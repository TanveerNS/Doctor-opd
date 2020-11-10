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
	</head>
	<body>
		<div>		

			<div class="app-content" >
				

					
				<!-- end: TOP NAVBAR -->
				<div class="">
					<div class="wrap-content container" id="container">
						
						<div class="container-fluid">
						

									<div class="row">
								<div class="col-md-12">
								
									<table class="table table-hover" id="sample-table-1" style="margin:100px 0 0 0;">
										
										<?php
$sql=mysqli_query($con,"select * from patient where id='".$_GET['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>
										
											<tr>
												<th style="width:120px;">Registration No:</th>
												<td><?php echo $row['registration']; ?></td>
												<td></td>
												<td></td>
												<th style="width:50px;">Date:</th>
												<td style="width:90px;"><?php echo $row['date']; ?></td>
											</tr>
										
											<tr>
												<th style="padding-bottom:0;">Name:</th>
												<td style="padding-bottom:0;"><?php echo $row['name']; ?></td>
												
												<td style="padding-bottom:0;" colspan='3'></td>
												
											</tr>
											<tr>
												<th style="padding:0 8px;">Contact No:</th>
												<td style="padding:0 8px;"><?php echo $row['number']; ?></td>
												
												<td  style="padding:0 8px;" colspan='3'></td>
												
											</tr>
											
											<tr>
												<th style="padding:0 8px;">Address:</th>
												<td style="padding:0 8px;"><?php echo $row['address']; ?></td>
												<td style="padding:0 8px;" colspan='3'></td>
											</tr>
											<tr>
												<th style="padding:0 8px;">Diagnosis:</th>
												
												<td style="padding:0 8px;" colspan='5'></td>
											</tr>
											
											<tr>
												<th style="padding:0 8px;"></th>
												<td style="padding:0 8px;"><?php echo nl2br(htmlentities($row['problem'], ENT_QUOTES, 'UTF-8'));?></td>
												<td style="padding:0 8px;" colspan='3'></td>
											</tr>
											<button style="position:absolute;bottom:10px;right:10px;"><a href="print.php?id=<?php echo $row['id'];?>">Print</a></button>
											<?php 
$cnt=$cnt+1;
											 }?>
											
											
										
									</table>
								</div>
							</div>
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
