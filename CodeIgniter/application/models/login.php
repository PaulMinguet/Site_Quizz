<?php 
	class Login extends CI_Model {

		public function __construct() {
			parent::__construct();

			$title = "Quiz | LOG IN";

			$this->load->model('auth');		//Chargement du modele auth.php
	        $this->auth->connexion();		//Chargement de la fonction connexion() de auth.php
		} 
	}
?>