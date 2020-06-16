<?php

    class Stats_bd extends CI_Model {

        public $email = null;
        public $moy = 0;
        public $note = null;

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
                                            WHERE quizz_cree_par = ".$this->Auth->getIdUser(), FALSE); //Alors on effectue une requête pour récupérer le statut de l'utilisateur
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    $numQuizz = 1;
                    foreach ($query->result_array() as $row){
                        //echo "id user : ".$this->Auth->getIdUser()."<br>";
                        $hrs = (int) ($row["quizz_duree"]/3600);
                        $min = (int) ($row["quizz_duree"]-$hrs*3600)/60;
                        $sec = (int) ($row["quizz_duree"]-$hrs*3600-$min*60);
                        $returnHTML = $returnHTML."
                        <div class='container'>
                            <div class='nbQuizz rep_nb'><h1>".$numQuizz."</h1></div>
                            <div class='statutQuizz actif' id='actif".$numQuizz."'>
                                <h2><i class='fas fa-check-circle'></i>&nbsp;Actif</h2>
                            </div>
                            <div class='statutQuizz inactif' id='inactif".$numQuizz."'>
                                <h2><i class='fas fa-bomb'></i>&nbsp;Inactif</h2>
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
                            </div>";

                            $builder = $this->db->select("score, COUNT(score) as nbRep
                                            FROM Score
                                            WHERE quizz_id = ".$this->Auth->getIdParCle($row['quizz_cle']), FALSE); //Alors on effectue une requête pour récupérer le statut de l'utilisateur
                            $query = $builder->get();
                            if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                                $numQuizz = 1;

                                foreach ($query->result_array() as $rowSc){
                                    if(!empty($rowSc['nbRep'])){
                                        if($rowSc['nbRep'] > 0){
                                                $this->note = $rowSc['score'];
                                                echo "quizz id : ".$this->Auth->getIdParCle($row['quizz_cle'])."<br>";
                                                //echo "nbNotes : ".$rowSc['nbRep']."<br>";
                                                //echo "row score : ".$rowSc['score']."<br>";
                                                echo "note = ".$this->note."<br>";
                                                $this->moy = $this->moy + $this->note;
                                                echo "moyenne = ".$this->moy."<br><br>";  
                                            }
                                        }
                                    }

                                    if(!empty($rowSc['nbRep'])){
                                            $returnHTML = $returnHTML."
                                            <div class='bar_reussite'>
                                                <ul>
                                                    <li class='";
                                                    if(round($this->moy/$rowSc['nbRep'],2) > 15){
                                                        $returnHTML = $returnHTML."reussite";
                                                    }else if(round($this->moy/$rowSc['nbRep'],2) >= 10 && round($this->moy/$rowSc['nbRep'],2) < 15){
                                                        $returnHTML = $returnHTML."moyen";
                                                    }else{
                                                        $returnHTML = $returnHTML."bof";
                                                    }
                                                    $returnHTML = $returnHTML."'>".(round($this->moy/$rowSc['nbRep'],2))."</li>
                                                </ul>
                                            </div>
                                        </div>";
                                    }
                            }

                            $returnHTML = $returnHTML."<script>
                                $('#actif".$numQuizz."').click(function () {
                                    console.log($(this).attr('id'));
                                    $(this).removeClass('onSelect');
                                    $('#inactif".$numQuizz."').addClass('onSelect');
                                });
                                $('#inactif".$numQuizz."').click(function () {
                                    console.log($(this).attr('id'));
                                    $(this).removeClass('onSelect');
                                    $('#actif".$numQuizz."').addClass('onSelect');
                                });
                            </script>";  
                            $numQuizz++;                      
                    }
                }
            }
            return $returnHTML;
        }
    }
?>