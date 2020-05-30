<?php
	class Accueil extends CI_Model{

		function affiche_accueil() {

			require $this->load->controllers('include/is_connected');
			require $this->load->controllers('include/auth.php');
			require $this->load->controllers('include/msg_log.php');
			$title = "Quiz | Homepage";
			// not_connected();

			require $this->load->views('header.php');
			require $this->load->views('nav.php');

			// echo password_hash("$passwd", PASSWORD_DEFAULT);

			require $this->load->views('footer.php');
		}
	}
?>