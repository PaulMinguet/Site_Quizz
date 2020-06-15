<?php

	class Note_eleve extends CI_Model{
		public function __construct() {
			parent::__construct();

			$title = "Quiz | NOTE QUIZZ";

            $this->load->model('auth');		//Chargement du modele auth.php
            $this->auth->note_eleve();			//Chargement de la fonction note_eleve()) de auth.php
            
		}
	}
?>