<?php 
require'vendor/autoload.php';
ORM::configure('mysql:host=localhost;dbname=my_blog;charset=utf8');
ORM::configure('username', 'root');
ORM::configure('password', 'root');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Mon blog</h1>
	<?php 
	$articles = ORM::for_table('posts')->find_many();
	foreach ($articles as $article) :?>

	<h2><?php echo $article->title?></h2>
	<div><?php echo $article->author ?></div>
	<div><?php echo $article->content ?></div>
	<div>le <?php echo $article->created_at ?></div>
<?php endforeach; ?>
<div><h3>Poster un commentaire</h3>
	<form action="form.php" method="post">
		<button>Entrer</button>
	</form>
</div>
</body>
</html>