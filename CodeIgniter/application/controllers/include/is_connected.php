<?php
function connected (){
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION[connecte]);
}

function not_connected (){
    if(!connected()) {
        header('Location: login.php');
        exit();
    }
}
?>