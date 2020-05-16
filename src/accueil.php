<?php 
$title = "Quiz | Homepage";
require 'include/auth.php';
// if(!connection()) {
//     header('Location: login.php');
//     exit();
// }
require 'vues/header.php';
require 'vues/nav.php';


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$passwd=$_POST['password'];

echo "<h1 class='bienvenue'>$prenom $nom <img src='../img/cactus.jpg'/> $email</h1>"
// echo password_hash("$passwd", PASSWORD_DEFAULT);
?>


    <h1 class="title">Bienvenue sur Qui veut gagner des cailloux</h1>
    <h3 class="text">Cette application web permet à des professeurs inscrits sur le site de créer des quizz (questionnaires à choix multiples).</h3>

    <div class="launch">
        <a href="./jeu.php">Lancer le quizz !</a> 
    </div>

<?php
require 'vues/footer.php';
?>