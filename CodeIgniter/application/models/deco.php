<?php 

	class Deco extends CI_Model {
		public function __construct() {
			parent::__construct();

            $title = "Quiz | DISCONNECT";

            $this->load->model('auth');		//Chargement du modele auth.php
            $this->auth->deconnexion();		//Chargement de la fonction deconnexion() de auth.php
		}
	}
?>