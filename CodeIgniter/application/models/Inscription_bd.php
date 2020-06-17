<<<<<<< HEAD
<?php

    class Inscription_bd extends CI_Model {                         //On déclare la classe "Inscription_bd"

        public $error = null;                                       //Déclaration des différentes variables
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
                }else if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['statep']) && (!empty($_POST['matiere']) ||!empty($_POST['group']))){                              //Si tous les champs sont bien remplis alors :
                    $this->db->query("INSERT INTO Utilisateur(utilisateur_mail, utilisateur_nom, utilisateur_prenom, utilisateur_mdp, utilisateur_statut, utilisateur_group, utilisateur_matiere) VALUES('".$this->email."', '".$this->nom."', '".$this->prenom."', '".$this->password."', '".$this->statep."', '".$this->group."', '".$this->matiere."')");                                            //On fait une requête sql afin d'insérer le tuple de l'utilisateur dans la base de données
                }
                echo "<script>alert('Inscription réussie !')</script>";
            }else{}                                                 //[...]Sinon rien
        }
    }
=======
<?php

    class Inscription_bd extends CI_Model {                         //On déclare la classe "Inscription_bd"

        public $error = null;                                       //Déclaration des différentes variables
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
                }else if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['statep']) && (!empty($_POST['matiere']) ||!empty($_POST['group']))){                              //Si tous les champs sont bien remplis alors :
                    $this->db->query("INSERT INTO Utilisateur(utilisateur_mail, utilisateur_nom, utilisateur_prenom, utilisateur_mdp, utilisateur_statut, utilisateur_group, utilisateur_matiere) VALUES('".$this->email."', '".$this->nom."', '".$this->prenom."', '".$this->password."', '".$this->statep."', '".$this->group."', '".$this->matiere."')");                                            //On fait une requête sql afin d'insérer le tuple de l'utilisateur dans la base de données
                }
                echo "<script>alert('Inscription réussie !')</script>";
            }else{}                                                 //[...]Sinon rien
        }
    }
>>>>>>> edd111a8cf4b3279ed0611781f109610d69d04cc
?>