<nav>
    <ul>
        <li><?php echo anchor('home/accueil', '<span class="btn_nav">&nbsp;&nbsp;Accueil</span>', 'id="btn-acc", class="fas fa-home"')?>
            <li><a href="../home/accueil" id="nomnav">
            <?php if(isset($_SESSION['username'])){ 
                    echo "<span class='point_co point_vert'></span>" . $_SESSION['username'];
                } else {
                    echo "<span class='point_co point_rouge'></span> <span>Veuillez vous connecter</span>";
                }
            ?></a></li>
        <li><?php echo anchor('home/accueil', '<span class="btn_nav">&nbsp;&nbsp;Jouer</span>', 'class="fas fa-gamepad", id="btn-play"')?></li>
        <li><?php echo anchor('home/signin', '<span class="btn_nav">&nbsp;&nbsp;Sign In</span>', 'id="btn-sign", class="fas fa-sign-in-alt "')?></li>
        <li><?php echo anchor('home/login', '<span class="btn_nav">&nbsp;&nbsp;Log In</span>', 'id="btn-log", class="fas fa-key "')?></li>
        <?php if(isset($_SESSION['username'])){
            if(isset($_SESSION['statut']) && $_SESSION['statut'] == 'professeur'){ 
                echo "<li>".anchor('home/stats', '<span class="btn_nav">&nbsp;&nbsp;Statistiques</span>', 'id="btn-stats", class="far fa-chart-bar"')."</li>";
            }
        } 
        ?>
        <?php if(isset($_SESSION['username'])) {
            echo "<li>".anchor('home/deco', '<span class="btn_nav">&nbsp;&nbsp;Déconnection</span>', 'id="btn-dec", class="fas fa-sign-out-alt"')."</li>";
        }
        ?>   <!--Si l'utilisateur est connecté, alors on affiche le bouton déconnection et statistiques-->
        
    </ul>
</nav>