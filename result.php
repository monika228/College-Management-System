<html>
    <head>
	<title>Add Result</title>
	<link href="css/style.css" rel="stylesheet">
	<style>
	

#data
{
	font-size:103%;
	width:50%;
	color:blue;
	background:white;
	float:left;
	padding:2%;
	margin-left:20%;
	margin-top:2%;
	box-shadow:2px 5px 28px blue;
	border-radius:33 11px 33 11px;
	opacity:0.9;
}
</style>
<body background="images/background.jpg">
						<?php
						session_start();
						?>


<div id="data">
<table>
<tr>
<FORM ACTION="saveresult.php" METHOD="POST">
<th colspan="5">
<br><br>
Roll No:-&nbsp;&nbsp;<input type id="text" name="roll" autocomplete="off" required="required"><br><br><br>
</th colspan="2">
</tr>
<tr>
<td>
Subject 1:-<input type id="text" name="m1" autocomplete="off" required="required"><br><br>
Subject 2:-<input type id="text" name="m2" autocomplete="off" required="required"><br><br>
Subject 2:-<input type id="text" name="m3" autocomplete="off" required="required"><br><br>
Subject 4:-<input type id="text" name="m4" autocomplete="off" required="required"><br><br>
Subject 5:-<input type id="text" name="m5" autocomplete="off" required="required"><br><br>
Practical 1:-<input type id="text" name="m6" autocomplete="off" required="required"><br><br>
Practical 2:-<input type id="text" name="m7" autocomplete="off" required="required"><br><br>
</td>
<td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
</td>
<td colspan="2">
Internal 1:-<input type id="text" name="p1" autocomplete="off" required="required"><br><br>
Internal 2:-<input type id="text" name="p2" autocomplete="off" required="required"><br><br>
Internal 3:-<input type id="text" name="p3" autocomplete="off" required="required"><br><br>
Internal 4:-<input type id="text" name="p4" autocomplete="off" required="required"><br><br>
Internal 5:-<input type id="text" name="p5" autocomplete="off" required="required"><br><br>
Internal 6:-<input type id="text" name="p6" autocomplete="off" required="required"><br><br>
Internal 7:-<input type id="text" name="p7" autocomplete="off" required="required"><br><br>
</th>
</tr>
<tr>

<td colspan="3">
<button class="button b3" >Add</button></form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td colspan="2">
<a href ="home.php"><input type="button" class="button b2" value="Home"></a>
</td>
</tr>
</table>





</div>
</body>
</html>