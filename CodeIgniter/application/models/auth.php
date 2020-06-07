<?php

    class Auth extends CI_Model {

        public $error = null;               //Déclaration des différentes variables
        public $success = null;
        public $nom = null;
        public $prenom = null;
        public $email = null;
        public $password = null;
        public $statep = null;
        public $matiere = null;
        public $group = null;
        public $nom_quizz = null;
        public $nb_questions = null;
        public $enonce = null;
        public $codeAleatoire = null;
        public $duree = null;

        public function __construct() {
            parent::__construct();

            if (isset($_POST['nom']))                               //Si la variable nom a une valeur,
                $this->nom = $_POST['nom'];                         //Alors $nom dans auth.php = nom envoyée depuis un autre fichier (signin ou login par exemple)

            if (isset($_POST['prenom']))                            //Idem pour prenom
                $this->prenom = $_POST['prenom'];

            if (isset($_POST['email'])) {                           //Idem pour email
                $this->email = $_POST['email'];
                if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {        //Si l'email correspond à une adresse email
                    $this->success = "Votre compte a bien été enregistré !";  //Alors tout va bien
                } else {
                    $this->error = "Email invalide";                          //Sinon erreur
                }
            }
            if (isset($_POST['password']))                          //Idem pour password
                $this->password = md5($_POST['password']);          //Ici, on crypte le mot de passe pour des raisons de confidentialité
                // $password.password_hash("$password", password_DEFAULT);
            
            if (isset($_POST['statep']))                            //Idem pour statep (statut : eleve ou professeur)
                $this->statep = $_POST['statep'];

            if (isset($_POST['matiere']))                           //Idem pour matiere
                $this->matiere = $_POST['matiere'];

            if (isset($_POST['group']))                             //Idem pour group
                $this->group = $_POST['group'];


            /*-----------------------------------------------Quizz--------------------------------------*/
            if (isset($_POST['nomqz']))                             //Idem pour nomqz
                $this->nom_quizz = $_POST['nomqz'];

            if (isset($_POST['nombreQ']))                           //Idem pour le nombre de questions nombre
                $this->nb_questions = $_POST['nombreQ'];

            if (isset($_POST['enonce']))                            //Idem pour enonce
                $this->enonce = $_POST['enonce'];

            if (isset($_POST['hrs']) && isset($_POST['min']) && isset($_POST['sec']))  
                $this->duree = $_POST['hrs']*3600 + $_POST['min']*60 + $_POST['sec'];
        }

        public function inscription(){                              //Fonction pour l'inscription
            if(isset($_POST['email'])){                             //Si une adresse email est envoyée[...]
                $this->db->where('utilisateur_mail', $this->email); //On fait une requête sql pour savoir si l'adresse existe déjà
                $q = $this->db->get('Utilisateur');                 //Dans la table Utilisateur
                if($q->num_rows() > 0){                             //Si on obtient au moins une ligne
                    $this->error = "Compte déjà existant";          //Alors un compte existe déjà poru cette adresse email
                    echo "<script>alert('Compte déjà existant ! \nRéessayez 😈'</script>";   //Donc erreur
                }else if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['statep'])) {  //S'il manque des informations
                    $this->error = "Veuillez vous enregistrer";     //Alors erreur
                    echo "<script>alert('Veuillez entrer toutes les informations\nEncore un effort 😉')</script>";   //On averti l'utilisateur de l'erreur
                }else if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['statep']) && (!empty($_POST['matiere']) ||!empty($_POST['group']))){         //Si tous les champs sont bien remplis alors :
                    $this->db->query("INSERT INTO Utilisateur(utilisateur_mail, utilisateur_nom, utilisateur_prenom, utilisateur_mdp, utilisateur_statut, utilisateur_group, utilisateur_matiere) VALUES('".$this->email."', '".$this->nom."', '".$this->prenom."', '".$this->password."', '".$this->statep."', '".$this->group."', '".$this->matiere."')");                        //On fait une requête sql afin d'insérer le tuple de l'utilisateur dans la base de données
                }
                $this->auth->connexion();                           //Si on a le temps, faire une verif via code par mail
            }else{}                                                 //[...]Sinon rien

            
        }

        public function connexion(){                                //Fonction pour la connexion
            if(isset($_POST['email'])){                             //Si une adresse email est envoyée[...]
                $builder = $this->db->select("CONCAT(utilisateur_prenom, ' ', utilisateur_nom) AS username, utilisateur_mail
                                            FROM Utilisateur
                                            WHERE   utilisateur_mdp = '".$this->password."' AND utilisateur_mail = '".htmlentities($this->email)."'", FALSE);   //Alors on recherche dans la base de donnée si l'email et le mot de passe correspondent
                $query = $builder->get();


                if($query->num_rows() > 0){                         //Si on trouve un résultat, alors la connexion a réussi
                    foreach ($query->result_array() as $row)        //Alors on transforme notre résultat sous forme de variable
                            $_SESSION['username'] = $row["username"];   //Et on assigne à $_SESSION['username'] la valeur trouvée (nom et prénom)
                            
                    
                    $_SESSION['email'] = $this->email;              //Idem pour le mail
                    echo "<div class='title2 success'>Vous revoilà ".$_SESSION['username']." !"."<br>"."Email : ".$_SESSION['email']." 😇"."</div>"; //Affiche un message de bienvenue
                    // echo "<div class='title2 success'>Session username : ".$_SESSION['username']."<br>"."Session mail : ".$_SESSION['email']."<br>"."</div>";
                } else{                                             //Si on ne trouve pas de résultat alors la connexion échoue
                    echo "<div class='title2 alert'>Connexion impossible ! "."<br>". "Inconnu au bataillon 😈<br>(Adresse email ou mot de passe incorrect)</div>";
                    // echo "<div class='title2 alert'>Connexion impossible avec mail : ".$this->email." et mdp : ".$this->password."</div>";
                }
            } else{}                                                //[...]Sinon rien
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

        public function creer(){                                    //Fonction de création de quizz
            if(isset($this->nom_quizz)){
                $this->load->model('fonctions');
                $this->codeAleatoire = $this->fonctions->codeal();
                echo $this->codeAleatoire;
                echo "<br>temps : ".$this->duree."<br>";
                $data = array(
                    'quizz_nom'         => $this->nom_quizz,
                    'quizz_cle'         => $this->codeAleatoire,
                    'quizz_duree'       => $this->duree,
                    'quizz_nbQuestions' => $this->nb_questions
                );
                $this->db->insert('Quizz', $data);
                echo "<script>alert('Voici le code de votre quizz : ".$this->codeAleatoire."')</script>";
            }
        }

        public function stats() {
            # code...
        }
    }
?>