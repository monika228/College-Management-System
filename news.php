<html>
    <head>
	<title>Events/News</title>

<body>
				<?php
				session_start();
					include 'header.php';
				if(empty($_SESSION["mgmt"]))
							echo "";
						else
						 include 'lefthead.php';

$host="localhost";
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password,'cms');

$query = mysqli_query($con,"select * from notice");
//$row = mysqli_fetch_row($query);
//echo $row;

?>
<div class="data" data-aos="fade-left" >
<table class="tble"><?php
while($c=mysqli_fetch_array($query))
{	
?>
<tr data-aos="fade-down" >
<td>
 <?php
	echo '**********************'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp';
	echo $c['date'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp**********************<br>';
	
	echo $c['data'].'<br>';
	
}?>	
</td></tr></table></div>

</body>
</html>
	<?php
	 include 'footer.php';
	?>