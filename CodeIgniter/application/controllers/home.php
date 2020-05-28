<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        echo 'test';
    }
    public function accueil()
    {
        $this->load->views('accueil');
    }

    // public function jeu() {
    //     $this->load->views('jeu');
    // }
    // public function login() {
    //     $this->load->views('login');
    // }
    // public function signin() {
    //     $this->load->views('signin');
    // } 
}

?>
