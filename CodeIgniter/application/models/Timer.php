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
                echo "<!-- Afficher Le timer -->
            <p id='timer'></p>

            <script>
            // Initialisation de la date à partir de laquelle on décompte (ici, l'heure actuelle+la durée totale du quizz)
            var countDownDate = new Date().getTime()+".$tot.";

            // Mise à jour du timer toute les secondes
            var x = setInterval(function() {

                // On prend la date actuelle
                var now = new Date().getTime();

                // On récupère la distance entre le temps choisi et maintenant
                var distance = countDownDate - now;

                // Calcul du temps en jours, heures, minutes et secondes
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // On affiche les résultats dans l'élément qui a pour id 'demo'
                document.getElementById('demo').innerHTML = days + 'd ' + hours + 'h '
                + minutes + 'm ' + seconds + 's ';

                // Lorsque le timer est terminé, on affiche une alerte
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById('timer').innerHTML = 'EXPIRED';
                    alert('Le quizz est expiré\nCeci est une attaque, toutes vos données ont été dérobées. Pour les récupérer, merci de verser 1.000.000 $ à Paul & à Louis\ndonc 2.000.000 $\n(En vrai le quizz est fini)');
                }
            }, 1000);
            </script>";
            }
        }
    }
?>
