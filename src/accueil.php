<?php 
$title = "Quiz | Homepage";
require 'header.php';
?>
    <nav>
        <ul>
            <li><a href="#" id="btn-acc"><i class="fas fa-home"></i>&nbsp;&nbsp;Accueil</a></li>
            <li></li>
            <li><a href="./login.php" id="btn-log"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Log In</a></li>
        </ul>
    </nav>

    <h1 class="title">Bienvenue sur Qui veut gagner des cailloux</h1>
    <h3 class="text">Cette application web permet à des professeurs inscrits sur le site de créer des quizz (questionnaires à choix multiples).</h3>

    <div class="launch">
        <a href="./jeu.php">Lancer le quizz !</a> 
    </div>


<?php require 'footer.php';?>