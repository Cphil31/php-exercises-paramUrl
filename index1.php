<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- exercices 1 et 2 -->
	<a href="index1.php?nom">nom</a>
	<a href="index1.php?prenom">prenom</a>
	
<?php 

$nom="Neymar";
$prenom="Jean";

if (isset($_GET['nom'])){
echo $nom;
}
if (isset($_GET['prenom'])){

echo $prenom;

}

 ?>
</body>
</html>