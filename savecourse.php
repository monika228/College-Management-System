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

/////////////////////session
$course = $_POST['course'];
$sem = $_POST['sem'];
						
$s[1] = $_POST['sub1'];
$s[2] = $_POST['sub2'];
$s[3] = $_POST['sub3'];
$s[4] = $_POST['sub4'];
$s[5] = $_POST['sub5'];
$s[6] = $_POST['sub6'];
$s[7] = $_POST['sub7'];

$con=mysqli_connect("localhost","root","",'cms');
				
	for($i=1;$i<=7;$i++)
	{		
	$code[$i]=$course.''.$sem.'0'.$i;

	$sql="INSERT INTO subject(`sub_id`, `sub_name`, `sub_alphabet`, `sub_class`, `sub_sem`) VALUES ('','$s[$i]','$code[$i]','$course','$sem')";
	mysqli_query($con,$sql);	
	}
	echo '<center><br><br><br><br><font color="green" size="22">'."Data Inserted Successfully".'</font><br><br>';	
}?>
<center><a href="course.php"><button id="submit">Back</button></a><center></center>
</body>
</html>