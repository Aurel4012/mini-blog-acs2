<?php

    require_once "model/model-admin-user.php";
    public static function connectUser()
    {
        $message_flash = "";
        // récupérer les données postées
        if( isset($_POST['mail']) && isset($_POST['password']) ) {
            if( loginUser($_POST['mail'], $_POST['password'], $connexion) ) 
            {
                header('Location: main.inc.php');
            }else{
                $message_flash = "<span class=\"alert alert-danger\">Erreur dans le login ou le mot de passe. Veuillez essayer de nouveau.</span>";
            }
        }
    }
    
    require_once "model/model-article.php";
    ?>