<<<<<<< HEAD
<?php
class Fonctions extends CI_Model {			//On déclare la classe "Fonctions"

	public function codeal(){
		$string = "";
	    $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	    srand((double)microtime()*1000000);
	    for($i=0; $i<15; $i++) {
	    	$string .= $chaine[rand()%strlen($chaine)];
	    }
	    return $string;
	    }
	}
=======
<?php
class Fonctions extends CI_Model {			//On déclare la classe "Fonctions"

	public function codeal(){
		$string = "";
	    $chaine = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	    srand((double)microtime()*1000000);
	    for($i=0; $i<15; $i++) {
	    	$string .= $chaine[rand()%strlen($chaine)];
	    }
	    return $string;
	    }
	}
>>>>>>> edd111a8cf4b3279ed0611781f109610d69d04cc
?>