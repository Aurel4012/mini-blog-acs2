<?php
require_once 'admin/model/class_article.php';
require_once 'admin/model/class_article_query.php';

$aq = new Article_query($bdd);
$liste_articles = $aq->getList();
?>
