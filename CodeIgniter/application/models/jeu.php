<?php
	class Jeu extends CI_Model{

		function affiche_jeu() {

			require $this->load->controllers('include/is_connected');
			require $this->load->controllers('include/auth.php');
			// not_connected();

			require $this->load->views('header.php');
			require $this->load->views('nav.php');

			// echo password_hash("$passwd", PASSWORD_DEFAULT);

            require $this->load->views('msg_log.php');
            require $this->load->views('questions.php');
			require $this->load->views('footer.php');
		}
	}
?>