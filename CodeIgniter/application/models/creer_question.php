<?php

	class Creer_question extends CI_Model{
		public function __construct() {
			parent::__construct();

			$title = "Quiz | CREER QUESTION";

            $this->load->model('auth');		//Chargement du modele auth.php
            $this->auth->creer();			//Chargement de la fonction creer()) de auth.php
            
		}
	}
?>