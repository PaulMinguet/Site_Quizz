<?php 

	class Deco extends CI_Model {
		public function __construct() {
			parent::__construct();

            $title = "Quiz | DISCONNECT";

            $this->load->model('auth');
            $this->auth->deconnexion();
		}
	}
?>