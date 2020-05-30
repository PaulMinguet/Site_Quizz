<?php 
	class Login extends CI_Model {

		function affiche_login() {

            require $this->load->controllers('include/auth.php');
			require $this->load->controllers('include/msg_log.php');
            
			$title = "Quiz | LOG IN";
			
			require $this->load->views('header.php');
			require $this->load->views('nav.php');
            require $this->load->views('footer.php');
		} 
	}
?>