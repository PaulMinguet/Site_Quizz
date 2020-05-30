<?php 
	class Login extends CI_Model {

		function affiche_login() {

            require $this->load->controllers('include/auth.php');
            
			$title = "Quiz | LOG IN";
            
            require $this->load->views('msg_log_view.php');
			require $this->load->views('header.php');
			require $this->load->views('nav.php');
            require $this->load->views('footer.php');
		} 
	}
?>