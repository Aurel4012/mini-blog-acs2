<?php
echo getcwd().'<br>';
require_once '../model/class_article.php';
require_once '../model/class_article_query.php';
if (isset($_GET['id_article'])){
	$id_article = $_GET['id_article'];
}
	//Connexion base de données
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=mini-blog', 'root', '');
		$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	} 
	$aq = new Article_query($bdd);
    $article = $aq->deleteArticle($id_article);

// rediriger vers liste des messages avec message de confirmation
    $_SESSION['flash'] = "Le message a bien été supprimé.";
    // header('Location: index.php');
 ?>