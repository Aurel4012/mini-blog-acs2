<?php 
	Class User
	{
		private $_id_user;
		private $_pseudo;
		private $_password;
		private $_mail;

	
    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->_id_user;
    }

    /**
     * @param mixed $_id_user
     *
     * @return self
     */
    public function setIdUser($_id_user)
    {
        $this->_id_user = $_id_user;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    /**
     * @param mixed $_pseudo
     *
     * @return self
     */
    public function setPseudo($_pseudo)
    {
        $this->_pseudo = $_pseudo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $_password
     *
     * @return self
     */
    public function setPassword($_password)
    {
        $this->_password = $_password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->_mail;
    }

    /**
     * @param mixed $_mail
     *
     * @return self
     */
    public function setMail($_mail)
    {
        $this->_mail = $_mail;

        return $this;
    }
}
?>