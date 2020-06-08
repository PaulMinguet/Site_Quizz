<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {                       //On déclare la fonction dans laquelle va passer par défaut le programme
        $this->load->database('default');           //On charge la base de données "default" depuis le fichier database
        $this->accueil();                           //On redirige l'utilisateur vers la fonction accueil (donc la page accueil)
    }
    public function accueil()
    {
    	$this->load->view('nav');                   //Chargement de la vue "nav" : barre de navigation
    	$this->load->view('header');                //Chargement du header : css, js, ...
        $this->load->model('accueil');              //Chargement du model "accueil"
        $this->load->view('accueil_view');          //Chargement de la vue d'accueil
        $this->load->view('cactus');                //Chargement de la vue cactus
        $this->load->view('footer');                //Chargement du footer
        $this->load->view('progress_bar');                //Chargement du footer

    }
    
    public function jeu() {                         //idem pour la page jeu
        $this->load->view('nav');
        $this->load->view('header');
        $this->load->model('jeu');
        $this->load->view('jeu_view');
        $this->load->view('cactus');
        $this->load->view('questions');
        $this->load->view('footer');
        $this->load->view('progress_bar');
    }
    
    public function creer() {                       //idem pour la page creer
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('cactus');
        //$this->load->view('timer');
        $this->load->model('creer');
        $this->load->view('creer_view');
        $this->load->view('footer');
        $this->load->view('progress_bar');
    }
    
    public function creer_question() {                       //idem pour la page creer question
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('cactus');
        //$this->load->view('timer');
        $this->load->model('creer_question');
        $this->load->view('creer_questions_view');
        $this->load->view('footer');
        $this->load->view('progress_bar');
    }

    public function stats() {                       //idem pour la page statistiques
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('cactus');
        //$this->load->view('timer');
        $this->load->model('stats');
        $this->load->view('stats_view');
        $this->load->view('footer');
        $this->load->view('progress_bar');
    }
    
    public function login() {                       //idem pour la page login
        $this->load->view('nav');
        $this->load->view('header');
        $this->load->model('login');
        $this->load->view('cactus');
        $this->load->view('login_view');
        $this->load->view('footer');
        $this->load->view('progress_bar');
    }
    
    public function signin() {                      //idem pour la page signin
        $this->load->view('nav');
        $this->load->view('header');
        $this->load->model('signin');
        $this->load->view('cactus');
        $this->load->view('signin_view');
        $this->load->view('footer');
        $this->load->view('progress_bar');
    }
    
    public function deco() {                        //idem pour la page deco
        $this->load->view('nav');
        $this->load->view('header');
        $this->load->model('deco');
        $this->load->view('footer');
        $this->load->view('progress_bar');
    }
}

?>
