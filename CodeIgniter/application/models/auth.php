<?php

    class Auth extends CI_Model {

        public $error = null;
        public $success = null;
        public $nom = null;
        public $prenom = null;
        public $email = null;
        public $password = null;
        public $statep = null;
        public $matiere = null;
        public $group = null;

        public function __construct() {
            parent::__construct();

            if (isset($_POST['nom'])) {
                $this->nom = $_POST['nom'];
            }
            if (isset($_POST['prenom'])) {
                $this->prenom = $_POST['prenom'];
            }
            if (isset($_POST['email'])) {
                $this->email = $_POST['email'];
                if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                    $this->success = "Votre compte a bien été enregistré !";  
                } else {
                    $this->error = "Email invalide";
                }
            }
            if (isset($_POST['password'])) {
                $this->password = md5($_POST['password']);
                // $password.password_hash("$password", password_DEFAULT);
            }

            if (isset($_POST['statep'])) {
                $this->statep = $_POST['statep'];
            }

            if (isset($_POST['matiere'])) {
                $this->matiere = $_POST['matiere'];
            }

            if (isset($_POST['group'])) {
                $this->group = $_POST['group'];
            }
        }

        public function inscription(){
            if(isset($_POST['email'])){
                $this->db->where('utilisateur_mail', $this->email);
                $q = $this->db->get('Utilisateur');
                if($q->num_rows() > 0){
                    $this->error = "Compte déjà existant";
                    echo "<script>alert('Compte déjà existant ! \nRéessayez 😈)</script>";
                }else if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['statep'])) {
                    $this->error = "Veuillez vous enregistrer";
                    echo "<script>alert('Veuillez entrer toutes les informations\nEncore un effort 😉')</script>";
                }else if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['statep']) && (!empty($_POST['matiere']) ||!empty($_POST['group']))){
                    $this->db->query("INSERT INTO Utilisateur(utilisateur_mail, utilisateur_nom, utilisateur_prenom, utilisateur_mdp, utilisateur_statut, utilisateur_group, utilisateur_matiere) VALUES('".$this->email."', '".$this->nom."', '".$this->prenom."', '".$this->password."', '".$this->statep."', '".$this->group."', '".$this->matiere."')");
                }
                $this->auth->connexion();
            }else{}

            
        }

        public function connexion(){
            if(isset($_POST['email'])){
                $builder = $this->db->select("CONCAT(utilisateur_prenom, ' ', utilisateur_nom) AS username, utilisateur_mail
                                            FROM Utilisateur
                                            WHERE   utilisateur_mdp = '".$this->password."' AND utilisateur_mail = '".htmlentities($this->email)."'", FALSE);
                $query = $builder->get();


                             if($query->num_rows() > 0){
                    foreach ($query->result_array() as $row)
                            $_SESSION['username'] = $row["username"];
                            
                    
                    $_SESSION['email'] = $this->email;
                    echo "<div class='title2 success'>Vous revoilà ".$_SESSION['username']." !"."<br>"."Email : ".$_SESSION['email']." 😇"."</div>";
                    // echo "<div class='title2 success'>Session username : ".$_SESSION['username']."<br>"."Session mail : ".$_SESSION['email']."<br>"."</div>";
                } else{
                    // echo "<script>alert('Adresse email ou mot de passe incorrect')</script>";
                    echo "<div class='title2 alert'>Connexion impossible ! "."<br>". "Inconnu au bataillon 😈</div>";
                    // echo "<div class='title2 alert'>Connexion impossible avec mail : ".$this->email." et mdp : ".$this->password."</div>";
                }
            } else{}
        }
        
        public function deconnexion(){
            if(isset($_SESSION['username']))
                $_SESSION['username'] = null;
                echo "<div class='title2 success deco'>Déconnecté ! "."<br>". "À la prochaine 🖐</div>";
        }

        public function elepro(){
            if(isset($_SESSION['email'])){
                $builder = $this->db->select("utilisateur_statut
                                            FROM Utilisateur
                                            WHERE utilisateur_mail = '".$_SESSION['email']."'", FALSE);
                $query = $builder->get();
                if($query->num_rows() > 0){
                    foreach ($query->result_array() as $row)
                        $_SESSION['statut'] = $row["utilisateur_statut"];

                    //echo "Session statut = ".$_SESSION['statut'];
                }
            }
        }

        public function creer(){

        }
    }
?>