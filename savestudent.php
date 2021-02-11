<?php
	session_start();
	 if(empty($_SESSION["mgmt"]))
			header("location:index.php");
	else
{
?>
<html>
<head>
<style>

#submit
	{
	height:60;
	width:210;
	color:blue;
	background:white;
	float:left;
	font-size:23;
	}
#submit:hover
	{
	color:#000080;
	background:#d9d9d9;
	font-size:25;
}
</style>
</head>
<body>
<?php
$name = $_POST['name'];
$father = $_POST['father'];
$roll = $_POST['roll'];
$email = $_POST['email'];
$class = $_POST['class'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$add = $_POST['add'];
$img = $_POST['img'];
$mob=$_POST['mob'];	
$sem=$_POST['sem'];					

echo $dob;
$con=mysqli_connect("localhost","root","",'cms');

$sql="INSERT INTO `student` VALUES 
('','$name','$gender','$dob','$father','$class','$sem','$mob','$add','$roll','$img ')";


	if(mysqli_query($con,$sql))
	{
	echo '<center><br><br><br><br><font color="green" size="22">'."Data Inserted Successfully".'</font><br><br>';
	}	
	else 
		echo 'error';
}?>
<br><br><br><br>
<a href ="addstudent.php"><button type id="submit" name="submit" >Back</button></a></center>
</body>
</html>