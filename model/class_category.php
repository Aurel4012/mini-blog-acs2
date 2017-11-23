<?php
    require_once('class_category_query.php');
    	class Category{
		private $_id_categorie;
		private $_name;

            public function __construct($donnees){
            $this->_id_categorie($donnees[0]);
            $this->_name($donnees[1]);
            }   

            
            public function getIdCategorie(){
                return $this->_id_categorie;
            }

            
            public function setIdCategorie($_id_categorie){
                $this->_id_categorie = $_id_categorie;

                return $this;
            }

            
            public function getName(){
                return $this->_name;
            }

            
            public function setName($_name){
                $this->_name = $_name;

                return $this;
            }

        }
?>