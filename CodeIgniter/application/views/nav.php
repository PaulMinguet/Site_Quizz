<nav>
    <ul>
        <li><a href="../home/accueil" id="btn-acc"><i class="fas fa-home"></i>&nbsp;&nbsp;Accueil</a></li>  <!--Affichage de la barre de navigation-->
            <li><a href="../home/accueil" id="nomnav">
            <?php if(isset($_SESSION['username'])){ 
                    echo "<span class='point_co point_vert'></span>" . $_SESSION['username'];
                } else {
                    echo "<span class='point_co point_rouge'></span> <span>Veuillez vous connecter</span>";
                }
            ?></a></li>
        <li><a href="../home/signin" id="btn-sign"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Sign In</a></li>
        <li><a href="../home/login" id="btn-log"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Log In</a></li>
        <?php if(isset($_SESSION['username'])){echo "<li><a href='../home/deco' id='btn-dec'><i class='fas fa-sign-in-alt'></i>&nbsp;&nbsp;Déconnection</a></li>";}?>   <!--Si l'utilisateur est connecté, alors on affiche le bouton déconnection-->
    </ul>
</nav>