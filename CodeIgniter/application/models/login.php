<?php 
require '../controllers/include/auth.php';
$title = "Quiz | LOGIN";
require '../views/header.php';
require '../views/nav.php';
?>

<?php require '../views/msg_log.php'; ?>
<h1 class="title">Espace Log In</h1>

<form action="./jeu.php" method="post" class="login">
    <label for="email">Email</label>
    <input id="email" type="email" name="email" placeholder="Votre adresse mail" value="<?= htmlentities($email) ?>" class="area" />
    <label for="password">Mot de passe</label>
    <input id="password" type="text" name="password" placeholder="Votre mot de passe" value="<?= htmlentities($passwd) ?>" class="area" />
    <input type="submit" name="connect" value="Se connecter">
</form>

<?php require '../views/footer.php';?>