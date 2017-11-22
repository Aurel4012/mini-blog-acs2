<?php
require_once 'admin/model/class_article.php';
require_once 'admin/model/class_article_query.php';

$aq = new Article_query($bdd);
$article = $aq->getArticle(3);

echo $article->getTitle().'<br>'.$article->getText().'<hr>';

$article->setTitle('nouveau titre');
$article->setText('nouveau texte');

echo $article->getTitle().'<br>'.$article->getText().'<hr>';

$aq->updateArticle($article);

?>