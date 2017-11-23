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
    //controleur retour formulaire article
    if (isset($_POST['action']) == 'art_update'){
	    if (isset($_POST['titre_article'])&isset($_POST['mytextarea'])&isset($_POST['id_article'])){
			$id_article= htmlspecialchars($_POST['id_article']);
			$titre_article=htmlspecialchars($_POST['titre_article']);
			// $mini_img=$_FILES['mini_img'];
			$txt=htmlspecialchars($_POST['mytextarea']);
			require_once ('controler/control-update-article.php');
		}
    }

   
    if(isset($_GET['categorie_name'])) {
        require_once 'ctrl/test.php';
    }else{
    	require_once 'ctrl/liste.php';
    	require_once 'views/liste.php';
    }
    require_once('views/footer.inc.php');
?>