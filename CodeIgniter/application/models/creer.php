<?php
	class Creer extends CI_Model{

		function affiche_creer() {
            // not_connected();

			require $this->load->views('header.php');
			require $this->load->views('nav.php');

            // echo password_hash("$passwd", PASSWORD_DEFAULT);
            require $this->load->views('cactus.php');
            require $this->load->views('msg_log_view.php');

            require $this->load->views('creer_view.php');
			require $this->load->views('footer.php');
		}
	}
?>