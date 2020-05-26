<?php 
require 'include/auth.php'; 
$title = "Quiz | Jeu";
require 'vues/header.php';
require 'vues/nav.php';
?>

<?php 
echo "<h1 class='bienvenue'>$prenom $nom <img src='../img/cactus.jpg'/> $email</h1>"
?>
<?php require 'vues/msg_log.php'; ?>

<h1 class="title">Créer le quizz</h1>

<?php require 'vues/questions.php'; ?>



<?php require 'vues/footer.php';?>