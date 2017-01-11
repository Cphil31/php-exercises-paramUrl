<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index3.php?dateDebut">Debut</a>
	<a href="index3.php?dateFin">Fin</a>
	<?php 
	$dateDebut="2/05/2016";
	$dateFin="27/11/2016";

	if (isset($_GET['dateDebut'])) {
		echo $dateDebut;
	}
	if (isset($_GET['dateFin'])) {
		echo $dateFin;
	}
	?>

</body>
</html>