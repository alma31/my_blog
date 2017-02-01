<?php 
require_once 'vendor/j4mie/idiorm/idiorm.php';
ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username','root');
ORM::configure('password','root');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>My Blog</title>
</head>
<body>
<h1>Mon Blog</h1>
<?php
$tab = ORM::for_table('posts')->find_many(); 
foreach ($tab as $value) : ?>
<h2><?= $value->title;?></h2>
<h3><?= $value->content;?></h3>
<h4><?= $value->author;?> crée le <?= $value->created_at;?></h4>
<form action="form.php" method="GET"><button>Editer</button></form>
<?php endforeach;?>
<br />
<br />
<a href="form.php"><button>Ajouter un article</button></a>
</body>
</html>