<?php
	class CategoryQuery{
		private $_bdd;

		public function __construct($bdd){
			$this->_bdd = $bdd;
		}

		public function getList(){
			$tab = [];
			$reponse=$this->_bdd->prepare('SELECT * FROM table_categorie');
			$reponse->execute();
			while($donnees = $reponse->fetch()){
				$tab[] =$donnees;
			}
			$reponse->closeCursor();
			return $tab;
		}

		// public function getCategory($id_categorie){
		// 	$req = $this->prepare('SELECT * FROM table_categorie WHERE id_categorie = :id_categorie');
		// 	$req->execute(array(
		// 		'id_categorie' => $id_categorie));
		// 	$donnees = $req->fetch();
		// 	$id_categorie = new Categorie($sonnees);
		// 	return $id_categorie;
		// }
		// public function getBdd()
	 //    {
	 //        return $this->_bdd;
	 //    }

	    
	 //    public function setBdd($_bdd)
	 //    {
	 //        $this->_bdd = $_bdd;

	 //        return $this;
	 //    }
	}
?>