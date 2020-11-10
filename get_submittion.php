<?php
include('include/config.php');

if(!empty($_POST["numbersearch"])) 
{

 $sql=mysqli_query($con,"select * from patient where number = '".$_POST['numbersearch']."'");
 
	$count=0;
	while($row=mysqli_fetch_array($sql)){
	echo "<span style='color:red;float:right;'> Number Exist</span>";
	break;
 }
 
}

// if(!empty($_POST["numbersearch"])) 
// {

 // $sql=mysqli_query($con,"select * from patient where number LIKE '".$_POST['numbersearch']."%'");
 // echo "<div class='container'>";
 // $count=0;
 // while($row=mysqli_fetch_array($sql)){
	// echo "<div class='searchstyle-buttonstying'>".++$count."</div>";
	// echo "<div class='row'>";
	// echo "<div class='col-md-3'><p><b>Registeration Number</b></p></div>";
	// echo "<div class='col-md-3'><p>".$row['registration'].'</p></div>';
	// echo "<div class='col-md-3'><p><b>Date</b></p></div>";
	// echo "<div class='col-md-3'><p>".$row['date'].'</p></div>';
	// echo "</div>";
	
	// echo "<div class='row'>";
	// echo "<div class='col-md-3'><p><b>Name</b></p><p><b>Address</b></p></div>";
	
	// echo "<div class='col-md-3'><p>".$row['name']."</p><p>".$row['address']."</p></div>";
	
	// echo "<div class='col-md-3'><p><b>Contact No</b></p><p hidden><b>Date</b></p></div>";
	
	// echo "<div class='col-md-3'><p>".$row['number']."</p><button><a href='print.php?id=".$row['id']."'>Print</a></button></div>";
	// echo "</div>";
	// echo "<hr style='margin-bottom:60px;'>";

 // }
 // echo "</div>";
// }

if(!empty($_POST["sall"])) 
{

 $sql=mysqli_query($con,"select * from patient ORDER BY id DESC");
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
	
	echo "<div class='col-md-3'><p>".$row['number']."</p><button><a href='print.php?id=".$row['id']."'>Print</a></button></div>";
	echo "</div>";
	echo "<hr>";

 }
 echo "</div>";
}


if(!empty($_POST["doctor"])) 
{

 $sql=mysqli_query($con,"select docFees from doctors where id='".$_POST['doctor']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}
}

?>

