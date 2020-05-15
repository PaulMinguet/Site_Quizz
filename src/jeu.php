<?php 
$title = "Quiz | Jeu";
require 'auth.php';
require 'header.php';
require 'nav.php';
?>

<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];

    echo "<h1 class='bienvenue'>$prenom $nom <img src='../img/cactus.jpg'/> $email</h1>"
?>


<h1 class="title">Créer le quizz</h1>

<?php if (($POST['nom']='') && ($POST['prenom']='') && ($POST['email']='')) {
    echo "<h3 class='title2 visible'>Veuillez vous enregistrer</h3>";
} else {
    echo "<h3 class='title2 not-visible'>Veuillez vous enregistrer</h3>";
}    
?>
 

<?php require 'footer.php';?>