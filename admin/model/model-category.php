<?php
echo 'ok model-category';
require_once('model-categoryquery.php');
	class Category{
		private $_id_categorie;
		private $_name;

    
    public function getIdCategorie()
    {
        return $this->_id_categorie;
    }

    
    public function setIdCategorie($_id_categorie)
    {
        $this->_id_categorie = $_id_categorie;

        return $this;
    }

    
    public function getName()
    {
        return $this->_name;
    }

    
    public function setName($_name)
    {
        $this->_name = $_name;

        return $this;
    }

    public function __construct($donnees)
	{
		$this->_id_categorie($donnees[0]);
		$this->_name($donnees[1]);
	}	

}

$category_query= new CategoryQuery($bdd);
$category_liste= $category_query -> getList();
// $category_name= new Category();
 // $category_liste->getName();
var_dump($category_name);
// echo $category_name ->["name"];

	require_once ('public\view\header.inc.php');
    require_once ('public\view\main.inc.php');
    require_once ('public\view\footer.inc.php');