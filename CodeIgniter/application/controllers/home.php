<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {

        $this->load->database('default');
        $this->accueil();
    }
    public function accueil()
    {
    	$this->load->view('nav');
    	$this->load->view('header');
        $this->load->model('accueil');
       // $this->load->view('cactus');
        $this->load->view('accueil_view');
        $this->load->view('footer');
    }
    
    public function jeu() {
        $this->load->view('nav');
        $this->load->view('header');
        $this->load->model('jeu');
        $this->load->view('cactus');
        $this->load->view('jeu_view');
        $this->load->view('questions');
        $this->load->view('footer');
    }
    
    public function creer() {
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('msg_log_view');
        $this->load->view('cactus');
        $this->load->model('creer');
        $this->load->view('creer_view');
        $this->load->view('footer');
    }
    
    public function login() {
        $this->load->view('nav');
        $this->load->view('header');
        $this->load->model('login');
        $this->load->view('cactus');
        $this->load->view('login_view');
        $this->load->view('footer');
    }
    
    public function signin() {
        $this->load->view('nav');
        $this->load->view('header');
        $this->load->model('signin');
        $this->load->view('signin_view');
        $this->load->view('cactus');
        $this->load->view('footer');
    }
    
    public function deco() {
        $this->load->view('nav');
        $this->load->view('header');
        $this->load->model('deco');
        $this->load->view('footer');
    }
}

?>
