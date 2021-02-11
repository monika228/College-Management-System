<?php
	session_start();
	 if(empty($_SESSION["mgmt"]))
			header("location:index.php");
	else
{
?>
<html>
    <head>
	<title>faculty</title>	
	<link href="css/style.css" rel="stylesheet">
	<style>	
	body{
		background:white;
		}			
	</style>
<body>
<div id="ln"></div>
<div id="blank"></div>
<div id="main90">
<FORM ACTION="savefaculty.php" METHOD="POST">
		<h2>Fill/Edit the Faculty information</h2><br>
		NAME:
		<input id="text" name="name"  required="required" autocomplete="off">
		<br><br>
		QUALIFICATION : 
		<input id="text" name="qualification"  required="required" autocomplete="off">
		<br><br>
		MOBILE
		<input type id="text" name="mob"  maxlength="12" required="required" autocomplete="on">
		<br><br>
		EMAIL Id:
		<input type id="email" name="email"  required="required" autocomplete="off"> 
		<br><br>
		BRANCH:  
		<select id="text" name="class"><br><br>
					<option value="MCA/BCA">MCA/BCA</option>				
					<option value="MBA/BBA">MBA/BBA</option>
					</select>				
		<br><br>
		GENDER: 
		<input type="radio" name="gender" value="Male" required="required" checked="">Male <input type="radio" name="gender" value="Female" required="required">Female  
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		DOB: 
		<input type="date"  name="dob"  id="date"> <br><br>
		<textarea id="box" name="exp"  placeholder="Experience " id="data"></textarea>
		<input type="file"  name="img" width="100" height="100"> </image>
		<br>
		<table width="500">
			<tr>
				<th>&nbsp;&nbsp;&nbsp;&nbsp;
				</th>
				<th><button class="button b3">Add</button>
				</th>
				<th><a href ="home.php"><input type="button" class="button b2" value="Home"></a>
				</th>
			</tr>
</center>
</FORM>
</div>
</body>
</html>
<?php
}
?>