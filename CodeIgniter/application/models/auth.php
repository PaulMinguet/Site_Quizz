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
        public $choix1 = null;

        public function __construct() {
            parent::__construct();

            /*-----------------------------------------------Quizz--------------------------------------*/
            if (isset($_POST['nomqz']))                             //Idem pour nomqz
                $this->nom_quizz = $_POST['nomqz'];

            if (isset($_POST['nombreQ']))                           //Idem pour le nombre de questions nombre
                $this->nb_questions = $_POST['nombreQ'];

            if (isset($_POST['hrs']) && isset($_POST['min']) && isset($_POST['sec']))  
                $this->duree = $_POST['hrs']*3600 + $_POST['min']*60 + $_POST['sec'];

            /*-----------------------------------------------Questions--------------------------------------*/

            if (isset($_POST['enonce']))                            //Idem pour enonce
                $this->enonce = $_POST['enonce'];

            if (isset($_POST['image']))                            //Idem pour enonce
                $this->image_question = $_POST['image'];

            if (isset($_POST['choix1']))                            //Idem pour enonce
                $this->choix1 = $_POST['choix1'];
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

                $this->insert_id = $this->db->insert_id();

                //echo "ID : ".$this->insert_id;

                echo "<script>alert('Voici le code de votre quizz : ".$this->codeAleatoire." (Vous allez pouvoir la retrouver dans la section \"statistiques\")')</script>";
            }
            //header('Location: ./creer_question');
        }

        public function get_last_id(){
            return $this->insert_id;
        }

        public function creer_question(){                                    //Fonction de création de quizz
            if(isset($this->enonce)){
                $num = 1;
                $data = array(
                    'question_num'      => $num,
                    'question_enonce'   => $this->enonce,
                    'question_image'    => $this->image,
                    'quizz_id'          => $this->insert_id
                );
                $this->db->insert('Question', $data);
            }
        }

        public function stats() {
            # code...
        }
    }
?>