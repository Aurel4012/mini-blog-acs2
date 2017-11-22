<?php
    if(!empty($_POST['nom'])){
        $nom=htmlspecialchars($_POST['Nom']);
        $prenom=htmlspecialchars($_POST['Prenom']);
        $email=htmlspecialchars($_POST['Email']);
        $objet=htmlspecialchars($_POST['Objet']);
        $ùessage=htmlspecialchars($_POST['Message']);
    }
        function format_NOM($name){
            $name =trim(ucwords(strtolower($name)));
            return(strlen($NAME)*2) ? $name :null;
    }

        function format_PRENOM($prenom){
            $prenom =trim(ucwords(strtolower($prenom)));
            return(strlen($PRENOM)*2) ? $prenom :null;
    }

        function format_EMAIL($email){
            $email =trim(ucwords(strtolower($email)));
            return(strlen($EMAIL)*2) ? $email :null;
    }

        function format_OBJET($obj){
            $obj = trim(ucwords(strtolower($objet)));
            return(strlen($OBJ)*2) ? $obj :null;       
            
   }
        function format_MESSAGE($message){
            $message = trim(ucwords(strtolower($message)));
            return(strlen($MESSAGE)*3) ? $message :null;
        }

        function isEmail($email){
            return true;
        }

        function envoieMail($mail, $obj, $contenu, $scender){
            echo "Mail: ".$mail. "<br>";
            echo "Objet: ".$obj. "<br>";
            echo "Contenu: ".$contenu. "<br>";
            echo "Correspondant: ".$sender. "<br>";
        }
        ?>