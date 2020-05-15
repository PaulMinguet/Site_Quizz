<?php 
$title = "Quiz | Homepage";
require 'auth.php';
// if(!connection()) {
//     header('Location: login.php');
//     exit();
// }
require 'header.php';
require 'nav.php';
?>

<?php
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $email=$_GET['email'];

    echo "<h1 class='bienvenue'>$prenom $nom <img src='../img/cactus.jpg'/> $email</h1>"
?>


    <h1 class="title">Bienvenue sur Qui veut gagner des cailloux</h1>
    <h3 class="text">Cette application web permet à des professeurs inscrits sur le site de créer des quizz (questionnaires à choix multiples).</h3>

    <div class="launch">
        <a href="./jeu.php">Lancer le quizz !</a> 
    </div>


<?php require 'footer.php';?>