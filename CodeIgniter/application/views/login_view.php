<html>
	<body>
		<h1 class="title">Espace Log In</h1>

		<form method="post" class="login">
		    <label for="email" class="lab">Email</label>
		    <input id="email" type="email" name="email" placeholder="Votre adresse mail" value="<?php $email ?>" class="area" required />
		    <label for="password" class="lab">Mot de passe</label>
		    <input id="password" type="text" name="password" placeholder="Votre mot de passe" value="<?php $passwd ?>" class="area" required />
		    <input type="submit" name="connect" value="Se connecter" style="display:block;">
		</form>
	</body>
</html>