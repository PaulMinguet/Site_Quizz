<?php 

	class Signin extends CI_Model {
		public function __construct() {
			parent::__construct();

            $title = "Quiz | SIGN IN";
            
            $this->load->model('auth');
		} 
	}
?>