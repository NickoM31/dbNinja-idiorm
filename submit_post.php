<?php 
require'vendor/autoload.php';
ORM::configure('mysql:host=localhost;dbname=my_blog;charset=utf8');
ORM::configure('username', 'root');
ORM::configure('password', 'root');
?>

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
	$comment = $_POST['newArticle'];
	$dateNow = date('Y-m-d H:i:s');
	echo $dateNow;

	?>
	<div>Titre : <?php echo htmlspecialchars($titre); ?></div>
	<div>Auteur : <?php echo htmlspecialchars($auteur); ?></div>
	<div>Texte : <?php echo htmlspecialchars($comment); ?></div>
	<?php 
	
	$person = ORM::for_table('posts')->create();
	
	$person->title = $titre;
	$person->author = $auteur;
	$person->content = $comment;
	$person->created_at = $dateNow;
	$person->save();
	?>
	<form action="index.php">
		<button>Retour au menu</button>
	</form>

</body>
</html>