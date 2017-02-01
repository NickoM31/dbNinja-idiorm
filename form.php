<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="submit_post.php" method="post">
	<label for="title">Titre
			<input type="text" name="title" id="title">
		</label>
		<label for="author">Auteur
			<input type="text" name="author" id="author">
		</label>
		<label for="newArticle">Nouvel article</label>
		<textarea name="newArticle" id="newArticle" cols="30" rows="10">
		</textarea>
		<input type="submit" name="Go">
	</form>
</body>
</html>