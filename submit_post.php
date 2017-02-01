<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
	$titre = $_POST['title'];
	$auteur = $_POST['author'];
	$article = $_POST['newArticle'];
	$dateNow = date('Y-m-d');
	echo $dateNow;

	?>
	<div>Titre : <?php echo htmlspecialchars($titre); ?></div>
	<div>Auteur : <?php echo htmlspecialchars($auteur); ?></div>
	<div>Texte : <?php echo htmlspecialchars($article); ?></div>
	<?php 
	

	?>

</body>
</html>