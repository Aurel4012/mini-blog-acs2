<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=mini-blog', 'root', '');
        $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
if (isset($_POST['mail']) && isset($_POST['password'])){
    include_once "class_user.php";
    include_once "class_user_query.php";
    $usersquery = new User_query($bdd);
    $user = $usersquery->getUser(htmlspecialchars($_POST['mail']), htmlspecialchars($_POST['password']));
    // si les données sont juste
    if($user){
        $_SESSION["id"] = $user -> getIdUser();
        $_SESSION['nom']= $user->getPseudo();
        echo $_SESSION["id"];
        echo $_SESSION['nom'];
    }else{
        echo "connard";
    }
}



    // include_once "class_user.php";
    // include_once "class_user_query.php";

    // if (isset($_POST['mail']) && isset($_POST['password'])) {
    // $mail = $_POST['mail'];
    // $password = $_POST['password'];
    // $user= new User_query($bdd);
    // $authUser = $user->getUser($mail, $password);
    // var_dump($authUser);
    // if ($authUser) {
    //     $_SESSION["id"] = $authUser -> getIdUser();
    //     $_SESSION['nom']= $authUser->getPseudo();
    //     echo $_SESSION["id"];
    //     echo $_SESSION['nom'];
    // }else{
    //     echo "connard";
    // }
    // }
    

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
?>

