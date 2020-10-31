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
	BORDER:2px solid blue;
	font-size:23;
	}
#submit:hover
	{
	color:#000080;
	background:#d9d9d9;
	font-size:25;
	BORDER:2px solid green;
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
$roll = $_POST['roll'];						
$s[1] = $_POST['m1'];
$s[2] = $_POST['m2'];
$s[3] = $_POST['m3'];
$s[4] = $_POST['m4'];
$s[5] = $_POST['m5'];
$s[6] = $_POST['m6'];
$s[7] = $_POST['m7'];
$s[8] = $_POST['p1'];
$s[9] = $_POST['p2'];
$s[10] = $_POST['p3'];
$s[11] = $_POST['p4'];
$s[12] = $_POST['p5'];
$s[13] = $_POST['p6'];
$s[14] = $_POST['p7'];

echo ' ';

$con=mysqli_connect("localhost","root","",'cms');
$total=0;
for($i=1;$i<15;$i++)
	$total=$total+$s[$i];

$sql="INSERT INTO `result` VALUES ('$roll','$total','$s[1]','$s[2]','$s[3]','$s[4]','$s[5]','$s[6]','$s[7]','$s[8]','$s[9]','$s[10]','$s[11]','$s[12]','$s[13]','$s[14]')";
	mysqli_query($con,$sql);	
	echo '<center><br><br><br><br><font color="green" size="22">'."Data Inserted Successfully".'</font><br><br>';	
}?>
<br><br>
<a href ="result.php"><button type id="submit" name="submit" >Back</button></a></center>
</body>
</html>