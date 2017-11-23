<?php
	class CategoryQuery{
		private $_bdd;

		public function __construct($bdd){
			$this->_bdd = $bdd;
		}

		public function getListeCategories($id_categorie){
			$req = $this->_bdd->prepare('SELECT * FROM table_categorie WHERE id_categorie = :id_categorie');
			$req->execute(array(
			    'id_categorie' => $id_categorie));
			    
			$donnees = $req->fetch();
			
			$id_categorie = new Category($donnees);
			return $id_categorie;
    	}

	    public function getBdd(){
	        return $this->_bdd;
	    }
	    
	    public function setBdd($_bdd){
	        $this->_bdd = $_bdd;

	        return $this;
	    }
	}	
?>