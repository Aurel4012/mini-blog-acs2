<?php
	// Le contôleur des articles si id_article existe formulaire d'edition préremplit, sinon formulaire d'ajout
	// echo getcwd(); pour afficher l'url courante du dossier
	require_once "model/class_article.php";
	require_once "model/class_article_query.php";
	function getArticle($id_article,$bdd)
	{
		$articlequery = new Article_query($bdd);
		$article = $articlequery->getArticle($id_article);
		return $article;
	}
	
	require_once "model/model-article.php";
	//  getArticle($id_article,$bdd);
	// var_dump(getArticle($id_article,$bdd));
?>
 
    