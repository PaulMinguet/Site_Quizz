<?php 

	class Deco extends CI_Model {			//On déclare la classe "Deco"
		public function __construct() {
			parent::__construct();

            $title = "Quiz | DISCONNECT";

            $this->load->model('Auth');		//Chargement du modele auth.php
            $this->Auth->deconnexion();		//Chargement de la fonction deconnexion() de auth.php
		}
	}
?>