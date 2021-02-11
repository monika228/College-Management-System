<?php
		session_start();
?>
<html>
    <head>
	<title>syllabus</title>
<body>
						<?php
					
						 include 'header.php';
						 if(empty($_SESSION["mgmt"]))
						echo "";
					else
						 include 'lefthead.php';
						 ?>

.<br><br><br><br>						 
<a href="http://www.kanpuruniversity.org/syllabus/bca.pdf"><button class="b b1" name="month" data-aos="flip-up">BCA Syllabus</button></a>	
<a href="https://aktu.ac.in/syllabus.html"><button class="b b3" name="month" data-aos="flip-up">MCA Syllabus</button></a>		
<a href="http://www.kanpuruniversity.org/SYLLABUS/BBA-8july17.pdf"><button class="b b2" name="month"data-aos="flip-up">BBA Syllabus</button></a>	
<a href="https://aktu.ac.in/syllabus.html"><button class="b b4" name="month"data-aos="flip-up">MBA Syllabus</button></a>						 
						 
						 

</body>
</html>

<?php
		include 'footer.php';
?>