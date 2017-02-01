<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Creation article</title>
</head>
<body>
<h1>Crée un article</h1>
<form action="submit_post.php" method="POST">
	<label for="titre">Titre de l'article</label>
	<input name="titre" id="titre" type="text">
	<label for="auteur">Auteur</label>
	<input name="auteur" id="auteur" type="text">
	<label for="content">Contenu</label>
	<input name="content" id="content" type="text">
	<input type="submit" value="Envoyer" />
</form>
</body>
</html>