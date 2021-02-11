<html>
    <head>
	<title>Check Result</title>
	<style>
	

 #result
{
		width:45%;
		height:56%;
		font-size:26;
		color:blue;
		background:white;
		float:left;
		padding:2%;
		margin-top:2%;
		margin-left:20%;
		box-shadow:2px 5px 28px blue;
}
</style>
<body>
						<?php
						session_start();
						 include 'header.php';
						 ?>


<div id="result">
<FORM ACTION="studentresult.php" METHOD="POST">

<h5>
Year:-	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select id="text" name="year"  id="fullanme" required="required"><br><br>
	<option value="2021">2018</option>
	<option value="2020">2019</option>
	<option value="2019">2020</option>
	<option value="2018">2021</option>
	<option value="2017">2022</option>
	</select><br><br>
Roll No:-&nbsp;&nbsp;<input id="text" name="roll"  id="fullanme" required="required"><br><br>
Course:-&nbsp;&nbsp;<select id="text" name="class"  id="class" required="required"><br><br>
	<option value="MCA">MCA</option>
	<option value="BCA">BCA</option>
	<option value="MBA">MBA</option>
	<option value="BBA">BBA</option>
	</select>
	<br><br>
Semister:-	<select id="text" name="sem"  id="fullanme" required="required"><br><br>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	</select>
<br><br>
<button type id="submit" name="submit" >Check</button></form>
</h5>
</div>



</body>
</html>
<?php
		//include 'footer.php';
?>