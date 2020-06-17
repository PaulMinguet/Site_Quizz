<?php

	class Note_eleve extends CI_Model{		//On déclare la classe "Note_eleve"
		public function __construct() {
			parent::__construct();

			$title = "Quiz | NOTE QUIZZ";

            $this->load->model('Auth');		//Chargement du modele auth.php
            
		}
	}
?>