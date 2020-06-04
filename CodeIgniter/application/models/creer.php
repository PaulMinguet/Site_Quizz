<?php
	class Creer extends CI_Model{

		function affiche_creer() {

            $this->load->model('auth');		//Chargement du modele auth.php
            $this->auth->creer();			//Chargement de la fonction creer()) de auth.php
            
		}
	}
?>