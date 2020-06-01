<?php
	class Jeu extends CI_Model{

		function affiche_jeu() {

            require $this->load->views('msg_log.php');
            require $this->load->views('questions.php');
			require $this->load->views('footer.php');
		}
	}
?>