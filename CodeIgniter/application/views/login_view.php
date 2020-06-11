<html>
	<body>
		<h1 class="title">Espace Log In</h1>

		<form method="post" class="login">						<!--Création du formulaire de connexion-->
		    <label for="email" class="lab">Email</label>
		    <input id="email" type="email" name="email" placeholder="Votre adresse mail" value="<?php $email ?>" class="area" />
		    <label for="password" class="lab">Mot de passe</label>
		    <input id="password" type="password" name="password" placeholder="Votre mot de passe" value="<?php $passwd ?>" class="area" />
		    <input type="submit" name="connect" value="Se connecter" style="display:block;">
		</form>
	</body>
</html>