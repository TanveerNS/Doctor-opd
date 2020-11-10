<?php
include('include/config.php');
if(!empty($_POST["sdate"])) 
{

 $sql=mysqli_query($con,"select * from patient where date LIKE'".$_POST['sdate']."%' ORDER BY id DESC");
 echo "<div class='container'>";
 $count=0;
 while($row=mysqli_fetch_array($sql)){
	 echo "<div class='searchstyle-buttonstying'>".++$count."</div>";
	 echo "<div class='row'>";
	echo "<div class='col-md-3'><p><b>Registeration Number</b></p></div>";
	echo "<div class='col-md-3'><p>".$row['registration'].'</p></div>';
	echo "<div class='col-md-3'><p><b>Date</b></p></div>";
	echo "<div class='col-md-3'><p>".$row['date'].'</p></div>';
	echo "</div>";
	
	echo "<div class='row'>";
	echo "<div class='col-md-3'><p><b>Name</b></p><p><b>Address</b></p></div>";
	
	echo "<div class='col-md-3'><p>".$row['name']."</p><p>".$row['address']."</p></div>";
	
	echo "<div class='col-md-3'><p><b>Contact No</b></p><p hidden><b>Date</b></p></div>";
	
	echo "<div class='col-md-3'><p>".$row['number']."</p><button><a target='_blank' href='details.php?id=".$row['id']."'>Details</a></button></div>";
	echo "</div>";
	echo "<hr>";

 }
 echo "</div>";
}

?>

