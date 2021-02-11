<?php
	session_start();
	 if(empty($_SESSION["mgmt"]))
			header("location:index.php");
	else
{
?>
<html>
    <head>
	<title>Add Course</title>
	<link href="css/style.css" rel="stylesheet">
	<style>	
	body{
		background:white;
		}	
#txt {display:none;color:red}			
	</style>
<body>
<div id="ln"></div>
<div id="blank"></div>
<div id="main90">
<FORM ACTION="savecourse.php" METHOD="POST">
	
<p id="txt">WARNING! Caps lock is ON.</p>
		<h2>Add Courses</h2><hr color="red" width="70%"><hr color="green" width="70%">
		<b>COURSE NAME:
		<input id="text" name="course" placeholder="MCA,BCA,BBA,MBA.." required="required">
		<p id="txt">WARNING! Caps lock is ON.</p>
		<br><br>
		Semister:-	<select id="text" name="sem" required="required"><br><br>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					</select>
		<br><br>

		Subject 1 :<input id="text" name="sub1" required="required"><br><br>		
		Subject 2 :<input id="text" name="sub2"  required="required"><br><br>
		Subject 3 :<input id="text" name="sub3"  required="required"><br><br>
		Subject 4 :<input id="text" name="sub4"  required="required"><br><br>
		Subject 5 :<input id="text" name="sub5"  required="required"><br><br>
		
		Elective Subject 1 :<input type id="text" name="sub6" ><br><br>		
		Elective Subject 2 :</b><input type id="text" name="sub7" ><br><br>
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
		</table>
	
</FORM>
</div>
<script>
var input = document.getElementById("text");
var text = document.getElementById("txt");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>

</body>
</html>
<?php
}
?>