<?php 

	class Signin extends CI_Model {						//On déclare la classe "Signin"
		public function __construct() {
			parent::__construct();

            $title = "Quiz | SIGN IN";

            $this->load->model('Inscription_bd');		//Chargement du modele inscription_bd
           	$this->Inscription_bd->inscription();		//Chargement de la fonction inscription() de inscription_bd
		} 
	}
?>
