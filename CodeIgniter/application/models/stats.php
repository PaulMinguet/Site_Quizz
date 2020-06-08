<?php

	class Stats extends CI_Model{
		public function __construct() {
			parent::__construct();

			$title = "Quiz | STATS QUIZZ";

            $this->load->model('auth');		//Chargement du modele auth.php
            $this->auth->stats();			//Chargement de la fonction creer()) de auth.php
            
		}
	}

?>