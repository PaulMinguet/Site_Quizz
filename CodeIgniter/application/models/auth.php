<?php

    class Auth extends CI_Model {
        public function __construct() {
            parent::__construct();
            $error = null;
            $success = null;
            $nom = null;
            $prenom = null;
            $email = null;
            $password = null;
            $statep = null;
            $matiere = null;
            $group = null;

            if (isset($_POST['nom'])) {
                $nom = $_POST['nom'];
            }
            if (isset($_POST['prenom'])) {
                $prenom = $_POST['prenom'];
            }
            if (isset($_POST['email'])) {
                $email = $_POST['email'];
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $success = "Votre compte a bien été enregistré !";  
                } else {
                    $error = "Email invalide";
                }
            }
            if (isset($_POST['password'])) {
                $password = md5($_POST['password']);
                // $password.password_hash("$password", password_DEFAULT);
            }

            if (isset($_POST['statep'])) {
                $statep = $_POST['statep'];
            }

            if (isset($_POST['matiere'])) {
                $matiere = $_POST['matiere'];
            }

            if (isset($_POST['group'])) {
                $group = $_POST['group'];
            }

            $this->db->query("INSERT INTO Utilisateur(utilisateur_mail, utilisateur_nom, utilisateur_prenom, utilisateur_mdp, utilisateur_status, utilisateur_group, utilisateur_matiere) VALUES('".$email."', '".$nom."', '".$prenom."', '".$password."', '".$statep."', '".$group."', '".$matiere."')");

            if (empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['email'])) {
                $error = "Veuillez vous enregistrer";
            }
        }
    }
?>