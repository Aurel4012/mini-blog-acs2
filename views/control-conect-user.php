<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=mini-blog', 'root', '');
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    if (isset($_POST['mail']) && isset($_POST['password']))
    {
        include_once "../model/class_user.php";
        include_once "../model/class_user_query.php";
        $usersquery = new User_query($bdd);
        $user = $usersquery->getUser(htmlspecialchars($_POST['mail']), htmlspecialchars($_POST['password']));

        // si les données sont valides
        if($user)
        {
            $_SESSION["id"] = $user -> getIdUser();
            $_SESSION['nom']= $user->getPseudo();
            header("Location: ../index.php");
        }else
        {
        echo "Erreur";
        }
    }
?>