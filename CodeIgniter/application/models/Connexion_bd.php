<?php

    class Connexion_bd extends CI_Model {   //On déclare la classe "Connexion_bd"

        public $error = null;               //Déclaration des différentes variables
        public $success = null;
        public $email = null;
        public $password = null;

        public function __construct() {
            parent::__construct();

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
        }

        public function connexion(){                                //Fonction pour la connexion
            if(isset($_POST['email'])){                             //Si une adresse email est envoyée[...]
                $builder = $this->db->select("utilisateur_nom, utilisateur_prenom, CONCAT(utilisateur_prenom, ' ', utilisateur_nom) AS username, utilisateur_mail
                                            FROM Utilisateur
                                            WHERE   utilisateur_mdp = '".$this->password."' AND utilisateur_mail = '".htmlentities($this->email)."'", FALSE);   //Alors on recherche dans la base de donnée si l'email et le mot de passe correspondent
                $query = $builder->get();


                if($query->num_rows() > 0){                         //Si on trouve un résultat, alors la connexion a réussi
                    foreach ($query->result_array() as $row)        //Alors on transforme notre résultat sous forme de variable
                            $_SESSION['username'] = $row["username"];   //Et on assigne à $_SESSION['username'] la valeur trouvée (nom et prénom)
                            $_SESSION['nom'] = $row["utilisateur_nom"];
                            $_SESSION['prenom'] = $row["utilisateur_prenom"];
                            
                    
                    $_SESSION['email'] = $this->email;              //Idem pour le mail
                    echo "<div class='title2 success'>Vous revoilà ".$_SESSION['username']." !"."<br>"."Email : ".$_SESSION['email']." 😇"."</div>"; //Affiche un message de bienvenue
                    // echo "<div class='title2 success'>Session username : ".$_SESSION['username']."<br>"."Session mail : ".$_SESSION['email']."<br>"."</div>";
                } else{                                             //Si on ne trouve pas de résultat alors la connexion échoue
                    echo "<div class='title2 alert' style='top: 495px;'>Connexion impossible ! "."<br>". "Inconnu au bataillon 😈<br><em>(Adresse email ou mot de passe incorrect)</em></div>";
                    // echo "<div class='title2 alert'>Connexion impossible avec mail : ".$this->email." et mdp : ".$this->password."</div>";
                }
            } else{}                                                //[...]Sinon rien
        }
    }
?>