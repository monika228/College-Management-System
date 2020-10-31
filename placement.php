<html>
<?php
session_start();
?>
    <head>
	<title>Top Recruiters</title>
	<style>
	

 #data
{
width:50%;
font-size:110%;
color:red;
background:white;
float:left;
padding:3%;
margin-top:4.5%;
margin-left:10%;
box-shadow:2px 5px 28px blue;
border-radius:33 11px 33 11px;
opacity:89%;
}


</style>
<body>
						<?php
						 include 'header.php';
						if(empty($_SESSION["mgmt"]))
						echo "";
					else
						 include 'lefthead.php';
						 ?>
						 
<div id="data">

<h2> MCA/BCA</h2>
<img src="images/activity/placement4.jpg" height="400" width="550">
<br><br>

<h2> MBA/BBA</h2>
<img src="images/activity/placement5.jpg" height="400" width="550">
<br><br>

</div>
</body>
</html>
<?php
	include 'footer.php'
?>