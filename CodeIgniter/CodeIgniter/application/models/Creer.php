<?php

	class Creer extends CI_Model{			//On déclare la classe "Creer"
		public function __construct() {
			parent::__construct();

			$title = "Quiz | CREER QUIZZ";

            $this->load->model('Auth');		//Chargement du modele auth.php
            $this->Auth->creer();			//Chargement de la fonction creer()) de auth.php
            
		}
	}
?>