<nav>
    <ul>
	    <li><a href="./accueil" id="btn-acc"><i class="fas fa-home"></i>&nbsp;&nbsp;Accueil</a></li>
        <li><a href="./accueil" id="nomnav">
        <?php if(isset($_SESSION['username'])){ 
                echo "<span class='point_co point_vert'></span>" . $_SESSION['username'];
            } else {
                echo "<span class='point_co point_rouge'></span> <span>Veuillez vous connecter</span>";
            }
        ?></a></li>
        <li><a href="./accueil" id="btn-play"><i class="fas fa-gamepad"></i>&nbsp;&nbsp;Jouer</a></li>
	    <li><a href="./signin" id="btn-sign"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Sign In</a></li>
        <li><a href="./login" id="btn-log"><i class="fas fa-key"></i>&nbsp;&nbsp;Log In</a></li>
        <?php if(isset($_SESSION['username'])){
            if(isset($_SESSION['statut']) && $_SESSION['statut'] == 'professeur'){ 
                echo "<li><a href='./stats' id='btn-stats'><i class='fas fa-chart-bar'></i>&nbsp;&nbsp;Statistiques</a></li>";
            }
        } 
        ?>
        <?php if(isset($_SESSION['username'])) {
            echo "<li><a href='./deco' id='btn-dec'><i class='fas fa-sign-out-alt'></i>&nbsp;&nbsp;Déconnexion</a></li>";
        }
        ?>   <!--Si l'utilisateur est connecté, alors on affiche le bouton déconnection et statistiques-->
        
    </ul>
</nav>
