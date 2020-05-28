<?php

class quizz extends CI_Controller {
    public function index() {
        $this->accueil();
    }
    
    public function accueil() {
        $this->load->view('../models/accueil');
    }
    public function jeu() {
        $this->load->view('../models/jeu');
    }
    public function login() {
        $this->load->view('../models/login');
    }
    public function signin() {
        $this->load->view('../models/signin');
    } 
}

?>