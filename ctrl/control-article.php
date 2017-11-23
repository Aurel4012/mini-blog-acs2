<?php

	require_once "model/class_article.php";
	require_once "model/class_article_query.php";
	
	function getArticle($id_article,$bdd)
	{
		$articlequery = new Article_query($bdd);
		$article = $articlequery->getArticle($id_article);
		return $article;
	}
	
	require_once "model/model-article.php";

?>
 
    