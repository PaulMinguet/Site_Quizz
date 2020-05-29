<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $this->accueil();
    }
    public function accueil()
    {
    	$this->load->helper('url');
    	$this->load->view('nav');
    	//$this->load->view('questions');
    	$this->load->view('header');
        $this->load->model('accueil');
        $this->load->view('accueil_view');
    }

    public function jeu() {
        $this->load->view('nav');
        $this->load->view('header');
        $this->load->model('jeu');
         $this->load->view('jeu_view');
    }
    public function login() {
        $this->load->view('nav');
        $this->load->view('header');
        $this->load->model('login');
        $this->load->view('login_view');
    }
    public function signin() {
        $this->load->view('nav');
        $this->load->view('header');
        $this->load->model('signin');
        $this->load->view('signin_view');
    } 
}

?>
