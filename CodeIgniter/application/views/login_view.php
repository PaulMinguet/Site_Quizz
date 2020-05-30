<html>
	<body>
		<h1 class="title">Espace Log In</h1>

		<form action="../home/jeu" method="post" class="login">
		    <label for="email">Email</label>
		    <input id="email" type="email" name="email" placeholder="Votre adresse mail" value="<?php $email ?>" class="area" />
		    <label for="password">Mot de passe</label>
		    <input id="password" type="password" name="password" placeholder="Votre mot de passe" value="<?php $passwd ?>" class="area" />
		    <input type="submit" name="connect" value="Se connecter">
		</form>
    </body>
    <script src="<?php echo JS; ?>btnSelect.js"></script>
    
</html>