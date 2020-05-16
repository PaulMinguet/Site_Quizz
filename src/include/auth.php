<?php
function connection ():bool {
   
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

// if (session_status() === PHP_SESSION_NONE) {
//            $nom=$_POST['nom'];
//        $prenom=$_POST['prenom'];
//        $email=$_POST['email'];
//     $passwd=$_POST['password'];
   
//        $_SESSION['nom'] = $nom;
//        $_SESSION['prenom'] = $prenom;
//        $_SESSION['email'] = $email;
//        $_SESSION['passwd'] = $passwd;
//        }
//        return !empty($_SESSION['connecte']);
//    }