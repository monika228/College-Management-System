<html>
<head>
<link href="css/style.css" rel="stylesheet">
<style>

 #data
{
	width:70%;
	font-size:110%;
	color:#900C3F;
	background:white;
	float:left;
	padding:3%;
	margin-top:2%;
	margin-left:11%;
	box-shadow:2px 5px 28px blue;
	border-radius:33 11px 33 11px;
}

#check
		{
		width:70%;
		height:40%;
		color:green;
		font-size:95%;
		box-shadow:2px 2px 16px blue;
		}
</style>
</head>
<body>
<?php						
$year = $_POST['year'];
$roll = $_POST['roll'];
$sem = $_POST['sem'];
$class = $_POST['class'];
				$con=mysqli_connect("localhost","root","",'cms');
				
				$sql="SELECT * FROM `result` where r_id='$roll'";
				$a1=mysqli_query($con,$sql);
				$c1=mysqli_fetch_array($a1);
						
				$sql2="SELECT * FROM `student` where r_id='$roll'";
				$a2=mysqli_query($con,$sql2);
				$c2=mysqli_fetch_array($a2);
						
				$sql3="SELECT * FROM `subject` where sub_class='$class' AND sub_sem='$sem'";
				$a3=mysqli_query($con,$sql3);
				$c3=mysqli_fetch_array($a3);
if($c2['r_id'])
{
						 ?>
					 
	<div id="data">
	<img src="titleimg.jpg" height="130" width="100%"><br>

<table style="width:98%" >
<tr>
	<td colspan = "6"><hr></td>
</tr>
<tr> <th	colspan = "2">
<?php 
	echo '<img src="./images/student/'.$c2['s_photo'].'" height="100" width="100">';
?>
</th>
    <td colspan = "1" >	
				<b> Name:</b> <?php echo $c2['s_name'];?><br>
				<b>Father's Name:</b><?php echo $c2['s_father'];?><br>
				<b>Class:</b><?php echo $c2['s_class'];?>
	</td> 
	 
	<td colspan = "3" >
				<b> Roll No:</b> <?php echo $c2['r_id'] ?><br>
				<b> Enroll No:</b> EXM<?php echo $c2['r_id']?><br>
				<b> Semister :</b> <?php echo $c2['sub_sem'] ?>
	</td>
	
  </tr>
<tr><th colspan = "6"><hr></th>
</tr>
  <tr>
	<th>SL. No </th>
		<th>Code</th>
	<th>SUBJECT / PAPERS </th>

	<th>Sessional </th>
	<th>Practicals</th>
    <th>Suject Total</th>
</tr>

<?php
$num=1;
$pra=28;
$sum=0;
	while($c3=mysqli_fetch_array($a3))
						{?>					
<tr>
    <td width="3%"><?php echo $num;?></td>
    <td width="10%"><?php echo $c3['sub_alphabet'];?></td>
	<td><?php echo $c3['sub_name'];  
						
	echo '</td><td>&nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp; '. $c1['sub'.$num].'<br></td>';	
					
	echo '<td>&nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp; '. $pra.'<br></td>';

				$a=$c1['sub'.$num];
				$c=$a+$pra;
	echo '<td>&nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp; '.$c.'<br></td>';
					$num++;
					$sum=$sum+$c;
					}?>

</tr>




<tr><td colspan = "6"><hr></td>
</tr>
<tr>
		<td>RESULT :<?php 
						if($sum>=300)
						{
						echo '<h3>PASSED</h3>' ;}
					else{
					echo '<h3>FAIL</h3>';}
					?>
					</td>
		<td colspan = "3">&nbsp; &nbsp; &nbsp;<br>
			<center><div id="check">
				THE ABOVE STATEMENT OF MARKS IS COMPUTER<br>
				GENERATED AND IT CAN BE VERIFIED FROM UNIVERSITY<br>
				 WEBSITE - www.mycollege.org<br>
			</div><br></center>
		</td>
		<td > 
			TOTAL:<br>

		</td>
		<td>
			<?php echo $sum ; ?> / 600<br>

		</th>
</tr>
<tr>
	<th colspan = "6"><hr></th>
</tr>
  
</table>
<h2>NOTE :</h2> 	 
	 <p> 1. 	TO PASS, A CANDIDATE MUST OBTAIN A MINIMUM OF 35% IN THEORY + INTERNAL ASSESSMENT AND 45% IN AGGREGATE.<br></p>
  	 <p> 2. 	There shall be First Division on securing minimum 60% marks, Second Division minimum 50% marks and below 60% marks.<br></p>
  	 <p> 3. 	In Case a candidate is shown Absent in any paper, subject or subjects. he/she should represent within one month from the date of issue of the Marksheet. No Claim shall be accepted thereafter.<br></p>
  	 <p> 4. 	If a candidate is not satisfied with his/her marks, he/she should apply for scrutiny of his/her result as per the rules University within one month from the date of declaration of the results. <br></p>
	 <?php
}
	else
		echo '<center><br><br><br><br><br><br><br><br><br><hr width="40%" color="red"><hr width="40%" color="green"><font color="red" size="129">result not found</font><hr width="40%" color="green"><hr width="40%" color="red"><br><br>';
		echo '<a href ="checkresult.php"><button type id="submit" > Back</button></a></center>
		';
	
		?>

</body>
</html>
