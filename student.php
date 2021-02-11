<?php
	session_start();
	 if(empty($_SESSION["mgmt"]))
			header("location:index.php");
	else
{
?>
<html>
    <head>
	<title>student</title>
		<?php
		include 'header.php';			
		include 'lefthead.php';
		?>
<body>
<style>
	 #sub1
	{
		height:60;
		width:210;
		color:blue;
		background:white;
		float:left;
		font-size:22;
	}
	 #sub1:hover
	{
		color:#000080;
		background:#d9d9d9;
		font-size:23;
	}
</style>
.<br><br><br><center>					 
<table>
	<tr>
		<th>			
			<a href="addstudent.php"><button id="sub1" data-aos="zoom-out-up"><font color="green">Add Student</font></button></a>
		</th>
		<th>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</th>
		<th>				 
		<form action="mca.php" method="POST" data-aos="zoom-out-up">
		<button id="sub1" data-aos="zoom-out-up">Manage Student</button>
		</th>
		<th>
				<select id="sub1" name="course" data-aos="zoom-out-up">
				<option value="MCA">MCA</option>
				<option value="BCA">BCA</option>
				<option value="MBA">MBA</option>
				<option value="BBA">BBA</option>
				</select>
		</th>		
		</form>			 
		</td>
	</tr>
</table>
</center>
</body>
</html>
<?php 
	} 
	include 'footer.php';
?>