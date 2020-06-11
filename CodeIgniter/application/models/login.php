<?php 
	class Login extends CI_Model {

		public function __construct() {
			parent::__construct();

			$title = "Quiz | LOG IN";

			$this->load->model('connexion_bd');		//Chargement du modele connexion_bd.php
	        $this->connexion_bd->connexion();		//Chargement de la fonction connexion() de connexion_bd.php
		} 
	}
?>