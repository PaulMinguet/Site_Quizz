<html>
    <head>
        <script src="<?php echo base_url(); ?>js/radioBtn.js"></script>
    </head>
    <body>
        <h1 class="title">Espace Sign In</h1>

<?php
$nom=null;
$prenom=null;
$email=null;
$password=null;
$matiere=null;
$group=null;  
?>

        <form method="post" class="login">
            <label for="nom" class="lab">Nom</label>
            <input id="nom" type="text" name="nom" placeholder="Votre nom" value="<?php echo $nom; ?>" class="area" />
            <label for="prenom" class="lab">Prénom</label>
            <input id="prenom" type="text" name="prenom" placeholder="Votre prénom" value="<?php echo $prenom; ?>" class="area" />
            <label for="email" class="lab">Email</label>
            <input id="email" type="email" name="email" placeholder="Votre adresse mail" value="<?php echo $email; ?>" class="area" />
            <label for="password" class="lab">Mot de passe</label>
            <input id="password" type="password" name="password" placeholder="Votre mot de passe" value="<?php echo $password; ?>" class="area" />
            <label for="statep" class="lab">Statut</label>
            <label for="professeur" class="radio">Professeur</label>
            <input id="professeur" type="radio" name="statep" value="professeur" onchange="aff_cach_input('professeur')"/>
            <label for="eleve" class="radio">Élève</label>
            <input id="eleve" type="radio" name="statep" value="eleve" onchange="aff_cach_input('eleve')"/>
            <label id="mat" for="matiere" class="lab">Quelle matière dirigez-vous ?</label>
            <input id="matiere" type="matiere" name="matiere" placeholder="Matière" value="<?php echo $matiere; ?>" class="area" />
            <label id="grp" for="group" class="lab">Dans quel groupe êtes-vous ?</label>
            <input id="group" type="group" name="group" placeholder="Groupe" value="<?php echo $group; ?>" class="area" />

            <script src="<?php echo base_url(); ?>js/radioBtnFin.js"></script>

            <input type="submit" name="connect" value="S'inscrire" class="lab">
        </form>
    </body>
    <script src="<?php echo base_url(); ?>js/btnSelect.js"></script>
</html>