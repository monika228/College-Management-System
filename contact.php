<html>
    <head>
	<title>Contact Us</title>
	<style>
	

 #squar25
{
width:24%;
height:35%;
color:red;
background:white;
float:left;
margin-top:2%;
margin-left:9%;
padding:1%;
box-shadow:2px 5px 28px blue;
border-radius:33% 0px 33% 0px ;
}
 #squar25:hover
{
font-size:102%;
color:blue;
background:FFFFCC;
box-shadow:2px 5px 28px blue;
}
h4{
	font-size:24;
	margin:10;
}

</style>
<body>
						<?php
						session_start();
						
						 include 'header.php';
						if(empty($_SESSION["mgmt"]))
							echo "";
						else
							 include 'lefthead.php';
						 ?>
					
<center>
<div id="squar25" data-aos="zoom-out-right">
			<h4>Contact</h4>
<hr>
    255, A Block, Naubasta, Kanpur-208017<br>
    Phone : +91-512-1234567, 1234577, 1234576<br>
    Fax : +91-512-1234567<br>
    Email : mycomp@mycolg.org, mymgmt@mycolg.org<br>
</div>

<div id="squar25" data-aos="zoom-out-left">
		 <h4>   Training & Placement</h4>
<hr>

Poonam Mishra
+91-9912345678, +91-8812345678
placements@mycolg.org

</div>


<div id="squar25" data-aos="zoom-out-down">
		<h4>For MCA & BCA</h4>
 <hr>
Manju Singh<br>
+0512-1223456<br>
mycomp@mycolg.org<br>
</div>
<div id="squar25" data-aos="zoom-out-up">
			<h4>For MBA & BBA</h4>
<hr>
    Anmol Nigam<br>
+91-987456321<br>
mymgmt@mycolg.org<br>
</div>


</center>
</body>
</html>
<?php
		include 'footer.php';
?>