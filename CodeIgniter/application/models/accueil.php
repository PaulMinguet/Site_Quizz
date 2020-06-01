<?php

	class Accueil extends CI_Model{
		public function __construct() {
			parent::__construct();

			$title = "Quiz | Homepage";
			
			$this->load->model('auth');
			$this->auth->elepro();			
		}
	}
?>