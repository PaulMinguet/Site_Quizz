<?php
	class Jeu extends CI_Model{

		function affiche_jeu() {

            
			// not_connected();

			require $this->load->views('header.php');
			require $this->load->views('nav.php');

			// echo password_hash("$passwd", PASSWORD_DEFAULT);

            require $this->load->views('jeu_view.php');
			require $this->load->views('footer.php');
		}
	}
?>