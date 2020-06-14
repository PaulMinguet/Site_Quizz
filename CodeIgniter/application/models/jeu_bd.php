<?php

    class Jeu_bd extends CI_Model {

        public function __construct() {
            parent::__construct();
        }

        public function getJeu(){
            $returnHTMLJeu = "";
            if(isset($_GET['cle'])){                          //Si la clé est renseignée
                //echo "cle = ".$_GET['cle']."<br>";
                $builder = $this->db->select("Q.quizz_id, Q.quizz_nom, Q.quizz_etat, Q.quizz_duree, Q.quizz_nbQuestions
                                            FROM Quizz Q
                                            WHERE Q.quizz_cle = '".$_GET['cle']."'", FALSE);
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row){
                        $hrs = (int) ($row["quizz_duree"]/3600);
                        $min = (int) ($row["quizz_duree"]-$hrs*3600)/60;
                        $sec = (int) ($row["quizz_duree"]-$hrs*3600-$min*60);
                        $returnHTMLJeu = "
                        <div class='container'>
                            <div class='statutQuizz actif'>
                                <h2><i class='fas fa-check-circle'></i>&nbsp;Actif</h2>
                            </div>
                            <div class='quizz'>
                                <hr class='separate'/>
                                <div class='line'>
                                    <label for='nomqz'><span class='nb' id='nb1' style='background-color: #2c006a; color: #ffe100; padding: 12px 13px;'><i class='fas fa-bahai'></i></span> Nom du Quizz</label>
                                    <div class='right_rep'>
                                        <h1 class='nomquizz rep_text'>".$row["quizz_nom"]."</h1>
                                    </div>
                                </div>
                                <div class='line'>
                                    <label for='nombre'><span class='nb' id='nb2' style='background-color: #2c006a; color: #ffe100; padding: 12px 13px;'><i class='fas fa-bahai'></i></span> Nombre de questions</label>
                                    <div class='right_rep'>
                                        <div class='rep_nb'>
                                            <h1>".$row['quizz_nbQuestions']."</h1>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";

                        $builder = $this->db->select("Ques.question_id, Ques.question_num, Ques.question_enonce, Ques.question_image
                                            FROM Question Ques INNER JOIN Quizz Q ON Ques.quizz_id = Q.quizz_id
                                            WHERE Q.quizz_cle = '".$_GET['cle']."'", FALSE);
                        $query = $builder->get();
                        if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                            foreach ($query->result_array() as $row){
                                $returnHTMLJeu = $returnHTMLJeu."
                                <form class='container'>
                                    <div class='nbQuizz rep_nb'><h1>".$row['question_num']."</h1></div>
                                   
                                    <div class='quizz'>
                                        <div class='line'>
                                            <div class='enonce'>
                                                <p>".$row['question_enonce']."</p>
                                            </div>
                                        </div>";

                                            $builder = $this->db->select("Rep.reponse_texte, Rep.reponse_num
                                                FROM Reponse Rep INNER JOIN Question Ques ON Rep.question_id = Ques.question_id
                                                WHERE Rep.question_id = '".$row['question_id']."'", FALSE);
                                            $query = $builder->get();

                                            if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                                                foreach ($query->result_array() as $row){
                                                $returnHTMLJeu = $returnHTMLJeu."
                                                <div class='line_rep'>
                                                    <div class='container2'>
                                                        <div class='each_rep'>
                                                            <label for='choixQ1'>".$row['reponse_texte']."</label>
                                                            <input type='checkbox' name='choixQ1' value='Choix 2' id='choix1_2' class='input_rep'>                
                                                        </div>
                                                    </div>
                                                </div>";
                                                }
                                            }
                                            $returnHTMLJeu = $returnHTMLJeu."
                                                </div>
                                            </form>";
                            }
                        }
                    }
                }else{
                    echo "<h1>Le quizz demandé est inexistant</h1>";
                }
            }
            return $returnHTMLJeu;
        }
    }
?>