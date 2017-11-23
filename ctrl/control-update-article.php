<?php
echo $titre_article.$id_article.$txt;
	require_once "model/class_article.php";
	require_once "model/class_article_query.php";
	$aq = new Article_query($bdd);
    $article = $aq->getArticle($id_article);
    $article->setTitle($titre_article);
    $article->setText('$txt');
    $aq->updateArticle($article);
    function getArticle($id_article,$bdd)
	{
		$articlequery = new Article_query($bdd);
		$article = $articlequery->getArticle($id_article);
		return $article;
	}
	
	require_once "model/model-article.php";
?>