<?php
session_start();
?>
<html>
    <head>
	<title>principal</title>
	<link href="css/style.css" rel="stylesheet">
<body>
	<?php
		 include 'header.php';
		 if(empty($_SESSION["mgmt"]))
			echo "";
		 else
			include 'lefthead.php';
	?>


<div class="data">
<h1 data-aos="zoom-out-up">Dr. Anrnab Singh</h1>
<h3 data-aos="zoom-out-up">Phd.(Education)</h3><hr>
		<img src="images/teacher/principal.jpg" height="220" width="170" data-aos="zoom-out-up">
		<img src="images/colg/th.jpg" height="220" width="540" data-aos="zoom-out-up" >

<b data-aos="zoom-out-up">Dreams don’t come true, they are true, what is required is only an admissible dais and conscious mentoring because success betides when availability meets desperate necessities.</b><br><br>
<p data-aos="zoom-out-up"> Encouraging young desires to be better, inculcating the zeal to be the best and guiding students to reach a level higher is true graduation of every student and their faculties. “What do I want ?” and “How do I get it ?”, is so much a better question than just saying, “I don’t want.” because commons wait for luck but leaders know no waiting. At MY INSTITUTE , we try to empower students with practical know how, developing them into leaders than just teaching them books as learning should be a furtherance in building scholarly youth with ceaseless opportunities grasped with self talent. A dream seen being transformed to a reality is actually the relationship a teacher shares with students. MY INSTITUTE  provides a highly living environment that encourages interaction and camaraderie to all. We are trying to contribute in building an employed nation, we are shaping future of the youth, we are realistically transforming wishes…yes, we are educating.</p>
<b data-aos="zoom-out-up">‘We are not at the peril of educating, if it is convocation of excellence and success’.</b>

</div>
</body>
</html>
<?php
		include 'footer.php';
?>