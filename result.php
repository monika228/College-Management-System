<html>
    <head>
	<title>Add Result</title>
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
#text
     {  width:50%;
		height:9%;
        color:blue;
		font-color:green; 
		font-size:24;
		float:right;
		margin-right:60;
		BORDER:2px solid blue;
	}

	
#submit
	{
		width:170;
		height:50;
		color:green;
		BORDER:2px solid green;
		font-size:22;
		margin-left:100;
		}
#submit:hover
	{
		color:green;
		BORDER:2px solid blue;
		font-size:26;
		}

</style>
<body background="images/background.jpg">
						<?php
						session_start();
						 //include 'header.php';
						 ?>


<div id="data">
<FORM ACTION="saveresult.php" METHOD="POST">
<table>
<tr>
<th colspan="2">
<br><br>
Roll No:-&nbsp;&nbsp;<input type id="text" name="roll" autocomplete="off" required="required"><br><br><br>
</th>
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
<td colspan="2"><br><br>
<button type id="submit" name="submit" >Add</button></form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type id="submit"><a href ="home.php">Home</a></button>
</th>
</tr>
</table>
</div>
</body>
</html>