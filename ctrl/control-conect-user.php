<?php
    include_once('../model/class_user.php');
    include_once('../model/class_user_query.php');

    if (isset($_POST['mail']) && isset($_POST['password'])) {
    $user= new User_query($bdd);
    $authUser = $user->getUser($_POST['mail'],$_POST['password']);

    if ($authUser) {
        $_SESSION["id"]= $authUser->getIdUser();
        $_SESSION['nom']= $authUser->getPseudo();
        header('Location: index.php');
    }else{
        echo "connard";
    }
    }
    

    // $message_flash = "";

    // if( isset($_POST['mail']) && isset($_POST['password']) ) {
    //     if( loginUser($_POST['mail'], $_POST['password'], $bdd) ) {
    //         header('Location: index.php');
    //     }else{
    //         $message_flash = "<span class=\"alert alert-danger\">Erreur dans le login ou le mot de passe. Veuillez essayer de nouveau.</span>";
    //     }
    // }
    // include_once('../index.php');
    // echo $message_flash;

    // $user->getUser($id_user);
    // if (post['$mail'] == $mail->getUserMail($id_user)) {
    //     # code...
    }
?>

