<nav>
    <ul>
        <li><?php echo anchor('home/accueil', '&nbsp;&nbsp;Accueil', 'id="btn-acc", class="fas fa-home"')?>
            <li><a href="../home/accueil" id="nomnav">
            <?php if(isset($_SESSION['username'])){ 
                    echo "<span class='point_co point_vert'></span>" . $_SESSION['username'];
                } else {
                    echo "<span class='point_co point_rouge'></span> <span>Veuillez vous connecter</span>";
                }
            ?></a></li>
        <li><?php echo anchor('home/accueil', '&nbsp;&nbsp;Jouer', 'class="fas fa-gamepad", id="btn-play"')?></li>
        <li><?php echo anchor('home/signin', '&nbsp;&nbsp;Sign In', 'id="btn-sign", class="fas fa-sign-in-alt"')?></li>
        <li><?php echo anchor('home/login', '&nbsp;&nbsp;Log In', 'id="btn-log", class="fas fa-key"')?></li>
        <?php if(isset($_SESSION['username'])){
            if(isset($_SESSION['statut']) && $_SESSION['statut'] == 'professeur'){ 
                echo "<li>".anchor('home/stats', '&nbsp;&nbsp;Statistiques', 'id="btn-stats", class="far fa-chart-bar"')."</li>";
            }
        } 
        ?>
        <?php if(isset($_SESSION['username'])) {
            echo "<li>".anchor('home/deco', '&nbsp;&nbsp;Déconnection', 'id="btn-dec", class="fas fa-sign-out-alt"')."</li>";
        }
        ?>   <!--Si l'utilisateur est connecté, alors on affiche le bouton déconnection et stats-->
        
    </ul>
</nav>