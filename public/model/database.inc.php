<!-- FICHIER DE CONNECTION A LA BASE DE DONNEES PHP -->
<?php

// La classe Database permet d'avoir accès à la connection depuis les autres pages Web. Elle retourne la connection.
class Database
{   
    //Localhost
    private static $dbHost = "localhost";
    //Nom de la Base de données 
    private static $dbName = "mini-blog";
    //Nom utilisateur 
    private static $dbUsername = "root";
    //Mot de passe
    private static $dbUserpassword = "";
    //variable connection
    private static $connection = null;
    
    //Static appartient à la classe Database et non à ses instances.
    //Private ou Public détermine si une personne de la classe database peut accéder à la fonction. 
    //PRIVATE -> personnes de la classe Database only.
    //PUBLIC -> tout le monde.

    //FONCTION DE CONNECTION A LA BDD
    //SELF::-> permets d'accéder à une propriété qui est statique.
    public static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    //FONCTION DECONNECTION QUI ANNULE LA CONNECTION VIA NULL
    public static function disconnect()
    {
        self::$connection = null;
    }

}
?>
