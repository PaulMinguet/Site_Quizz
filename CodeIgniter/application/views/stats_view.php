<body>
    <script src="<?php echo base_url(); ?>js/statSelect.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <h1 class="title">Statistiques</h1>
    <br>
    <?php 
        echo $this->stats_bd->getStatsQuizz();
    ?>
    
</body>