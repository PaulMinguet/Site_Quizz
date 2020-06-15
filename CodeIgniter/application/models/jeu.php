<?php

	class Jeu extends CI_Model{
		public function __construct() {
			parent::__construct();

			$title = "Quiz | QUIZZ";

            $this->load->model('jeu_bd');
            $this->load->model('auth');
            $this->auth->terminerQuizz();
            
		}
	}

?>