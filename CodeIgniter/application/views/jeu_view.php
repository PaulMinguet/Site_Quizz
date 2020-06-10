<body>

    <h1 class="title">À vous de jouer !</h1>
    <br>
    <div class="container">
<<<<<<< HEAD
        <div class="nbQuizz rep_nb"><h1><?php echo "N°";?> </h1></div>
=======
        <div class="nbQuizz rep_nb"><h1><?php echo "1";?> </h1></div>
>>>>>>> origin/paul
        <div class="statutQuizz actif">
            <h2><i class="fas fa-check-circle"></i>&nbsp;Actif</h2>
        </div>

        <div class="quizz">
            <hr class="separate"/>
            <div class="line">
<<<<<<< HEAD
                <label for="nomqz"><span class="nb" id="nb1" style="background-color: #2c006a; color: #ffe100; padding: 12px 13px;"><i class="fas fa-bahai"></i></span> Nom du Quizz</label>
                <div class="right_rep">
                    <h1 class="nomquizz rep_text">Nom du TRUDDDZS DXS ffr</h1>
                </div>
            </div>
            <div class="line">
                <label for="nombre"><span class="nb" id="nb2" style="background-color: #2c006a; color: #ffe100; padding: 12px 13px;"><i class="fas fa-bahai"></i></span> Nombre de questions</label>
=======
                <label for="nomqz"><span class="nb" id="nb1">1</span> Nom du Quizz</label>
                <div class="right_rep">
                    <h1 class="nomquizz rep_text">Tarabistouilles</h1>
                </div>
                <!--<input type="text" name="nomqz" id="nomqz" class="area_qz" placeholder="Nom" onclick="colorizeNB1()" required autofocus/>-->
            </div>
            <div class="line">
                <label for="nombre"><span class="nb" id="nb2">2</span> Nombre de questions</label>
>>>>>>> origin/paul
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
<<<<<<< HEAD
    </div>
    
    <div class="container">
        <div class="nbQuizz rep_nb"><h1><?php echo "Q1";?> </h1></div>
       
        <form class="quizz">
            <div class="line">
                <div class="enonce">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quam pariatur reiciendis ea labore esse assumenda excepturi dicta, fuga aliquam. Architecto molestias ea itaque eius error velit hic adipisci sit?</p>
                </div>
            </div>
            <div class="line-rep">
                <label for="choix1">Choix 1</label>
                <input type="radio" name="choix1" id="" class='input_rep'>
                <label for="choix1">Choix 2</label>
                <input type="radio" name="choix2" id="" class='input_rep'>
            </div>
            
        </form>
    </div>
    <div class="container">
        <div class="nbQuizz rep_nb"><h1><?php echo "Q2";?> </h1></div>
        <div class="quizz">
            <div class="line">
                <div class="enonce">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quam pariatur reiciendis ea labore esse assumenda excepturi dicta, fuga aliquam. Architecto molestias ea itaque eius error velit hic adipisci sit?</p>
                </div>
            </div>
            <div class="line-rep">
                <label for="choix1">Choix 1</label>
                <input type="radio" name="choix1" id="" class='input_rep'>
                <label for="choix1">Choix 2</label>
                <input type="radio" name="choix2" id="" class='input_rep'>
            </div>
            
        </div>
    </div>

    <input type='submit' name='send' value='Envoyer' class='send_btn' id='send_btn'>

=======
        <div class="bar_reussite">
            <ul>
                <li class="reussite">Réussi</li>
                <li class="moyen">Moyen</li>
                <li class="bof">Bof Bof</li>
            </ul>
        </div>
    </div>
    
    <div class="container">
        <div class="nbQuizz rep_nb"><h1><?php echo "2";?> </h1></div>
        <div class="statutQuizz preparation">
            <h2><i class="fas fa-cog"></i>&nbsp;En préparation</h2>
        </div>
        <div class="quizz">
            <hr class="separate"/>
            <div class="line">
                <label for="nomqz"><span class="nb" id="nb1">1</span> Nom du Quizz</label>
                <div class="right_rep">
                    <h1 class="nomquizz rep_text">Crazy Frog</h1>
                </div>
                <!--<input type="text" name="nomqz" id="nomqz" class="area_qz" placeholder="Nom" onclick="colorizeNB1()" required autofocus/>-->
            </div>
            <div class="line">
                <label for="nombre"><span class="nb" id="nb2">2</span> Nombre de questions</label>
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
        <div class="bar_reussite">
            <ul>
                <li class="reussite">Réussi</li>
                <li class="moyen">Moyen</li>
                <li class="bof">Bof Bof</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="nbQuizz rep_nb"><h1><?php echo "3";?> </h1></div>
        <div class="statutQuizz inactif">
            <h2><i class="fas fa-bomb"></i>&nbsp;Inactif</h2>
        </div>
        <div class="quizz">
            <hr class="separate"/>
            <div class="line">
                <label for="nomqz"><span class="nb" id="nb1">1</span> Nom du Quizz</label>
                <div class="right_rep">
                    <h1 class="nomquizz rep_text">Jacquouille</h1>
                </div>
                <!--<input type="text" name="nomqz" id="nomqz" class="area_qz" placeholder="Nom" onclick="colorizeNB1()" required autofocus/>-->
            </div>
            <div class="line">
                <label for="nombre"><span class="nb" id="nb2">2</span> Nombre de questions</label>
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
        <div class="bar_reussite">
            <ul>
                <li class="reussite">Réussi</li>
                <li class="moyen">Moyen</li>
                <li class="bof">Bof Bof</li>
            </ul>
        </div>
    </div>
>>>>>>> origin/paul
</body>