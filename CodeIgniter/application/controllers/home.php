<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $this->accueil();
        $this->load->helper('url');
        
    }
    public function accueil()
    {
    	$this->load->view('header');
        $this->load->view('nav');
        $this->load->view('msg_log_view');
        $this->load->model('accueil');
        $this->load->view('accueil_view');
        $this->load->view('footer');
    }
    
    public function jeu() {
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('msg_log_view');
        $this->load->model('jeu');
        $this->load->view('jeu_view');
        $this->load->view('questions');
        $this->load->view('footer');
    }
    public function login() {
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('msg_log_view');
        $this->load->model('login');
        $this->load->view('login_view');
        $this->load->view('footer');
    }
    public function signin() {
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('msg_log_view');
        $this->load->model('signin');
        $this->load->view('signin_view');
        $this->load->view('footer');
    } 
}

?>
