<<<<<<< HEAD
<?php

	class Stats extends CI_Model{				//On déclare la classe "Stats"
		public function __construct() {
			parent::__construct();

			$title = "Quiz | STATS QUIZZ";

            $this->load->model('Stats_bd');		//Chargement du modele stats_bd.php
            $this->load->model('Auth');			//Chargement du modele Auth.php
            
		}
	}

=======
<?php

	class Stats extends CI_Model{				//On déclare la classe "Stats"
		public function __construct() {
			parent::__construct();

			$title = "Quiz | STATS QUIZZ";

            $this->load->model('Stats_bd');		//Chargement du modele stats_bd.php
            $this->load->model('Auth');			//Chargement du modele Auth.php
            
		}
	}

>>>>>>> edd111a8cf4b3279ed0611781f109610d69d04cc
?>