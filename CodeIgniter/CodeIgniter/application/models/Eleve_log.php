<?php 

	class Eleve_log extends CI_Model {		//On déclare la classe "Eleve_log"
		public function __construct() {
			parent::__construct();

            $title = "Quiz | SIGN IN";

           	$this->load->model('Auth');
           	$this->Auth->acces_quizz();
		} 
	}
?>