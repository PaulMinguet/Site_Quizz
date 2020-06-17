<body onload="onStart(); reset();">
    
    <h1 class="title">Créer le Quizz !</h1>
            
    <form method="post">
        <div class="quizz">
            <hr class="separate"/>
            <div class="line">
                <label for="nomqz"><span class="nb" id="nb1">1</span> Nom du Quizz</label>
                <input type="text" name="nomqz" id="nomqz" class="area_qz" placeholder="Nom" onclick="colorizeNB1()" required autofocus/>
            </div>
            <div class="line">
                <label for="nombre"><span class="nb" id="nb2">2</span> Nombre de questions</label>
                <div class="select-nb">
                    <select name="nombreQ" id="nombreQ" onclick="colorizeNB2()" required>
                        <?php for($i = 0; $i <= 9; $i++){
                                echo "<option value='".$i."'>0".$i."</option>";
                            }
                            for($i = 10; $i <= 30; $i++){
                                echo "<option value='".$i."'>".$i."</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="line">
                <label for="duree"><span id="nbStart"><i class="fas fa-stopwatch" id="nbStart2"></i></span> Chronomètre</label>
                <div class="time-select">
                    <select name="hrs" id="hrs" class="tps hrs"  onclick="colorizeChrono()">
                        <?php for($i = 0; $i <= 9; $i++){
                            echo "<option value='".$i."'>0".$i."</option>";
                        }?>
                        <?php for($i = 10; $i <= 24; $i++){
                            echo "<option value='".$i."'>".$i."</option>";
                        }?>
                    </select>
                    <span class="separ_tps">:</span>
                    <select name="min" id="min" class="tps min"  onclick="colorizeChrono()">
                        <?php for($i = 0; $i <= 9; $i++){
                            echo "<option value='".$i."'>0".$i."</option>";
                        }?>
                        <?php for($i = 10; $i <= 60; $i++){
                            echo "<option value='".$i."'>".$i."</option>";
                        }?>
                    </select>
                    <span class="separ_tps">:</span>
                    <select name="sec" id="sec" class="tps sec"  onclick="colorizeChrono()">
                        <?php for($i = 0; $i <= 9; $i++){
                            echo "<option value='".$i."'>0".$i."</option>";
                        }?>
                        <?php for($i = 10; $i <= 60; $i++){
                            echo "<option value='".$i."'>".$i."</option>";
                        }?>
                    </select>
                    <!--<input type="time" name="durée" id="durée" min="12:00:00" max="18:00:00" required class="area_qz" onclick="colorizeNBStart()" required/> -->
                    <script src="../../js/nb_colored.js"></script>
                </div>
            </div>
            </hr>
        </div>
        <br>
        

        <div class='quizz' style='height: 90px; width: 500px;'>
        <hr class='separate' style='top: -6px;'/>
        <div class='final_btn'>
            <div class='container' style='top: 50px;'>
                <input type='submit' name='save' value='Enregistrer' class='save_btn' id='save_btn'>
                <input type='submit' name='reset' value='Abandonner' class='reset_btn' id='reset_btn' onclick="reset();">
                <script src='../../js/reload.js'></script>
            </div>
        </div>
        </hr>
    </div>
    </form>
</body>
