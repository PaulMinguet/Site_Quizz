<?php

	class Stats extends CI_Model{
		public function __construct() {
			parent::__construct();

			$title = "Quiz | STATS QUIZZ";

            $this->load->model('stats_bd');		//Chargement du modele stats_bd.php
            $this->load->model('auth');
            $this->stats_bd->getStatsQuizz();	//Chargement de la fonction getStatsQuizz()) de stats_bd.php
            
		}
	}

?>