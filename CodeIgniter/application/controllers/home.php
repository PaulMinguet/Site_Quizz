<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index() {                       //On déclare la fonction dans laquelle va passer par défaut le programme
        $this->load->database('default');           //On charge la base de données "default" depuis le fichier database
        $this->accueil();                           //On redirige l'utilisateur vers la fonction accueil (donc la page accueil)
    }
    public function accueil()
    {
    	$this->load->view('Nav');                   //Chargement de la vue "Nav" : barre de Navigation
    	$this->load->view('Header');                //Chargement du Header : css, js, ...
        $this->load->model('Accueil');              //Chargement du model "accueil"
        $this->load->view('Accueil_view');          //Chargement de la vue d'accueil
        $this->load->view('Cactus');                //Chargement de la vue Cactus
        $this->load->view('Footer');                //Chargement du Footer
        $this->load->view('Progress_bar');          //Chargement de la barre de progression
    }
    
    public function jeu() {                         //idem pour la page jeu
        $this->load->view('Nav');
        $this->load->view('Header');
        $this->load->view('Timer');
        $this->load->model('Jeu');
        $this->load->view('Jeu_view');
        $this->load->view('Cactus');
        $this->load->view('Footer');
        $this->load->view('Progress_bar');
    }
    public function note_eleve() {                         //idem pour la page note
        $this->load->view('Nav');
        $this->load->view('Header');
        $this->load->model('Note_eleve');
        $this->load->view('Note_eleve_view');
        $this->load->view('Cactus');
        $this->load->view('Footer');
        $this->load->view('Progress_bar');
    }
    
    public function creer() {                       //idem pour la page creer
        $this->load->view('Header');
        $this->load->view('Nav');
        $this->load->view('Cactus');
        $this->load->model('Creer');
        $this->load->view('Creer_view');
        $this->load->view('Footer');
        $this->load->view('Progress_bar');
    }
    
    public function creer_question() {                       //idem pour la page creer question
        $this->load->view('Header');
        $this->load->view('Nav');
        $this->load->view('Cactus');
        $this->load->model('Creer_question');
        $this->load->view('Creer_questions_view');
        $this->load->view('Footer');
        $this->load->view('Progress_bar');
    }

    public function stats() {                       //idem pour la page statistiques
        $this->load->view('Header');
        $this->load->view('Nav');
        $this->load->view('Cactus');
        //$this->load->view('Timer');
        $this->load->model('Stats');
        $this->load->view('Stats_view');
        $this->load->view('Footer');
        $this->load->view('Progress_bar');
    }
    
    public function login() {                       //idem pour la page login
        $this->load->view('Nav');
        $this->load->view('Header');
        $this->load->model('Login');
        $this->load->view('Cactus');
        $this->load->view('Login_view');
        $this->load->view('Footer');
        $this->load->view('Progress_bar');
    }

    public function eleve_log() {                       //idem pour la page login élève
        $this->load->view('Nav');
        $this->load->view('Header');
        $this->load->model('Eleve_log');
        $this->load->view('Cactus');
        $this->load->view('Eleve_log_view');
        $this->load->view('Footer');
        $this->load->view('Progress_bar');
    }
    
    public function signin() {                      //idem pour la page signin
        $this->load->view('Nav');
        $this->load->view('Header');
        $this->load->model('Signin');
        $this->load->view('Cactus');
        $this->load->view('Signin_view');
        $this->load->view('Footer');
        $this->load->view('Progress_bar');
    }
    
    public function deco() {                        //idem pour la page deco
        $this->load->view('Nav');
        $this->load->view('Header');
        $this->load->model('Deco');
        $this->load->view('Footer');
        $this->load->view('Progress_bar');
    }
}

?>
