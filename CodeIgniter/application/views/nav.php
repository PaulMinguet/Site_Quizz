<nav>
    <ul>
        <li><a href="../home/accueil" id="btn-acc"><i class="fas fa-home"></i>&nbsp;&nbsp;Accueil</a></li>
        <li><a href="../home/accueil" id="nomnav"><?php if($_SESSION['username'] != null) echo "<span class='point_vert'></span>" . $_SESSION['username'];?></a></li>
        <li><a href="../home/signin" id="btn-sign"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Sign In</a></li>
        <li><a href="../home/login" id="btn-log"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Log In</a></li>
        <?php if($_SESSION['username'] != null){
            echo "<li><a href='../home/deco' id='btn-dec'><i class='fas fa-sign-in-alt'></i>&nbsp;&nbsp;Déconnection</a></li>";}
        ?>
    </ul>
</nav>


<!--
    louisd@gg.com

    test 
-->