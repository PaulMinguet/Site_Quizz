<?php 
	class Signin extends CI_Model {

		function affiche_signin() {

			require $this->load->controllers('include/is_connected');
            require $this->load->controllers('include/auth.php');
			require $this->load->controllers('include/msg_log.php');
            
            $title = "Quiz | SIGN IN";
			
			require $this->load->views('header.php');
			require $this->load->views('nav.php');
			require $this->load->views('footer.php');
		} 
	}
?>