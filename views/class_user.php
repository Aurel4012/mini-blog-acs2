<?php 
	Class User
	{
	   private $_id_user;
	   private $_pseudo;
	   private $_password;
	   private $_mail;

	   public function __construct($donnees)
        {
            $this->_id_user = $donnees['id_user'];
            $this->_pseudo = $donnees['pseudo'];
            $this->_password = $donnees['password'];
            $this->_mail = $donnees['mail'];
        }

        public function getIdUser()
        {
            return $this->_id_user;
        }

        public function setIdUser($_id_user)
        {
            $this->_id_user = $_id_user;

            return $this;
        }

        public function getPseudo()
        {
            return $this->_pseudo;
        }

        public function setPseudo($_pseudo)
        {
            $this->_pseudo = $_pseudo;

            return $this;
        }

        public function getPassword()
        {
            return $this->_password;
        }

        public function setPassword($_password)
        {
            $this->_password = $_password;

            return $this;
        }

        public function getMail()
        {
            return $this->_mail;
        }

        public function setMail($_mail)
        {
            $this->_mail = $_mail;

            return $this;
        }
    }
?>