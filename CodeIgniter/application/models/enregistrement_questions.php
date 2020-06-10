<?php

    class Enregistrement_questions extends CI_Model {

        public $error = null;               //Déclaration des différentes variables
        public $success = null;
        public $insert_id = null;
        public $image_question = null;
        public $choix1 = null;

        public function __construct() {
            parent::__construct();
            if (isset($_POST['enonce']))                            //Idem pour enonce
                $this->enonce = $_POST['enonce'];

            if (isset($_POST['image']))                            //Idem pour image
                $this->image_question = $_POST['image'];

            if (isset($_POST['nombreQ']))                           //Idem pour le nombre de questions nombre
                $this->nb_questions = $_POST['nombreQ'];

            for($i = 1; $i < $nb_questions; $i++){
                if (isset($_POST['choix'.$i]))                            //Idem pour choix1
                    $this->choix.$i = $_POST['choix'.$i];
                }
        }



        public function creer_question(){                                    //Fonction de création de quizz
            if(isset($this->enonce)){
                $num = 1;
                for()
                $data = array(
                    'question_num'      => $num,
                    'question_enonce'   => $this->enonce,
                    'question_image'    => $this->image,
                    'quizz_id'          => $this->insert_id
                );
                $this->db->insert('Question', $data);
            }
        }
    }
?>