<html>
	<head>
		<link rel = "stylesheet" type = "text/css" 
	    href = "<?php echo base_url(); ?>css/style.css">
	    <script type = 'text/javascript' src = "<?php echo base_url(); 
   		?>js/btnSelect.js"></script>
	</head>

	<body>
		<h1 class="title">Espace Log In</h1>

		<form action="../home/jeu" method="post" class="login">
		    <label for="email">Email</label>
		    <input id="email" type="email" name="email" placeholder="Votre adresse mail" value="<?= htmlentities($email) ?>" class="area" />
		    <label for="password">Mot de passe</label>
		    <input id="password" type="text" name="password" placeholder="Votre mot de passe" value="<?= htmlentities($passwd) ?>" class="area" />
		    <input type="submit" name="connect" value="Se connecter">
		</form>
	</body>
</html>