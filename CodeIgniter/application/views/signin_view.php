<html>
    <head>
        <link rel = "stylesheet" type = "text/css" 
	    href = "<?php echo base_url(); ?>css/style.css">
        <script src="<?php echo base_url(); ?>js/btnSelect.js"></script>
    </head>

    <body>
        <h1 class="title">Espace Sign In</h1>

        <form action="home/jeu" method="post" class="login">
            <label for="nom">Nom</label>
            <input id="nom" type="text" name="nom" placeholder="Votre nom" value="<?php $nom ?>" class="area" />
            <label for="prenom">Prénom</label>
            <input id="prenom" type="text" name="prenom" placeholder="Votre prénom" value="<?php $prenom ?>" class="area" />
            <label for="email">Email</label>
            <input id="email" type="email" name="email" placeholder="Votre adresse mail" value="<?php $email ?>" class="area" />
            <label for="password">Mot de passe</label>
            <input id="password" type="text" name="password" placeholder="Votre mot de passe" value="<?php $passwd ?>" class="area" />
            <label for="statut">Statut</label>
            <div class="custom-select">
                <select name="statut" id="statut">
                    <option value="0">Choisissez votre statut</option>
                    <option value="1">Professeur</option>
                    <option value="2">Élève</option>
                </select>
            </div>
            <input type="submit" name="connect" value="S'inscrire">
        </form>
    </body>
</html>