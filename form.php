<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="submit_post.php" method="post">
	<input type="hidden" name="author" value="author">
		<label for="title">Titre
			<input type="text" name="title" id="title">
		</label>
		<label for="author">Auteur
			<input type="text" name="author" id="author">
		</label>
		<label for="newArticle">Nouvel article</label>
		<textarea name="newArticle" id="newArticle" cols="10" rows="2">
		</textarea>
		<button type="submit_post">Valider</button>
	</form>
</body>
</html>