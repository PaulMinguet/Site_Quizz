<html>
    <head>
        <script src="../../js/radioBtn.js"></script>
    </head>
    <body>
        <h1 class="title">Espace Sign In</h1>

        <form method="post" class="login">                  <!--Création du formulaire d'inscription-->
            <label for="nom" class="lab">Nom</label>
            <input id="nom" type="text" name="nom" placeholder="Votre nom" class="area" required />
            <label for="prenom" class="lab">Prénom</label>
            <input id="prenom" type="text" name="prenom" placeholder="Votre prénom" class="area" required />
            <label for="email" class="lab">Email</label>
            <input id="email" type="email" name="email" placeholder="Votre adresse mail" class="area" required />
            <label for="password" class="lab">Mot de passe</label>
            <input id="password" type="password" name="password" placeholder="Votre mot de passe" class="area" required />
            <label for="statep" class="lab">Statut</label>
            <input id="professeur" type="radio" name="statep" value="professeur" onchange="aff_cach_input('professeur')"/>  <!--"écoute" la valeur de statep pour afficher ou non matière ou groupe-->
            <label for="professeur" class="radiosign">Professeur</label>
            <input id="eleve" type="radio" name="statep" value="eleve" onchange="aff_cach_input('eleve')"/>
            <label for="eleve" class="radiosign">Élève</label>
            <label id="mat" for="matiere" class="lab">Quelle matière dirigez vous ?</label>
            <input id="matiere" type="matiere" name="matiere" placeholder="Matière" class="area" />
            <label id="grp" for="group" class="lab">Dans quel groupe êtes-vous ?</label>
            <input id="group" type="group" name="group" placeholder="Groupe" class="area" />

            <script src="../../js/radioBtnFin.js"></script>

            <input type="submit" name="connect" value="S'inscrire" class="lab">
        </form>
    </body>
    <script src="../../js/btnSelect.js"></script>
</html>
