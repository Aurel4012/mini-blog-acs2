<?php 
	class User_query
	{
		private $_bdd;



	public function __construct($bdd)
	{
		$this->_bdd = $bdd;
	}
     	
	public function getListUser()
	{
		$liste = [];
		$req = $this->_bdd->prepare('SELECT * FROM table_user');
		$req->execute();
		    
		while($donnees = $req->fetch()){
			$liste[]= new User($donnees);
		}
		return $liste;
	}

	public function get($id_user)
    {
			$req = $this->_bdd->prepare('SELECT * FROM table_user WHERE id_user = :id_user');
			$req->execute(array(
			    'id_user' => $id_user));
			    
			$donnees = $req->fetch();
			
			return new User($donnees);
    }

  	public function getUser($email,$password){
       	   $passwordmd5 = MD5($password);
           $req = $this->_bdd->prepare('SELECT * FROM table_user WHERE mail = :mail AND password = :password');
           $req->execute(array(
               'mail' => $email,
               'password' => $passwordmd5));
           $donnees = $req->fetch();
           $user = new User($donnees);
           return $user;
   }
   
    public function setBdd($_bdd)
    {
        $this->_bdd = $_bdd;

        return $this;
    }
}


?>