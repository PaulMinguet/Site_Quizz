<<<<<<< HEAD
<?php

	class Note_eleve extends CI_Model{		//On déclare la classe "Note_eleve"
		public function __construct() {
			parent::__construct();

			$title = "Quiz | NOTE QUIZZ";

            $this->load->model('Auth');		//Chargement du modele auth.php
            
		}
	}
=======
<?php

	class Note_eleve extends CI_Model{		//On déclare la classe "Note_eleve"
		public function __construct() {
			parent::__construct();

			$title = "Quiz | NOTE QUIZZ";

            $this->load->model('Auth');		//Chargement du modele auth.php
            
		}
	}
>>>>>>> edd111a8cf4b3279ed0611781f109610d69d04cc
?>