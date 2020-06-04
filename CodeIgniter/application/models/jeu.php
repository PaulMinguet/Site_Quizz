<?php
	class Jeu extends CI_Model{

		function affiche_jeu() {

            require $this->load->views('msg_log.php');		//Chargement de la vue msg_log.php
            require $this->load->views('questions.php');	//Chargement de la vue questions.php
			require $this->load->views('footer.php');		//Chargement de la vue footer.php
		}
	}
?>