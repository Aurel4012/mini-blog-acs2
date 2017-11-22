<?php
    
	session_start();
    	//Connexion base de données
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=mini-blog', 'root', '');
		$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	} 

    if(isset($_GET['categorie_name'])) {
        require_once 'ctrl/test.php';
    }else{
    	require_once 'ctrl/liste.php';
    	require_once 'views/liste.php';
    }
?>