<?php 
require 'include/is_connected.php';
require 'include/auth.php';
$title = "Quiz | Homepage";
not_connected();

require 'vues/header.php';
require 'vues/nav.php';


// echo password_hash("$passwd", PASSWORD_DEFAULT);
echo "<h1 class='bienvenue'>$prenom $nom <img src='../img/cactus.jpg'/> $email</h1>"
?>

<?php require 'vues/msg_log.php'; ?>


    <h1 class="title">Bienvenue sur Qui veut gagner des cailloux</h1>
    <h3 class="text">Cette application web permet à des professeurs inscrits sur le site de créer des quizz (questionnaires à choix multiples).</h3>

    <div class="launch">
        <a href="./jeu.php">Lancer le quizz !</a> 
    </div>

<?php require 'vues/footer.php'; ?>