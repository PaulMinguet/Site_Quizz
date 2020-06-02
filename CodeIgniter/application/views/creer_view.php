<body onload="onStart();">
    
    <h1 class="title">Créer le Quizz !</h1>
            
    <form action="questions" method="post" class="quizz">
        <hr class="separate"/>
        <div class="line">
            <label for="nomqz"><span class="nb" id="nb1">1</span> Nom du Quizz</label>
            <input type="text" name="nomqz" id="nomqz" class="area_qz" placeholder="Nom" onclick="colorizeNB1()" required autofocus/>
        </div>
        <div class="line">
            <label for="nombre"><span class="nb" id="nb2">2</span> Nombre de questions</label>
            <div class="custom-select quizz-select" onclick="colorizeNB2()">
                <select name="nbr" id="nbr" onclick="colorizeNB2()" required>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <script src="<?php echo base_url(); ?>js/btnSelect.js"></script>
            </div>
        </div>
        <div class="each_quest">
            <div class="line">
                <label for="enonce"><span class="nb" id="nb3">3</span> Enoncé de la Q1</label>
                <textarea rows="2" cols="22" name="enonce" id="enonce" maxlength="500" placeholder="(500 caractères max.)" class="area_qz" onclick="colorizeNB3()" required></textarea>
            </div>
            <div class="line">
                <label for="reponse"><span class="nb" id="nb4">4</span> Réponse</label>
            </div>
            <div class="line reponse">
                <label for="nb_rep" class="sous_q"><span class="material-icons arrow">arrow_right_alt</span> Type</label>
                <div class="right">
                    <div class="radio_form">
                        <label for="unique">Bouton radio (réponse unique)</label>
                        <input id="unique" type="radio" name="statep" value="unique" onchange=""  onclick="colorizeNB4()" required/>
                    </div>
                    <div class="radio_form">
                        <label for="multi">Checkbox</label>
                        <input id="multi" type="radio" name="statep" value="multi" onchange=""  onclick="colorizeNB4()"/>
                    </div>
                    <div class="radio_form">
                        <label for="multi">Réponse texte</label>
                        <input id="multi" type="radio" name="statep" value="multi" onchange=""  onclick="colorizeNB4()"/>
                    </div>
                </div>
                <script src="<?php echo base_url(); ?>js/nb_colored.js"></script>
                
                <label for="nb_rep" class="sous_q"><span class="material-icons arrow">arrow_right_alt</span> Choix</label>
            </div>
        </div>
        <button class="add">+<span>Ajouter une question</span></button>
        <div class="final_btn">
            <div class="container">
                <input type="submit" name="save" value="Enregistrer" class="save_btn">
                <input type="submit" name="reset" value="Reset" class="reset_btn">
            </div>
        </div>
    </form>
</body>