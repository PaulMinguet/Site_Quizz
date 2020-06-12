<?php

    class Stats_bd extends CI_Model {

        public $email = null;

        public function __construct() {
            parent::__construct();
            if (isset($_POST['email'])) {                                     //Idem pour email
               $this->email = $_POST['email'];
                if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {        //Si l'email correspond à une adresse email
                    $this->success = "Votre compte a bien été enregistré !";  //Alors tout va bien
                } else {
                    $this->error = "Email invalide";                          //Sinon erreur
                }
            }
        }

        public function getStatsQuizz(){
            $returnHTML = "";
            if(isset($_SESSION['email'])){                          //Si l'adresse email est renseignée
                $builder = $this->db->select("quizz_id, quizz_nom, quizz_etat, quizz_cle, quizz_duree, quizz_nbQuestions
                                            FROM Quizz
                                            WHERE quizz_cree_par = ".$this->auth->getIdUser(), FALSE); //Alors on effectue une requête pour récupérer le statut de l'utilisateur
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    $numQuizz = 1;
                    foreach ($query->result_array() as $row){
                        $hrs = (int) ($row["quizz_duree"]/3600);
                        $min = (int) ($row["quizz_duree"]-$hrs*3600)/60;
                        $sec = (int) ($row["quizz_duree"]-$hrs*3600-$min*60);
                        $returnHTML = $returnHTML."<div class='container'>
                            <div class='nbQuizz rep_nb'><h1>".$numQuizz."</h1></div>
                            <div class='statutQuizz actif'>
                                <h2><i class='fas fa-check-circle'></i>&nbsp;Actif</h2>
                            </div>

                            <div class='quizz'>
                                <hr class='separate'/>
                                <div class='line'>
                                    <label for='nomqz'><span class='nb' id='nb1'>1</span> Nom du Quizz</label>
                                    <div class='right_rep'>
                                        <h1 class='nomquizz rep_text'>".$row["quizz_nom"]."</h1>
                                    </div>
                                </div>
                                <div class='line'>
                                    <label for='nomqz'><span class='nb' id='nb2'>2</span> Clé du Quizz</label>
                                    <div class='right_rep'>
                                        <h1 class='nomquizz rep_text cle'>".$row["quizz_cle"]."</h1>
                                    </div>
                                </div>
                                <div class='line'>
                                    <label for='nombre'><span class='nb' id='nb3'>3</span> Nombre de questions</label>
                                    <div class='right_rep'>
                                        <div class='rep_nb'>
                                            <h1>".$row["quizz_nbQuestions"]."</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class='line'>
                                    <label for='duree'><span id='nbStart'><i class='fas fa-stopwatch' id='nbStart2'></i></span> Durée</label>
                                    <div class='right_rep'>
                                        <div class='time-select-affich'>
                                            <h1 name='hrs' id='hrs' class='tps hrs'>
                                                ".$hrs."
                                            </h1>
                                            <span class='separ_tps'>:</span>
                                            <h1 name='min' id='min' class='tps min'>
                                                ".$min."
                                            </h1>
                                            <span class='separ_tps'>:</span>
                                            <h1 name='sec' id='sec' class='tps sec'>
                                                ".$sec."
                                            </h1>
                                            <!--<input type='time' name='durée' id='durée' min='12:00:00' max='18:00:00' required class='area_qz' onclick='colorizeNBStart()' required/> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='bar_reussite'>
                                <ul>
                                    <li class='reussite'>Réussi</li>
                                    <li class='moyen'>Moyen</li>
                                    <li class='bof'>Bof Bof</li>
                                </ul>
                            </div>
                        </div>";
                        $numQuizz++;
                    }
                }
            }
            return $returnHTML;
        }
    }
?>