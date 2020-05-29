<?php 
	class Signin extends CI_Model {

		function affiche_signin() {

			require $this->load->controllers('include/auth.php');
			$title = "Quiz | SIGN IN";
			
			require $this->load->views('header.php');
			require $this->load->views('nav.php');

			require $this->load->views('msg_log.php');
			require $this->load->views('footer.php');
		} 
	}
?>