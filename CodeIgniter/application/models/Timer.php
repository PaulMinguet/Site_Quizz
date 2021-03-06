<?php

    class Timer extends CI_Model {          //On déclare la classe "Timer"

        public function __construct() {
            parent::__construct();
        }

        public function afficheTimer(){     //Fonction pour afficher le timer
            $builder = $this->db->select("quizz_duree
                                            FROM Quizz
                                            WHERE quizz_cle = '".$_GET['cle']."'", FALSE);
            $query = $builder->get();                           //On récupère la durée du quizz par une requête
            if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                foreach ($query->result_array() as $row){
		    $tot = $row["quizz_duree"]*1000;
                    $hrs = (int) ($row["quizz_duree"]/3600);
                    $min = (int) ($row["quizz_duree"]-$hrs*3600)/60;
                    $sec = (int) ($row["quizz_duree"]-$hrs*3600-$min*60);
                }
            }
            if(!empty($hrs) || !empty($min) || !empty($sec)){
                echo "<!-- Display the countdown timer in an element -->
            <div class='container-time'>
	    	<h1 class='timer' id='demo'></h1>
	    </div>
            <script>
            // Set the date we're counting down to
            var countDownDate = new Date().getTime()+".$tot.";

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id='demo'
                document.getElementById('demo').innerHTML = hours + ':'
                + minutes + ':' + seconds;

                // If the count down is finished, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById('demo').innerHTML = 'EXPIRÉ !';
		    alert('Ceci est une attaque. Toutes vos données ont été dérobées. Merci de verser 1 000 000 d\'euros à Paul et à Louis, soit 2 000 000 d\'euros en tout')
                 }
             }, 1000);
            </script>";
            }
        }
    }
?>
