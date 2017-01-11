<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<a href="index6.php?batiment=12">batiment</a>
	<a href="index6.php?salle=101">salle</a>


	<?php 
	$batiment='batiment 12';
	$salle='salle 101'; 


	if (!isset($_GET['batiment'])) {

	}
	else {
		echo $batiment;
	}

	if (!isset($_GET['salle'])) {

	}
	else {
		echo $salle;
	}
	?>	

</body>
</html>