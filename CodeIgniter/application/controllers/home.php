<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {
        $this->load->database('default');
        $this->accueil();
    }
    public function accueil() {
    	$this->load->helper('url');
    	$this->load->view('header');
        $this->load->view('nav');
        $this->load->view('msg_log_view');
        $this->load->view('accueil_view');
        $this->load->view('footer');
    }
    public function jeu() {
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('msg_log_view');
        $this->load->model('jeu');
        $this->load->view('jeu_view');
        $this->load->view('footer');
    }
    public function creer() {
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('msg_log_view');
        $this->load->model('creer');
        $this->load->view('creer_view');
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
    public function login_valid() {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|md5');
        
        if ($this->form_validation->run()) {
            redirect('home/creer');
        } else {
            $this->load->view('login_view');
        }
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
