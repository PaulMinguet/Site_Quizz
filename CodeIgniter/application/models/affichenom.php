<?php
	class Affichenom extends CI_Model {
		public function __construct(){
			parent::__construct();
			if($_SESSION['username'] != null){
				echo "<h1 style='text-align:center;color:red;'>connecté !</h1><br>";
			}else{
				echo "<h1 style='text-align:center;color:red;'>déconnecté !</h1><br>";
			}
		}
	}
?>