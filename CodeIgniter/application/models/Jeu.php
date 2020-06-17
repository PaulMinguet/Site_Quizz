<?php

	class Jeu extends CI_Model{				//On déclare la classe "Jeu"
		public function __construct() {
			parent::__construct();

			$title = "Quiz | QUIZZ";

            $this->load->model('Jeu_bd');	//On charge tous les models et vues dont on a besoin pour la page de Jeu
            $this->load->model('Auth');
            $this->Auth->terminerQuizz();
            
		}
	}

?>