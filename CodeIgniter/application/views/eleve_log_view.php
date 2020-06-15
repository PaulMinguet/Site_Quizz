<html>
	<body>
		<h1 class="title">Espace Élève</h1>

		<form method="post" class="login">						<!--Création du formulaire de connexion-->
		    <label for="nom" class="lab">Nom</label>
		    <input id="nom" type="nom" name="nom" placeholder="Votre adresse mail" value="<?php $nom ?>" class="area" />
		    <label for="prenom" class="lab">Prénom</label>
		    <input id="prenom" type="prenom" name="prenom" placeholder="Votre adresse mail" value="<?php $prenom ?>" class="area" />
		    <input type="submit" name="connect" value="Se connecter" style="display:block;">
		</form>
	</body>
</html>