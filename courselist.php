<?php
	session_start();
	if(empty($_SESSION["mgmt"]))
		header("location:index.php");
	else
{
?>
<html>
    <head>
	<title>List of Course</title>
	<style>

#submit{
color:blue;
BORDER:2px solid blue;
font-size:120%;
}

</style>
<body>
						<?php
						 include 'header.php';
						 ?>
.<br>
<center>						

<?php
$course=$_POST['course'];

$con=mysqli_connect("localhost","root","",'cms');
$i=1;

echo '<h4><font size="8">'.$course.'</font></h4>';

while($i<=6)
{
			$sql="SELECT * FROM `subject` where sub_class='$course' AND sub_sem='$i'";
			$a=mysqli_query($con,$sql);

			echo '<table class="tble" width="70%" data-aos="zoom-in-up">
			<tr><th width="100"> Sem  </th>
			<th> Class </th>
			<th>  Code</b></u> </th>
			<th width="600"> Name</b></u> </th>
			</tr>
			';
			while($c=mysqli_fetch_array($a))
			{	
				echo  '<tr><td> '.$c['sub_sem'].' </td>
					<td>  '.$c['sub_class'].' </td>
					<td> '.$c['sub_alphabet'].' </td>
					<td> '.$c['sub_name'].' </td>
					</tr>
					';
			  	}
			echo '</table><br><br>';
			$i++;
}}

?>
</center>

</body>
</html>
<?php
		include 'footer.php';
?>