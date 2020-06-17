<body>

    <h1 class="title">Quizz</h1>
    <br>
    <form method='post'>
    <?php 
        echo $this->Jeu_bd->getJeu();
    ?>
</body>