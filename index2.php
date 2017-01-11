<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<a href="index2.php?nom">nom</a>
	<a href="index2.php?prenom">prenom</a>
	<?php 
	$nom='Nemare';
	$prenom='Jean';
	$home='home';


	if (!isset($_GET['nom'])) {
		
	}
	else{
		echo $nom;
	}
	if (!isset($_GET['prenom'])) {
		
	}
	else{
		echo $prenom;
	}


	?>


</body>
</html>