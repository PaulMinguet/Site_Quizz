<<<<<<< HEAD
<?php

	class Creer extends CI_Model{			//On déclare la classe "Creer"
		public function __construct() {
			parent::__construct();

			$title = "Quiz | CREER QUIZZ";

            $this->load->model('Auth');		//Chargement du modele auth.php
            $this->Auth->creer();			//Chargement de la fonction creer()) de auth.php
            
		}
	}
=======
<?php

	class Creer extends CI_Model{			//On déclare la classe "Creer"
		public function __construct() {
			parent::__construct();

			$title = "Quiz | CREER QUIZZ";

            $this->load->model('Auth');		//Chargement du modele auth.php
            $this->Auth->creer();			//Chargement de la fonction creer()) de auth.php
            
		}
	}
>>>>>>> edd111a8cf4b3279ed0611781f109610d69d04cc
?>