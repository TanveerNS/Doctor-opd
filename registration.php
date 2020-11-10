<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$number=$_POST['number'];
$address=$_POST['address'];
$diagnosis=$_POST['diagnosis'];
$date=$_POST['date'];

$registration=$_POST['registration'];

$query=mysqli_query($con,"insert into patient(registration, name, number, address, date, problem) values('$registration','$name','$number','$address','$date','$diagnosis')");
	if($query)
	{
		echo "<script>alert('Patient Registration Completed');</script>";
		echo "<script>window.open('success.php', '_blank');</script>";
		echo "<script>window.location.href=window.location.href;</script>";
	}

}

$registration=mysqli_query($con,"SELECT * FROM patient ORDER BY ID DESC LIMIT 1");

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
function getdoctor(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'specilizationid='+val,
	success: function(data){
		$("#doctor").html(data);
	}
	});
}
</script>	


<script>
function getfee(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'doctor='+val,
	success: function(data){
		$("#fees").html(data);
	}
	});
}
</script>

<script>
function getnumber(val) {
	$.ajax({
	type: "POST",
	url: "get_submittion.php",
	data:'numbersearch='+val,
	success: function(data){
		$("#error").html(data);
	}
	});
}
</script>
	
<script>
function validatenumber(val) {
if(val.length > 10){ 

	var li = document.getElementById('ifnumber');
	
	li.value = li.value.slice(0, li.maxLength);

}
}
</script>



	</head>
	<body style="background-color:#fff;>
		<div id="app">		
		
			<div class="app-content">
			
			
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" style="margin:0 80px;">
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-12">
									<h1 class="mainTitle" style="text-align:center;font-weight: 500;">Patient Registration</h1>
	
								</div>
								
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												<!--div class="panel-heading">
													<h5 class="panel-title"></h5>
												</div-->
												<div class="panel-body">
														
													<form role="form" name="book" method="post" >
														
														<div class="col-sm-6"> 	
															<div class="form-group">
															<label for="DoctorSpecialization">
																Registration No.
															</label>
															<span><?php
																$rgstn=mysqli_query($con,"SELECT * FROM patient ORDER BY ID DESC LIMIT 1");
																$row=mysqli_fetch_array($rgstn);
																$regist = $row['registration']+1;
																echo "<b>";
																echo $row['registration']+1;
																echo "</b>";
															?></span>
															<input class="" type="text" value="<?php echo $regist ?>" name="registration" hidden>
														</div>
														</div>
														
														
														<hr style="clear:both;">

														<div class="col-sm-6"> 	
															<div class="form-group">
															<label for="DoctorSpecialization">
																Name
															</label>
															<input class="form-control" type="text" name="name" style="text-transform: capitalize;" required> 
														</div>

														<div class="form-group">
															<label  for="DoctorSpecialization" style="width:100%;">
																Contact No <span id="error"></span>
															</label>
															<input id="ifnumber" onKeyDown="validatenumber(this.value);" class="form-control" type="number" name="number" onkeyup="getnumber(this.value);" required> 
														</div>
														</div>
		
														<div class="col-sm-6"> 
														<div class="form-group">
															<label for="DoctorSpecialization">
																Address
															</label>
															<input class="form-control" type="text" name="address" style="text-transform: capitalize;" required> 
														</div>
														<div class="form-group">
															<label for="DoctorSpecialization">
																Date
															</label>
															<input class="form-control" type="date" name="date" value="<?php echo date("Y-m-d");?>" required> 
														</div>													
														</div>	
														  		
														<div class="col-sm-12"> 
														<div class="form-group">
															<label for="DoctorSpecialization">
																Diagnosis
															</label><br>
															<textarea name="diagnosis" style="width:100%; height:130px;" required> </textarea>
														</div>
																										
														</div>
														
														<button type="submit" name="submit" class="btn btn-o btn-primary" style="float:right;margin-right:20px;width:30%;">
															Submit
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<button><a href="home.php">&#8592; Back to Home</a></button>
									<button style="float:right;"><a href="history.php">List &#8594;</a></button>
									</div>
								</div>
							
						<!-- end: BASIC EXAMPLE -->
						
						
						
						
						
						
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	
			<!-- end: FOOTER -->
		

			
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

			$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
		</script>
		  <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
