<?php

	class Stats extends CI_Model{
		public function __construct() {
			parent::__construct();

			$title = "Quiz | STATS QUIZZ";

            $this->load->model('stats_bd');		//Chargement du modele stats_bd.php
            $this->load->model('auth');
            
		}
	}

?>