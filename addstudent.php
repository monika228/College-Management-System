<?php
	session_start();
	 if(empty($_SESSION["mgmt"]))
			header("location:index.php");
	else
{
?>
<html>
    <head>
	<title>add student</title>
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
<FORM ACTION="savestudent.php" METHOD="POST">
		<h2>Fill the Student information</h2>
		<br>
		NAME:
		<input type id="text" name="name"  required="required" autocomplete="off">
		
		<br><br>
		FATHER'S NAME : 
		<input type id="text" name="father"  required="required" autocomplete="off">
		<br><br>
		ROLL No:
		<input type id="text" name="roll"  maxlength="7" required="required" autocomplete="on">
		<br><br>
		EMAIL Id:
		<input type id="email" name="email"  required="required" autocomplete="off"> 
		<br><br>
		CLASS:  
		<select type id="number" name="class"><br><br>
					<option value="MCA">MCA</option>
					<option value="BCA">BCA</option>
					<option value="MBA">MBA</option>
					<option value="BBA">BBA</option>
					</select>	
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
        SEMESTER:
		<input type id="number" name="sem"  required="required">	
		<br><br>
		GENDER: 
		<input type="radio" name="gender" value="Male" required="required" checked="">Male <input type="radio" name="gender" value="Female" required="required">Female  
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		DOB: 
		<input type="date"  name="dob"  id="date"> <br>
		Mobile: 
		<input type id="text"  name="mob"  id="date"> 
		 	<br><br>
		<textarea id="box" name="add"  placeholder="Address" id="data"></textarea>
		<input type="file"  name="img" width="100" height="100"> </image>
		<br>
		
		<table width="600">
			<tr>
				<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</th>
				<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</th>
				<th><button class="button b3" >Add</button>
				</th>
				<th><a href ="home.php"><input type="button" class="button b2" value="Home"></a>
				</th>
			</tr>
		</table>
		
</form>
</div>
</body>
</html>
<?php
}
?>