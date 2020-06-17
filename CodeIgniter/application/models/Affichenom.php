<<<<<<< HEAD
<?php
	class Affichenom extends CI_Model {					//On déclare la classe "Affichenom"
		public function __construct(){
			parent::__construct();
			if(isset($_SESSION['username'])){			//Si la variable username existe, alors un utilisateur est connecté et on affiche :
				echo "<h1 style='text-align:center;color:red;'>connecté !</h1><br>";
			}else{										//Sinon
				echo "<h1 style='text-align:center;color:red;'>déconnecté !</h1><br>";
			}
		}
	}
=======
<?php
	class Affichenom extends CI_Model {					//On déclare la classe "Affichenom"
		public function __construct(){
			parent::__construct();
			if(isset($_SESSION['username'])){			//Si la variable username existe, alors un utilisateur est connecté et on affiche :
				echo "<h1 style='text-align:center;color:red;'>connecté !</h1><br>";
			}else{										//Sinon
				echo "<h1 style='text-align:center;color:red;'>déconnecté !</h1><br>";
			}
		}
	}
>>>>>>> edd111a8cf4b3279ed0611781f109610d69d04cc
?>