<?php 
require '../controllers/include/auth.php'; 
$title = "Quiz | Jeu";
require '../views/header.php';
require '../views/nav.php';
?>

<?php 
echo "<h1 class='bienvenue'>$prenom $nom <img src='../img/cactus.jpg'/> $email</h1>"
?>
<?php require '../views/msg_log.php'; ?>

<h1 class="title">Créer le quizz</h1>

<?php require '../views/questions.php'; ?>



<?php require '../views/footer.php';?>