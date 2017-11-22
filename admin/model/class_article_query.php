<?php 
class Article_query
{
	private $_bdd;



	public function __construct($bdd)
	{
		$this->_bdd = $bdd;
	}
     	
	public function getList()
	{
		$liste = [];
		$req = $this->_bdd->prepare('SELECT * FROM table_article');
		$req->execute();
		    
		while($donnees = $req->fetch()){
			$liste[]= new Article($donnees);
		}
		return $liste;
	}

    public function getArticle($id_article)
    {
			$req = $this->_bdd->prepare('SELECT * FROM table_article WHERE id_article = :id_article');
			$req->execute(array(
			    'id_article' => $id_article));
			    
			$donnees = $req->fetch();
			
			return new Article($donnees);
    }

    public function updateArticle(Article $article)
    {
    	$req = $this->_bdd->prepare('UPDATE table_article SET title= :title WHERE id_article = :id_article');
		$req->execute(array(
				'title' => $article->getTitle(),
			    'id_article' => $article->getIdArticle()));
    }

    public function deleteArticle($id)
    {
    	$req = $this->_bdd->prepare('DELETE FROM table_article WHERE id_article = :id_article');
		return $req->execute(array(
			    'id_article' => $id_article));
    }

    public function getBdd()
    {
        return $this->_bdd;
    }

    
    public function setBdd($_bdd)
    {
        $this->_bdd = $_bdd;

        return $this;
    }
}


?>