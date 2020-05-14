<?php 
$title = "Quiz | LOGIN";
require 'header.php';
require 'nav.php';
?>

<h1 class="title">Espace Log In</h1>
<h3 class="title2">Veuillez vous enregistrer</h3>

<form action="accueil.php" method="get" class="login">
    <label for="nom">Nom</label>
    <input id="nom" type="text" name="nom" placeholder="Votre nom" class="area" />
    <label for="prenom">Prénom</label>
    <input id="prenom" type="text" name="prenom" placeholder="Votre prénom" class="area" />
    <label for="email">Email</label>
    <input id="email " type="email" name="email" placeholder="Votre adresse mail" class="area" />
    <input type="submit" name="connect" value="Se connecter">
</form>

<?php require 'footer.php';?>