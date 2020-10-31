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

 #data
{
	height:40%;
width:70%;
font-size:110%;
color:#900C3F;
background:green;
}

#submit
	{
	height:60;
	width:210;
	color:blue;
	background:white;
	float:left;
	margin-left:40%;
	font-size:23;
	}
#submit:hover
	{
	color:#000080;
	background:#d9d9d9;
	font-size:25;
}
#check
		{
		width:70%;
		height:40%;
		color:green;
		font-size:95%;
		box-shadow:2px 2px 16px blue;
		}
</style>
</head>
<body>
<?php
$name = $_POST['name'];
$quali = $_POST['qualification'];
$mob = $_POST['mob'];
$email = $_POST['email'];
$class = $_POST['class'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$exp = $_POST['exp'];
$img = $_POST['img'];				

echo $dob;
$con=mysqli_connect("localhost","root","",'cms');

$sql="INSERT INTO `teacher`  VALUES 
('','$name','$email','','$quali','$mob','$class','$gender','$img','$exp')";

	if(mysqli_query($con,$sql))
	{
	echo '<center><br><br><br><br><font color="green" size="22">'."Data Inserted Successfully".'</font><br><br>';
	}	
	else 
		echo 'error';
}?>
<a href ="addfaculty.php"><button type id="submit" name="submit" >Back</button></a></center>
</body>
</html>