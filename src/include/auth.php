<?php
$error = null;
$success = null;
$nom = null;
$prenom = null;
$email = null;
$passwd = null;
$file = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.php';

if (!empty($_POST['nom'])) {
    $nom = $_POST['nom'];
    setcookie($nom, $nom, time() + 60*60*24*30);
}
if (!empty($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    setcookie($prenom, $prenom, time() + 60*60*24*30);
}
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    setcookie($email, $email,  time() + 60*60*24*30);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $success = "Votre compte a bien été enregistré !";   
    } else {
        $error = "Email invalide";
    }
}
if (!empty($_POST['passwd'])) {
    $passwd = $_POST['passwd'];
    // $passwd.password_hash("$passwd", PASSWORD_DEFAULT);
    setcookie($passwd, $passwd, time() + 60*60*24*30);
    var_dump($passwd);
}
file_put_contents($file, $nom . ' ', FILE_APPEND);
file_put_contents($file, $prenom . ' ', FILE_APPEND);
file_put_contents($file, $passwd . ' ', FILE_APPEND);
file_put_contents($file, $email . PHP_EOL, FILE_APPEND);

if (empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['email'])) {
    $error = "Veuillez vous enregistrer";
}
