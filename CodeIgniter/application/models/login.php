<?php 
	class Login extends CI_Model {

		public function __construct() {
			parent::__construct();

			$title = "Quiz | LOG IN";

			$this->load->model('auth');
	        $this->auth->connexion();
		} 
	}
?>