<?php

	class Accueil extends CI_Model{			//On déclare la classe "Accueil"
		public function __construct() {
			parent::__construct();

			$title = "Quiz | Homepage";	//On défini le titre de la page
			
			$this->load->model('Auth');	//On charge le model "auth"
			$this->Auth->elepro();		//On charge la fonction elepro de auth (cf. auth.php)
			$this->Auth->accueil_url();
		}
	}
?>