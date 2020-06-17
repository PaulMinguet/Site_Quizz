<body>
    <h1 class="title"><?php echo $_SESSION['prenom']." ".$_SESSION['nom']?></h1>

    <div class="enonce score_text"><p>Vous avez obtenu le score suivant</p></div>

    <div class="container-score">
        <h1 class="score" id="score"><?php echo round($this->Auth->getScore(), 2) ?><span>/20</span></h1>
    </div>
</body>
