<?php 

	class Signin extends CI_Model {
		public function __construct() {
			parent::__construct();

            $title = "Quiz | SIGN IN";

            $this->load->model('inscription_bd');		//Chargement du modele inscription_bd
           	$this->inscription_bd->inscription();		//Chargement de la fonction inscription() de inscription_bd
		} 
	}
?>