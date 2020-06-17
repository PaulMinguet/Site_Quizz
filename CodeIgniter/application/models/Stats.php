<?php

	class Stats extends CI_Model{				//On déclare la classe "Stats"
		public function __construct() {
			parent::__construct();

			$title = "Quiz | STATS QUIZZ";

            $this->load->model('Stats_bd');		//Chargement du modele stats_bd.php
            $this->load->model('Auth');
            
		}
	}

?>