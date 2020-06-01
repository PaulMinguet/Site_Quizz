<?php
	class Creer extends CI_Model{

		function affiche_creer() {

            $this->load->model('auth');
            $this->auth->creer();
            
		}
	}
?>