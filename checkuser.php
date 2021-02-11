<html><head><title>checking</title></head><style>
#wrong
{ 
  margin-top:9%;
  width:67%;
  color:white;
  background-color:black;
  font-size:28;
  opacity:0.7;
  
}
</style> <body> 
<center><div id="wrong"><br><br><br><br>
<?php

$name = $_POST['username'];
$password = $_POST['password'];
$member = $_POST['member'];
echo $name.'     '.$password.'                                 ';
session_start();
$con=mysqli_connect("localhost","root","",'cms');

if($member=='admin')
	{
		$sql = "SELECT * FROM admin WHERE a_usename='$name' AND a_password='$password'";
		$res = mysqli_query($con,$sql);
		echo $sql;
		$count = mysqli_num_rows($res);
			if($count==1)
				{		
					$_SESSION['mgmt']=$name;
					header("location:home.php");
				}
			else
				{
					echo "<font color='red'>Username or Password is incorrect</font>";
				}
	}
else if($member=='faculty')
	{
		$sql = "SELECT * FROM teacher WHERE t_email='$name' AND t_password='$password'";
		$res = mysqli_query($con,$sql);
		echo $sql;
		$count = mysqli_num_rows($res);
			if($count==1)
				{		
					$_SESSION['mgmt']=$name;
					header("location:home.php");
				}
			else
				{
					echo "<font color='red'>Username or Password is incorrect</font>";
				}
	}		

?>
</div>
</center>
</body>
</html>