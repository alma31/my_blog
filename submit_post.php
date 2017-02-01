<?php
require_once 'vendor/j4mie/idiorm/idiorm.php';
ORM::configure('mysql:host=localhost;dbname=my_blog');
ORM::configure('username','root');
ORM::configure('password','root'); ?>
<?php
$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$content = $_POST['content'];
?>

<?php 
if (empty($titre)) {
	echo "le champ titre doit etre rempli"."</br>";
}

if (empty($auteur)) {
	echo "le champ auteur doit etre rempli"."</br>";
}

if (empty($content)) {
	echo "le champ contenu doit etre rempli"."</br>";
}
?>

<?php 
$envoie = ORM::for_table('posts')->create();

$envoie->title = $titre;
$envoie->author = $auteur;
$envoie->content = $content;

$envoie->save();

?>

<?php
  header('Location: index.php');
  exit();
?>