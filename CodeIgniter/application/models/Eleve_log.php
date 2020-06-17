<<<<<<< HEAD
<?php 

	class Eleve_log extends CI_Model {		//On déclare la classe "Eleve_log"
		public function __construct() {
			parent::__construct();

            $title = "Quiz | SIGN IN";

           	$this->load->model('Auth');
           	$this->Auth->acces_quizz();
		} 
	}
=======
<?php 

	class Eleve_log extends CI_Model {		//On déclare la classe "Eleve_log"
		public function __construct() {
			parent::__construct();

            $title = "Quiz | SIGN IN";

           	$this->load->model('Auth');
           	$this->Auth->acces_quizz();
		} 
	}
>>>>>>> edd111a8cf4b3279ed0611781f109610d69d04cc
?>