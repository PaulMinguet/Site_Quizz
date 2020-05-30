<html>
    <body>
        <h1 class="title">Espace Sign In</h1>

<?php
$nom=null;
$prenom=null;
$email=null;
$passwd=null;   
//            require $this->load->controllers('/include/auth.php');
?>

        <form action="../home/jeu" method="post" class="login">
            <label for="nom">Nom</label>
            <input id="nom" type="text" name="nom" placeholder="Votre nom" value="<?php echo $nom; ?>" class="area" required />
            <label for="prenom">Prénom</label>
            <input id="prenom" type="text" name="prenom" placeholder="Votre prénom" value="<?php echo $prenom; ?>" class="area" required />
            <label for="email">Email</label>
            <input id="email" type="email" name="email" placeholder="Votre adresse mail" value="<?php echo $email; ?>" class="area" required />
            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" placeholder="Votre mot de passe" value="<?php echo $passwd; ?>" class="area" required />
            <label for="statut">Statut</label>
            <div class="custom-select">
                <select name="statut" id="statut" required >
                    <option value="0">Choisissez votre statut</option>
                    <option value="1">Professeur</option>
                    <option value="2">Élève</option>
                </select>
            </div>
            <input type="submit" name="connect" value="S'inscrire">
        </form>
    </body>
    <script src="<?php echo base_url(); ?>js/btnSelect.js"></script>
</html>