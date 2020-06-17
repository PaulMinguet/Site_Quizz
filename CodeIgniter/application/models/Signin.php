<<<<<<< HEAD
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
=======
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
>>>>>>> edd111a8cf4b3279ed0611781f109610d69d04cc
