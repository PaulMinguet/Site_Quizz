<<<<<<< HEAD
<?php

    class Auth extends CI_Model {           //On déclare la classe "Auth"

        public $error = null;               //Déclaration des différentes variables
        public $success = null;
        public $nom_quizz = null;
        public $nb_questions = null;
        public $enonce = null;
        public $codeAleatoire = null;
        public $duree = null;
        public $insert_id = null;
        public $image_question = null;
        public $num = 1;
        public $bonnerep = array();
        public $choix = array();
        public $nbQ = null;
        public $choixUsr = array();
        public $faute = null;
        public $bon = null;
        public $scoreUsr = null;
        public $QId = null;
        public $scoreS20 = null;

        public function __construct() {
            parent::__construct();

            /*-----------------------------------------------Quizz--------------------------------------*/
            if (isset($_POST['nomqz']))                             //Idem pour nomqz
                $this->nom_quizz = $_POST['nomqz'];

            if (isset($_POST['nombreQ']))                           //Idem pour le nombre de questions nombre
                $this->nb_questions = $_POST['nombreQ'];

            if (isset($_POST['hrs']) && isset($_POST['min']) && isset($_POST['sec']))  
                $this->duree = $_POST['hrs']*3600 + $_POST['min']*60 + $_POST['sec'];

        }
        
        public function deconnexion(){                              //Fonction de déconnexion
            if(isset($_SESSION['username'])){                        //Si une personne est déjà connectée
                session_destroy();
                echo "<div class='title2 success deco'>Déconnecté ! "."<br>". "À la prochaine 🖐</div>"; //On affiche un message de déconnexion
            }
        }

        public function elepro(){                                   //Fonction pour récupérer le statut d'un utilisateur
            if(isset($_SESSION['email'])){                          //Si l'adresse email est renseignée
                $builder = $this->db->select("utilisateur_statut
                                            FROM Utilisateur
                                            WHERE utilisateur_mail = '".$_SESSION['email']."'", FALSE); //Alors on effectue une requête pour récupérer le statut de l'utilisateur
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $_SESSION['statut'] = $row["utilisateur_statut"];   //On assigne à la variable $_SESSION['statut'] la valeur trouvée

                    //echo "Session statut = ".$_SESSION['statut'];
                }
            }
        }

        public function getIdUser(){
            if(isset($_SESSION['email'])){                          //Si l'adresse email est renseignée
                $builder = $this->db->select("utilisateur_id
                                            FROM Utilisateur
                                            WHERE utilisateur_mail = '".$_SESSION['email']."'", FALSE); //Alors on effectue une requête pour récupérer l'id de l'utilisateur
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $_SESSION['id'] = $row["utilisateur_id"];   //On assigne à la variable $_SESSION['id'] la valeur trouvée
                }
            }
            return $_SESSION['id'];
        }

        public function creer(){                                    //Fonction de création de quizz
            if(isset($this->nom_quizz)){
                $this->load->model('Fonctions');
                $this->codeAleatoire = $this->Fonctions->codeal();
                //echo $this->codeAleatoire;
                //echo "<br>temps : ".$this->duree."<br>";
                $data = array(
                    'quizz_nom'         => $this->nom_quizz,
                    'quizz_etat'        => 1,
                    'quizz_cle'         => $this->codeAleatoire,
                    'quizz_duree'       => $this->duree,
                    'quizz_nbQuestions' => $this->nb_questions,
                    'quizz_cree_par'    => $this->getIdUser()
                );
                $this->db->insert('Quizz', $data);

                $_SESSION['last_id'] = $this->db->insert_id();

                //echo "ID : ".$this->insert_id;

                echo "<script>alert('Voici le code de votre quizz : ".$this->codeAleatoire." (Vous allez pouvoir la retrouver dans la section \"statistiques\")')</script>";
                header('Location: ./creer_question');
            }
        }

        public function get_last_id(){
            return $_SESSION['last_id'];
        }

        public function getNbQuestion(){
            if(isset($_SESSION['last_id'])){
                $builder = $this->db->select("quizz_nbQuestions
                                    FROM Quizz
                                    WHERE quizz_id = '".$_SESSION['last_id']."'", FALSE);
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $this->nbQ = $row["quizz_nbQuestions"];   //On assigne à la variable $_SESSION['id'] la valeur trouvée
                }
            }
            return $this->nbQ;
        }

        public function creer_question(){                                    //Fonction de création de creer_question
            //echo "last id : ".$_SESSION['last_id']."<br>";
            if(isset($_POST['enonceQ1'])){
                for($i = 1; $i <= $this->getNbQuestion(); $i++){

                    if (isset($_POST['enonceQ'.($i)]))
                        $this->enonce = $_POST['enonceQ'.($i)];

                    if (isset($_POST['img'.($i)]))
                        $this->image_question = $_POST['img'.($i)];

                    if(isset($this->enonce)){
                        $data = array(
                            'question_num'      => $i,
                            'question_enonce'   => $this->enonce,
                            'question_image'    => $this->image_question,
                            'quizz_id'          => $_SESSION['last_id']
                        );
                        $this->db->insert('Question', $data);
                        $q_id = $this->db->insert_id();

                        //echo "Question ID : ".$this->num."<br>";
                    }

                    //echo "énoncé : ".$this->enonce."<br>";

                    for($j = 1; $j <= 4; $j++){

                        if (isset($_POST['choix'.(($i-1)*4+$j)]))
                            $this->choix[$i] = $_POST['choix'.(($i-1)*4+$j)];

                        if (isset($_POST['bonneRep'.(($i-1)*4+$j)])){
                            $this->bonnerep[($j-1)] = 1;
                        }else{
                            $this->bonnerep[($j-1)] = 0;
                        }


                        if(isset($this->enonce)){
                            $data = array(
                                'question_id'       => $q_id,
                                'reponse_texte'     => $this->choix[$i],
                                'reponse_num'       => $j,
                                'reponse_valide'    => $this->bonnerep[$j-1]
                            );
                            $this->db->insert('Reponse', $data);
                        }
                    }
                    //echo "<br>";
                }
                echo "<script>alert('Le quizz a bien été créé ! (Vous allez pouvoir le retrouver dans la section \"statistiques\")')</script>";
            }
        }

        public function getNbQuestionAcCle(){
            if(isset($_GET['cle'])){
                $builder = $this->db->select("quizz_nbQuestions
                                    FROM Quizz
                                    WHERE quizz_cle = '".$_GET['cle']."'", FALSE);
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $this->nbQ = $row["quizz_nbQuestions"];   //On assigne à la variable $_SESSION['id'] la valeur trouvée
                }
            }
            return $this->nbQ;
        }

        public function getIdParCle($cle){
            if(isset($cle)){
                $builder = $this->db->select("quizz_id
                                    FROM Quizz
                                    WHERE quizz_cle = '".$cle."'", FALSE);
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $this->QuizzId = $row["quizz_id"];   //On assigne à la variable $_SESSION['id'] la valeur trouvée
                }
            }
            return $this->QuizzId;
        }

        public function terminerQuizz(){
            for($i = 1; $i <= $this->getNbQuestionAcCle(); $i++){
                $this->faute = 0;
                for($j = 1; $j <= 4; $j++){
                    if(isset($_POST['choix'.$i.'-'.$j])){
                        //echo "chx".$i."-".$j." : ".$_POST['choix'.$i.'-'.$j]."<br>";
                        $this->choixUsr[$i][$j] = 1;
                    }else{
                        $this->choixUsr[$i][$j] = 0;
                    }
                        $builder = $this->db->select("Rep.reponse_valide, Q.quizz_id
                                    FROM Reponse Rep INNER JOIN Question Ques ON Rep.question_id = Ques.question_id INNER JOIN Quizz Q ON Ques.quizz_id = Q.Quizz_id
                                    WHERE quizz_cle = '".$_GET['cle']."' AND Ques.question_num = '".$i."' AND Rep.reponse_num = '".$j."'", FALSE);
                        $query = $builder->get();
                        if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                            foreach ($query->result_array() as $row){
                                $this->QId = $row['quizz_id'];
                                //echo "rep valide = ".$row['reponse_valide']."<br>";
                                if($this->choixUsr[$i][$j] == $row['reponse_valide']){
                                    //echo "Bonne rep +1<br>";
                                }else{
                                    $this->faute++;
                                    //echo "Mauvaise rep -1<br>";
                                }
                            }
                        }

                }
                //echo "faute = ".$this->faute."<br>";
                if($this->faute == 0){
                    $this->scoreUsr++;
                    //echo "score = ".$this->scoreUsr."<br><br>";
                }
            }
            if(isset($this->scoreUsr)){
                $this->scoreS20 = round($this->scoreUsr*20/$this->getNbQuestionAcCle(),2);
                $_SESSION['note'] = $this->scoreS20;
                $data = array(
                    'quizz_id'          => $this->QId,
                    'score_prenom'      => $_SESSION['prenom'],
                    'score_nom'         => $_SESSION['nom'],
                    'score'             => $this->scoreS20
                );
                $this->db->insert('Score', $data);
                echo "<div class='container-score-jeu'>
                         <p class='score'>Votre score"."<br/>"."<span>".($this->scoreUsr*20/$this->getNbQuestionAcCle())."</span>"."/20</p>
                     </div>";
                $termine = 1;
            }
            if(!empty($termine)){
                header('Location: ./note_eleve');
            }
        }

        public function getScore(){
            if(isset($_SESSION['note']))
                return $_SESSION['note'];
        }

        public function accueil_url(){
            if(isset($_POST['lien'])){
                $_SESSION['cleQuizz'] = $_POST['lien'];
                $builder = $this->db->select("quizz_id
                                    FROM Quizz
                                    WHERE quizz_cle = '".$_POST['lien']."'", FALSE);
                        $query = $builder->get();
                        if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                            foreach ($query->result_array() as $row){
                                if(isset($_SESSION['username'])){
                                    header('Location: ./jeu?cle='.$_POST['lien']);
                                }else{
                                    header('Location: ./eleve_log');
                                }
                            }
                        }else{
                            echo "<script>alert(\"Le quizz demandé n'existe pas !\")</script>";
                        }
            }
        }

        public function acces_quizz(){
            if(isset($_POST['nom'])){
                $_SESSION['nom'] = $_POST['nom'];
                $_SESSION['prenom'] = $_POST['prenom'];
                header('Location: ./jeu?cle='.$_SESSION['cleQuizz']);
            }
        }
    }
=======
<?php

    class Auth extends CI_Model {           //On déclare la classe "Auth"

        public $error = null;               //Déclaration des différentes variables
        public $success = null;
        public $nom_quizz = null;
        public $nb_questions = null;
        public $enonce = null;
        public $codeAleatoire = null;
        public $duree = null;
        public $insert_id = null;
        public $image_question = null;
        public $num = 1;
        public $bonnerep = array();
        public $choix = array();
        public $nbQ = null;
        public $choixUsr = array();
        public $faute = null;
        public $bon = null;
        public $scoreUsr = null;
        public $QId = null;
        public $scoreS20 = null;

        public function __construct() {
            parent::__construct();

            /*-----------------------------------------------Quizz--------------------------------------*/
            if (isset($_POST['nomqz']))                             //Idem pour nomqz
                $this->nom_quizz = $_POST['nomqz'];

            if (isset($_POST['nombreQ']))                           //Idem pour le nombre de questions nombre
                $this->nb_questions = $_POST['nombreQ'];

            if (isset($_POST['hrs']) && isset($_POST['min']) && isset($_POST['sec']))  
                $this->duree = $_POST['hrs']*3600 + $_POST['min']*60 + $_POST['sec'];

        }
        
        public function deconnexion(){                              //Fonction de déconnexion
            if(isset($_SESSION['username'])){                       //Si une personne est déjà connectée
                session_destroy();
                echo "<div class='title2 success deco'>Déconnecté ! "."<br>". "À la prochaine 🖐</div>"; //On affiche un message de déconnexion
            }
        }

        public function elepro(){                                   //Fonction pour récupérer le statut d'un utilisateur
            if(isset($_SESSION['email'])){                          //Si l'adresse email est renseignée
                $builder = $this->db->select("utilisateur_statut
                                            FROM Utilisateur
                                            WHERE utilisateur_mail = '".$_SESSION['email']."'", FALSE); //Alors on effectue une requête pour récupérer le statut de l'utilisateur
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $_SESSION['statut'] = $row["utilisateur_statut"];   //On assigne à la variable $_SESSION['statut'] la valeur trouvée

                    //echo "Session statut = ".$_SESSION['statut'];
                }
            }
        }

        public function getIdUser(){
            if(isset($_SESSION['email'])){                          //Si l'adresse email est renseignée
                $builder = $this->db->select("utilisateur_id
                                            FROM Utilisateur
                                            WHERE utilisateur_mail = '".$_SESSION['email']."'", FALSE); //Alors on effectue une requête pour récupérer l'id de l'utilisateur
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $_SESSION['id'] = $row["utilisateur_id"];   //On assigne à la variable $_SESSION['id'] la valeur trouvée
                }
            }
            return $_SESSION['id'];
        }

        public function creer(){                                    //Fonction de création de quizz
            if(isset($this->nom_quizz)){                            //Si le nom du quizz est renseigné
                $this->load->model('Fonctions');                    //On crée la clé du quizz
                $this->codeAleatoire = $this->Fonctions->codeal(); 
                //echo $this->codeAleatoire;
                //echo "<br>temps : ".$this->duree."<br>";
                $data = array(                                      //Et on rentre les valeurs du quizz dans la base de données
                    'quizz_nom'         => $this->nom_quizz,
                    'quizz_etat'        => 1,
                    'quizz_cle'         => $this->codeAleatoire,
                    'quizz_duree'       => $this->duree,
                    'quizz_nbQuestions' => $this->nb_questions,
                    'quizz_cree_par'    => $this->getIdUser()
                );
                $this->db->insert('Quizz', $data);

                $_SESSION['last_id'] = $this->db->insert_id();

                //echo "ID : ".$this->insert_id;

                echo "<script>alert('Voici le code de votre quizz : ".$this->codeAleatoire." (Vous allez pouvoir la retrouver dans la section \"statistiques\")')</script>";
                header('Location: ./creer_question');
            }
        }

        public function get_last_id(){
            return $_SESSION['last_id'];
        }

        public function getNbQuestion(){
            if(isset($_SESSION['last_id'])){
                $builder = $this->db->select("quizz_nbQuestions
                                    FROM Quizz
                                    WHERE quizz_id = '".$_SESSION['last_id']."'", FALSE);
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $this->nbQ = $row["quizz_nbQuestions"];   //On assigne à la variable $_SESSION['id'] la valeur trouvée
                }
            }
            return $this->nbQ;
        }

        public function creer_question(){                                    //Fonction de création de creer_question
            //echo "last id : ".$_SESSION['last_id']."<br>";
            if(isset($_POST['enonceQ1'])){
                for($i = 1; $i <= $this->getNbQuestion(); $i++){

                    if (isset($_POST['enonceQ'.($i)]))
                        $this->enonce = $_POST['enonceQ'.($i)];

                    if (isset($_POST['img'.($i)]))
                        $this->image_question = $_POST['img'.($i)];

                    if(isset($this->enonce)){
                        $data = array(
                            'question_num'      => $i,
                            'question_enonce'   => $this->enonce,
                            'question_image'    => $this->image_question,
                            'quizz_id'          => $_SESSION['last_id']
                        );
                        $this->db->insert('Question', $data);
                        $q_id = $this->db->insert_id();

                        //echo "Question ID : ".$this->num."<br>";
                    }

                    //echo "énoncé : ".$this->enonce."<br>";

                    for($j = 1; $j <= 4; $j++){

                        if (isset($_POST['choix'.(($i-1)*4+$j)]))
                            $this->choix[$i] = $_POST['choix'.(($i-1)*4+$j)];

                        if (isset($_POST['bonneRep'.(($i-1)*4+$j)])){
                            $this->bonnerep[($j-1)] = 1;
                        }else{
                            $this->bonnerep[($j-1)] = 0;
                        }


                        if(isset($this->enonce)){
                            $data = array(
                                'question_id'       => $q_id,
                                'reponse_texte'     => $this->choix[$i],
                                'reponse_num'       => $j,
                                'reponse_valide'    => $this->bonnerep[$j-1]
                            );
                            $this->db->insert('Reponse', $data);
                        }
                    }
                    //echo "<br>";
                }
                echo "<script>alert('Le quizz a bien été créé ! (Vous allez pouvoir le retrouver dans la section \"statistiques\")')</script>";
                header('Location: ./Accueil');
            }
        }

        public function getNbQuestionAcCle(){
            if(isset($_GET['cle'])){
                $builder = $this->db->select("quizz_nbQuestions
                                    FROM Quizz
                                    WHERE quizz_cle = '".$_GET['cle']."'", FALSE);
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $this->nbQ = $row["quizz_nbQuestions"];   //On assigne à la variable $_SESSION['id'] la valeur trouvée
                }
            }
            return $this->nbQ;
        }

        public function getIdParCle($cle){
            if(isset($cle)){
                $builder = $this->db->select("quizz_id
                                    FROM Quizz
                                    WHERE quizz_cle = '".$cle."'", FALSE);
                $query = $builder->get();
                if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                    foreach ($query->result_array() as $row)
                        $this->QuizzId = $row["quizz_id"];   //On assigne à la variable $_SESSION['id'] la valeur trouvée
                }
            }
            return $this->QuizzId;
        }

        public function terminerQuizz(){
            for($i = 1; $i <= $this->getNbQuestionAcCle(); $i++){
                $this->faute = 0;
                for($j = 1; $j <= 4; $j++){
                    if(isset($_POST['choix'.$i.'-'.$j])){
                        //echo "chx".$i."-".$j." : ".$_POST['choix'.$i.'-'.$j]."<br>";
                        $this->choixUsr[$i][$j] = 1;
                    }else{
                        $this->choixUsr[$i][$j] = 0;
                    }
                        $builder = $this->db->select("Rep.reponse_valide, Q.quizz_id
                                    FROM Reponse Rep INNER JOIN Question Ques ON Rep.question_id = Ques.question_id INNER JOIN Quizz Q ON Ques.quizz_id = Q.Quizz_id
                                    WHERE quizz_cle = '".$_GET['cle']."' AND Ques.question_num = '".$i."' AND Rep.reponse_num = '".$j."'", FALSE);
                        $query = $builder->get();
                        if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                            foreach ($query->result_array() as $row){
                                $this->QId = $row['quizz_id'];
                                //echo "rep valide = ".$row['reponse_valide']."<br>";
                                if($this->choixUsr[$i][$j] == $row['reponse_valide']){
                                    //echo "Bonne rep +1<br>";
                                }else{
                                    $this->faute++;
                                    //echo "Mauvaise rep -1<br>";
                                }
                            }
                        }

                }
                //echo "faute = ".$this->faute."<br>";
                if($this->faute == 0){
                    $this->scoreUsr++;
                    //echo "score = ".$this->scoreUsr."<br><br>";
                }
            }
            if(isset($this->scoreUsr)){
                $this->scoreS20 = round($this->scoreUsr*20/$this->getNbQuestionAcCle(),2);
                $_SESSION['note'] = $this->scoreS20;
                $data = array(
                    'quizz_id'          => $this->QId,
                    'score_prenom'      => $_SESSION['prenom'],
                    'score_nom'         => $_SESSION['nom'],
                    'score'             => $this->scoreS20
                );
                $this->db->insert('Score', $data);
                echo "<div class='container-score-jeu'>
                         <p class='score'>Votre score"."<br/>"."<span>".($this->scoreUsr*20/$this->getNbQuestionAcCle())."</span>"."/20</p>
                     </div>";
                $termine = 1;
            }
            if(!empty($termine)){
                header('Location: ./note_eleve');
            }
        }

        public function getScore(){
            if(isset($_SESSION['note']))
                return $_SESSION['note'];
        }

        public function accueil_url(){
            if(isset($_POST['lien'])){
                $_SESSION['cleQuizz'] = $_POST['lien'];
                $builder = $this->db->select("quizz_id
                                    FROM Quizz
                                    WHERE quizz_cle = '".$_POST['lien']."'", FALSE);
                        $query = $builder->get();
                        if($query->num_rows() > 0){                         //Si on trouve un résultat alors
                            foreach ($query->result_array() as $row){
                                if(isset($_SESSION['username'])){
                                    header('Location: ./jeu?cle='.$_POST['lien']);
                                }else{
                                    header('Location: ./eleve_log');
                                }
                            }
                        }else{
                            echo "<script>alert(\"Le quizz demandé n'existe pas !\")</script>";
                        }
            }
        }

        public function acces_quizz(){
            if(isset($_POST['nom'])){
                $_SESSION['nom'] = $_POST['nom'];
                $_SESSION['prenom'] = $_POST['prenom'];
                header('Location: ./jeu?cle='.$_SESSION['cleQuizz']);
            }
        }
    }
>>>>>>> edd111a8cf4b3279ed0611781f109610d69d04cc
?>