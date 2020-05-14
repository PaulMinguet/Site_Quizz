<?php 
$title = "Quiz | Jeu";
require 'header.php';
require 'nav.php';
?>

<?php
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $email=$_GET['email'];

    echo "<h1 class='bienvenue'>$prenom $nom <img src='../img/cactus.jpg'/> $email</h1>"
?>


<h1 class="title">Créer le quizz</h1>

<?php if (($GET['nom']='') && ($GET['prenom']='') && ($GET['email']='')) {
    echo "<h3 class='title2 visible'>Veuillez vous enregistrer</h3>";
} else {
    echo "<h3 class='title2 not-visible'>Veuillez vous enregistrer</h3>";
}    
?>
 

<?php require 'footer.php';?>