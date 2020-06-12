<body>

    <h1 class="title">À vous de jouer !</h1>
    <br>
    <div class="container">
        <div class="nbQuizz rep_nb"><h1><?php echo "N°";?> </h1></div>
        <div class="statutQuizz actif">
            <h2><i class="fas fa-check-circle"></i>&nbsp;Actif</h2>
        </div>

        <div class="quizz">
            <hr class="separate"/>
            <div class="line">
                <label for="nomqz"><span class="nb" id="nb1" style="background-color: #2c006a; color: #ffe100; padding: 12px 13px;"><i class="fas fa-bahai"></i></span> Nom du Quizz</label>
                <div class="right_rep">
                    <h1 class="nomquizz rep_text">Nom du TRUDDDZS DXS ffr</h1>
                </div>
            </div>
            <div class="line">
                <label for="nombre"><span class="nb" id="nb2" style="background-color: #2c006a; color: #ffe100; padding: 12px 13px;"><i class="fas fa-bahai"></i></span> Nombre de questions</label>
                <div class="right_rep">
                    <div class="rep_nb">
                        <h1>3</h1>
                    </div>
                </div>
            </div>
            <div class="line">
                <label for="duree"><span id="nbStart"><i class="fas fa-stopwatch" id="nbStart2"></i></span> Durée</label>
                <div class="right_rep">
                    <div class="time-select-affich">
                        <h1 name="hrs" id="hrs" class="tps hrs">
                            <?php echo "12"; ?>
                        </h1>
                        <span class="separ_tps">:</span>
                        <h1 name="min" id="min" class="tps min">
                            <?php echo "59"; ?>
                        </h1>
                        <span class="separ_tps">:</span>
                        <h1 name="sec" id="sec" class="tps sec">
                            <?php echo "59"; ?>
                        </h1>
                        <!--<input type="time" name="durée" id="durée" min="12:00:00" max="18:00:00" required class="area_qz" onclick="colorizeNBStart()" required/> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <form class="container">
        <div class="nbQuizz rep_nb"><h1><?php echo "Q1";?> </h1></div>
       
        <div class="quizz">
            <div class="line">
                <div class="enonce">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quam pariatur reiciendis ea labore esse assumenda excepturi dicta, fuga aliquam. Architecto molestias ea itaque eius error velit hic adipisci sit?</p>
                </div>
            </div>
            <div class="line_rep">
                <div class="container2">
                    <div class="each_rep">
                        <label for="choixQ1">Choix 1</label>
                        <input type="checkbox" name="choixQ1" value="Choix 1" id="choix1_1" class='input_rep'>
                    </div>
                    <div class="each_rep">
                        <label for="choixQ1">Choix 2</label>
                        <input type="checkbox" name="choixQ1" value="Choix 2" id="choix1_2" class='input_rep'>                
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form class="container">
        <div class="nbQuizz rep_nb"><h1><?php echo "Q2";?> </h1></div>
        <div class="quizz">
            <div class="line">
                <div class="enonce">
                    <p>Lorem ipsum dolor sit ame EDFGKJHGFDDKJHGFDLKJ HGFDDJHGFD DXD?</p>
                </div>
            </div>
            <div class="line_rep">
                <div class="container2">
                    <div class="each_rep">
                        <label for="choixQ2">Choix 1</label>
                        <input type="radio" name="choixQ2" value="Choix 1" id="choix2_1" class='input_rep'>
                    </div>
                    <div class="each_rep">
                        <label for="choixQ2">Choix 2</label>
                        <input type="radio" name="choixQ2" value="Choix 2" id="choix2_2" class='input_rep'>                
                    </div>
                </div>
            </div>
            <div class="line_rep">
            </div>
        </div>
    </form>
    <form class="container">
        <div class="nbQuizz rep_nb"><h1><?php echo "Q3";?> </h1></div>
        <div class="quizz">
            <div class="img_added">
                <img src="<?php echo base_url(); ?>img/cactus.jpg" alt="" srcset="" class="img_rep">		<!--Affichage de l'image uploadé -->
            </div>
            <div class="line">
                <div class="enonce">
                    <p>Qu'y a-t-il sur cette image ?</p>
                </div>
            </div>
            <div class="line_rep">
                <div class="container2">
                    <div class="each_rep">
                        <label for="choixQ3">Ecrivez !</label>
                        <input type="text" name="choixQ3" value="" placeholder="Votre Réponse" id="choix2_1" class='input_rep_text'>
                    </div>
                </div>
            </div>
            <div class="line_rep">
            </div>
        </div>
    </form>

    <input type='submit' name='send' value='Envoyer' class='send_btn' id='send_btn'>

</body>