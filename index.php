<?php
    
	session_start();
	
	require_once('views/header.inc.php');
    	//Connexion base de données
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=mini-blog', 'root', '');
		$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	} 

	///controleur id_article seul
	if(isset($_GET['id_article'])) {
	$id_article = htmlspecialchars(($_GET['id_article']));
    require_once ('ctrl/control-article.php');
    }
    
    

    elseif(isset($_GET['categorie_name'])) {
        require_once 'ctrl/test.php';
    }else{
    	require_once 'ctrl/liste.php';
    	require_once 'views/liste.php';
    }
    
    require_once('views/footer.inc.php');
?>