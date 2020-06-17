<?php 
	class Login extends CI_Model {			//On déclare la classe "Login"

		public function __construct() {
			parent::__construct();

			$title = "Quiz | LOG IN";

			$this->load->model('Connexion_bd');		//Chargement du modele connexion_bd.php
	        $this->Connexion_bd->connexion();		//Chargement de la fonction connexion() de connexion_bd.php
		} 
	}
?>