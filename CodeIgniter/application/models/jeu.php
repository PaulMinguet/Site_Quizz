<?php

	class Jeu extends CI_Model{
		public function __construct() {
			parent::__construct();

			$title = "Quiz | QUIZZ";

            $this->load->model('Jeu_bd');
            $this->load->model('Auth');
            $this->Auth->terminerQuizz();
            
		}
	}

?>