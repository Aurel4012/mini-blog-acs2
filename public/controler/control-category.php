<?php
    //sert à voir le rep courant echo getcwd();
	

    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=mini-blog','root','');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


	if (isset($_GET['id_categorie'])){
		$id_categorie = htmlspecialchars(($_GET['id_categorie']));
		echo $id_categorie;
	}
	else{
		echo "Pas de GET";
	}
	require_once('admin/model/model-category.php');
	
?>