<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index4.php?language=PHP">language</a>
	<a href="index4.php?serveur=LAMP">serveur</a>
	<a href="index4.php?home"></a>


	<?php 
	$language='language';
	$serveur='serveur';
	$home='home'; 


	if (!isset($_GET['language'])) {
	
	}
	else {
		echo $language;
	}
	if (!isset($_GET['serveur'])) {
			
	}
	else {
		echo $serveur;
	}


	?>	


	
</body>
</html>