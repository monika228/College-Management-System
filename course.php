<?php
	session_start();
	 if(empty($_SESSION["mgmt"]))
			header("location:index.php");
	else
{
?>
<html>
    <head>
	<title>Courses</title>
	<style>
	 #sub
	{
		height:60;
		width:210;
		color:blue;
		background:white;
		float:left;
		font-size:23;
	}
	 #sub:hover
	{
		color:#000080;
		background:#d9d9d9;
		font-size:24;
	}
</style>
<body>
						<?php
						 include 'header.php';
                     include 'lefthead.php';
						 ?>
.<br><br><br>				 <center>
<table>
<tr><th>
<a href="addcourse.php" ><button id="sub"  data-aos="flip-left"><font color="green">Add Course</font></button></a>					 	
</th>
<th>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</th>
<th>
<form action="courselist.php" data-aos="flip-left" method="POST"><button id="sub">
Manage Course</button></th><th>
					<select id="sub" data-aos="flip-left" name="course">
					<option value="MCA">MCA</option>
					<option value="BCA">BCA</option>
					<option value="MBA">MBA</option>
					<option value="BBA">BBA</option>
					</select>
</form>	
</th></tr></table>	 
</center>

						
</body>
</html>
<?php
}
		include 'footer.php';
?>