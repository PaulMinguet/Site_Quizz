<?php

	class Creer_question extends CI_Model{
		public function __construct() {
			parent::__construct();

			$title = "Quiz | CREER QUESTION";

            $this->load->model('Auth');		//Chargement du modele auth.php
            $this->Auth->creer_question();			//Chargement de la fonction creer()) de auth.php
            $this->Auth->getNbQuestion();
		}
	}
?>