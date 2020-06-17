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
                echo "
                <!-- Element qui contiendra le timer -->
                <div class='container-time'>
			<p class='timer' id='demo timer'></p>
		</div>
		
                <script>
                // Definition du temps de demarrage
                var countDownDate = new Date().getTime()+".$tot.";

                // Maj ttes les secondes
                var x = setInterval(function() {

                  // Recuperation de la date et l'hueure courante
                  var now = new Date().getTime();

                  // Calcul de la distance entre le temps de demarrage du chrono et l'heure de maintenant
                  var distance = countDownDate - now;

                  // Calcul du temps pour les jours / heures / minutes / secondes
                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                  // On affiche le resultat dans le h1 avec l'id 'demo'
                  document.getElementById('demo').innerHTML = hours + ':'+ minutes + ':' + seconds;

                  // Une fois le timer a 0, on affiche EXPIRE
                  if (distance < 0) {
                    clearInterval(x);
                    document.getElementById('demo').innerHTML = 'EXPIRE';
                    alert('Le quizz est expiré\nCeci est une attaque, toutes vos données ont été dérobées. Pour les récupérer, merci de verser 1.000.000 $ à Paul & à Louis\ndonc 2.000.000 $');
                  }
                }, 1000);

                </script>";
            }
        }
    }
?>
