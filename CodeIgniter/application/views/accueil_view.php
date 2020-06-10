<html>
	<body>
		<h1 class="title">Bienvenue <?php if(isset($_SESSION['username']))echo $_SESSION['username']?></h1>			<!--Message de bienvenue-->
	    <h3 class="text">Cette application web permet à des professeurs inscrits sur le site de créer des quizz (questionnaires à choix multiples).</h3>

	    <div class="launch">
	    	<?php 
	    	if(isset($_SESSION['statut'])){									//Si la variable statut a une valeur,
		    	if($_SESSION['statut'] == "professeur"){					//Qui est "professeur"
			        echo "<a href='../home/creer'>Créer un nouveau quizz !</a>";	//Alors on affiche le bouton pour qu'il puisse créer un quizz
			    }else{														//Qui est autre (donc élève ou rien)
			    	echo "<form method='post' class='login'>				
<<<<<<< HEAD
                            <label for='lien' class='lab'>Lien du Quizz</label>
                            <input id='lien' type='text' name='lien' placeholder='Votre lien' style='height:5%; border-color: transparent transparent #FFF transparent;' />
                            <script src='<?php echo base_url(); ?>js/radioBtnFin.js'></script>
                            <input type='submit' name='connect' value='Accéder' class='lab'>
                    </form>";											//Sinon on affiche un champ de texte pour que la personne saisisse l'url d'un quizz
                } 

			} else {                                //Par défaut, on affiche un champ de texte pour que la personne saisisse l'url d'un quizz
                    echo "<form method='post' class='login'>				
                                <label for='lien' class='lab'>Lien du Quizz</label>
                                <input id='lien' type='text' name='lien' placeholder='Votre lien' style='height:40px; width:70%; border-color: transparent transparent #FFF transparent;' />
                                <script src='<?php echo base_url(); ?>js/radioBtnFin.js'></script>
                                <input type='submit' name='connect' value='Accéder' class='lab'>
                        </form>";										
            }
=======
	            			<label for='lien' class='lab'>Lien du Quizz</label>
				            <input id='lien' type='text' name='lien' placeholder='Votre lien' style='height:5%; border-color: transparent transparent #FFF transparent;' />
	 		           		<script src='<?php echo base_url(); ?>js/radioBtnFin.js'></script>
	            			<input type='submit' name='connect' value='Se connecter' class='lab'>
				        </form>";											//Alors on affiche un champ de texte pour que la personne saisisse l'url d'un quizz
				}
			}else{
				echo "<form method='post' class='login'>				
            			<label for='lien' class='lab'>Lien du Quizz</label>
			            <input id='lien' type='text' name='lien' placeholder='Votre lien' style='height:5%; width: 184px; margin-left: 4px; padding: 0 12px; border-color: transparent transparent #FFF transparent;' />
 		           		<script src='<?php echo base_url(); ?>js/radioBtnFin.js'></script>
            			<input type='submit' name='connect' value='Se connecter' class='lab'>
			        </form>";
			}
>>>>>>> origin/paul
			?>
	    </div>
	</body>
</html>