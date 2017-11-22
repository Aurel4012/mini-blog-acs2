 <?php  
    session_start();
    	//Connexion base de données
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=mini-blog', 'root', '');
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	} 
    require_once ('controler/control-category.php');

if (isset($_GET['id_article'])){
$id_article = htmlspecialchars(($_GET['id_article']));
require_once ('controler/control-article.php');
}


    
    require_once ('controler/control-admin-user.php');
 ?>