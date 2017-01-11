<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<a href="index5.php?semaine">semaine</a>
	<a href="index5.php?home"></a>


	<?php 
	$semaine='12';
	$home='home'; 


	if (!isset($_GET['semaine'])) {

	}
	else {
		echo $semaine;
	}



	?>	
</body>
</html>