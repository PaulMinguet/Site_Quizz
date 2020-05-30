<?php
	class Accueil extends CI_Model{
		public function __construct() {
			parent::__construct();
			$title = "Quiz | Homepage";
			// not_connected();

			require $this->load->views('header.php');
			require $this->load->views('nav.php');


			// echo password_hash("$passwd", PASSWORD_DEFAULT);
			echo "<h1 class='bienvenue'>$prenom $nom <img src='../img/cactus.jpg'/> $email</h1>";
            require $this->load->views('msg_log.php');

			require $this->load->views('footer.php');
		}
	}
?>