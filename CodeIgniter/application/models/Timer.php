<?php

    class Timer extends CI_Model {

        public function __construct() {
            parent::__construct();
        }

        public function afficheTimer(){
            $builder = $this->db->select("quizz_duree
                                            FROM Quizz
                                            WHERE quizz_cle = '".$_GET['cle']."'", FALSE);
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row){
                        $hrs = (int) ($row["quizz_duree"]/3600);
                        $min = (int) ($row["quizz_duree"]-$hrs*3600)/60;
                        $sec = (int) ($row["quizz_duree"]-$hrs*3600-$min*60);
                    }
                }
                if(!empty($hrs) || !empty($min) || !empty($sec)){
                    echo "heures : ".$hrs."<br>minutes : ".$min."<br>sec : ".$sec."<br>";
                    for(;$min >= 0; $min--){
                        echo "min = ".$min."<br>";
                        sleep(1);
                    }
                }
        }
    }
?>