<?php

    class Auth extends CI_Model {

        public $error = null;               //Déclaration des différentes variables
        public $success = null;
        public $nom_quizz = null;
        public $nb_questions = null;
        public $enonce = null;
        public $codeAleatoire = null;
        public $duree = null;
        public $insert_id = null;
        public $image_question = null;
        public $num = 1;
        public $bonnerep = array();
        public $choix = array();
        public $nbQ = null;

        public function __construct() {
            parent::__construct();

            /*-----------------------------------------------Quizz--------------------------------------*/
            if (isset($_POST['nomqz']))                             //Idem pour nomqz
                $this->nom_quizz = $_POST['nomqz'];

            if (isset($_POST['nombreQ']))                           //Idem pour le nombre de questions nombre
                $this->nb_questions = $_POST['nombreQ'];

            if (isset($_POST['hrs']) && isset($_POST['min']) && isset($_POST['sec']))  
                $this->duree = $_POST['hrs']*3600 + $_POST['min']*60 + $_POST['sec'];

        }
        
        public function deconnexion(){                              //Fonction de déconnexion
            if(isset($_SESSION['username']))                        //Si une personne est déjà connectée
                $_SESSION['username'] = null;                       //Alors on met la variable $_SESSION['username'] à null pour déconnecter la personne
                echo "<div class='title2 success deco'>Déconnecté ! "."<br>". "À la prochaine 🖐</div>"; //On affiche un message de déconnexion
        }

        public function elepro(){                                   //Fonction pour récupérer le statut d'un utilisateur
            if(isset($_SESSION['email'])){                          //Si l'adresse email est renseignée
                $builder = $this->db->select("utilisateur_statut
                                            FROM Utilisateur
                                            WHERE utilisateur_mail = '".$_SESSION['email']."'", FALSE); //Alors on effectue une requête pour récupérer le statut de l'utilisateur
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $_SESSION['statut'] = $row["utilisateur_statut"];   //On assigne à la variable $_SESSION['statut'] la valeur trouvée

                    //echo "Session statut = ".$_SESSION['statut'];
                }
            }
        }

        public function getIdUser(){
            if(isset($_SESSION['email'])){                          //Si l'adresse email est renseignée
                $builder = $this->db->select("utilisateur_id
                                            FROM Utilisateur
                                            WHERE utilisateur_mail = '".$_SESSION['email']."'", FALSE); //Alors on effectue une requête pour récupérer l'id de l'utilisateur
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $_SESSION['id'] = $row["utilisateur_id"];   //On assigne à la variable $_SESSION['id'] la valeur trouvée
                }
            }
            return $_SESSION['id'];
        }

        public function creer(){                                    //Fonction de création de quizz
            if(isset($this->nom_quizz)){
                $this->load->model('fonctions');
                $this->codeAleatoire = $this->fonctions->codeal();
                //echo $this->codeAleatoire;
                //echo "<br>temps : ".$this->duree."<br>";
                $data = array(
                    'quizz_nom'         => $this->nom_quizz,
                    'quizz_cle'         => $this->codeAleatoire,
                    'quizz_duree'       => $this->duree,
                    'quizz_nbQuestions' => $this->nb_questions,
                    'quizz_cree_par'    => $this->getIdUser()
                );
                $this->db->insert('Quizz', $data);

                $_SESSION['last_id'] = $this->db->insert_id();

                //echo "ID : ".$this->insert_id;

                echo "<script>alert('Voici le code de votre quizz : ".$this->codeAleatoire." (Vous allez pouvoir la retrouver dans la section \"statistiques\")')</script>";
                header('Location: ./creer_question');
            }
        }

        public function get_last_id(){
            return $_SESSION['last_id'];
        }

        public function getNbQuestion(){
            if(isset($_SESSION['last_id'])){
                $builder = $this->db->select("quizz_nbQuestions
                                    FROM Quizz
                                    WHERE quizz_id = '".$_SESSION['last_id']."'", FALSE);
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $this->nbQ = $row["quizz_nbQuestions"];   //On assigne à la variable $_SESSION['id'] la valeur trouvée
                }
            }
            return $this->nbQ;
        }

        public function creer_question(){                                    //Fonction de création de creer_question
            //echo "last id : ".$_SESSION['last_id']."<br>";
            if(isset($_POST['enonceQ1'])){
                for($i = 1; $i <= $this->getNbQuestion(); $i++){

                    if (isset($_POST['enonceQ'.($i)]))
                        $this->enonce = $_POST['enonceQ'.($i)];

                    if (isset($_POST['image']))
                        $this->image_question = $_POST['image'];

                    if(isset($this->enonce)){
                        $data = array(
                            'question_num'      => $i,
                            'question_enonce'   => $this->enonce,
                            'question_image'    => $this->image_question,
                            'quizz_id'          => $_SESSION['last_id']
                        );
                        $this->db->insert('Question', $data);
                        $q_id = $this->db->insert_id();

                        //echo "Question ID : ".$this->num."<br>";
                    }

                    //echo "énoncé : ".$this->enonce."<br>";

                    for($j = 1; $j <= 4; $j++){

                        if (isset($_POST['choix'.(($i-1)*4+$j)]))
                            $this->choix[$i] = $_POST['choix'.(($i-1)*4+$j)];

                        if (isset($_POST['bonneRep'.(($i-1)*4+$j)])){
                            $this->bonnerep[($j-1)] = 1;
                        }else{
                            $this->bonnerep[($j-1)] = 0;
                        }


                        if(isset($this->enonce)){
                            $data = array(
                                'question_id'       => $q_id,
                                'reponse_texte'     => $this->choix[$i],
                                'reponse_num'       => $j,
                                'reponse_valide'    => $this->bonnerep[$j-1]
                            );
                            $this->db->insert('Reponse', $data);
                        }
                    }
                    //echo "<br>";
                }
                echo "<script>alert('Le quizz a bien été créé ! (Vous allez pouvoir la retrouver dans la section \"statistiques\")')</script>";
            }
        }
    }
?>