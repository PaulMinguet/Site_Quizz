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
            require $this->load->views('msg_log_view');

			// echo password_hash("$passwd", PASSWORD_DEFAULT);
			echo "<h1 class='bienvenue'>$prenom $nom <img src='../img/cactus.jpg'/> $email</h1>";

			require $this->load->views('footer.php');
		}
	}
?>