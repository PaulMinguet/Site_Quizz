<body>

    <h1 class="title">Statistiques</h1>
    <div class="nbQuizz rep_nb"><h1><?php echo "1";?> </h1></div>

<div class="quizz">
            <hr class="separate"/>
            <div class="line">
                <label for="nomqz"><span class="nb" id="nb1">1</span> Nom du Quizz</label>
                <div class="right_rep">
                    <h1 class="nomquizz rep_text">Tarabistouilles</h1>
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
            </hr>
        </div>

</body>