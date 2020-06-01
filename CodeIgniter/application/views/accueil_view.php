<html>
	<body>
		<h1 class="title">Bienvenue <?php echo $_SESSION['username']?></h1>
	    <h3 class="text">Cette application web permet à des professeurs inscrits sur le site de créer des quizz (questionnaires à choix multiples).</h3>

	    <div class="launch">
	    	<?php if($_SESSION['statut'] == "professeur"){
		        echo "<a href='../home/creer'>Créer un quizz !</a>";
		    }else if($_SESSION['statut'] == "eleve"){
		    	echo "<form method='post' class='login'>
            			<label for='lien' class='lab'>Lien du Quizz</label>
			            <input id='lien' type='text' name='lien' placeholder='Votre lien' class='area' />
 		           		<script src='<?php echo base_url(); ?>js/radioBtnFin.js'></script>
            			<input type='submit' name='connect' value='Se connecter' class='lab'>
			        </form>";
			}else if($_SESSION['username'] == null){
				echo "<h1 class='title'>Veuillez vous connecter</h1>";
			}?>
	    </div>
	</body>
</html>