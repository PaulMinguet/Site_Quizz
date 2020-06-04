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
                <label for="image"><span class="nb" id="nb4">4</span> Ajouter une image</label>
                <div class="right add_img">
                    <div class="radio_form">
                        <label for="oui">Oui</label>
                        <input id="oui" type="radio" name="statep" value="oui" onchange=""  onclick="colorizeNB4(); dragDrop();" />
                    </div>
                    <div class="radio_form">
                        <label for="non">Non</label>
                        <input id="non" type="radio" name="statep" value="non" onchange=""  onclick="colorizeNB4(); dragDrop();" />
                    </div>
                    <div class="dropper" id="dropper">
                        <span id="btn_quit" onclick="btnQuit();">×</span>
                        <h2>Drag & Drop</h2>
                    </div>
                    
                    <script src="<?php echo base_url(); ?>js/dragDrop.js"></script>
                </div>
            </div>
            <div class="line line5">
                <label for="reponse"><span class="nb" id="nb5">5</span> Réponse</label>
            </div>
            <div class="line reponse">
                <label for="nb_rep" class="sous_q"><span class="material-icons arrow">arrow_right_alt</span> Type</label>
                <div class="right">
                    <div class="radio_form">
                        <label for="unique">Bouton radio (réponse unique)</label>
                        <input id="unique" type="radio" name="statep" value="unique" onchange=""  onclick="colorizeNB5()" required/>
                    </div>
                    <div class="radio_form">
                        <label for="multi">Checkbox</label>
                        <input id="multi" type="radio" name="statep" value="multi" onchange=""  onclick="colorizeNB5()"/>
                    </div>
                    <div class="radio_form">
                        <label for="multi">Réponse texte</label>
                        <input id="multi" type="radio" name="statep" value="multi" onchange=""  onclick="colorizeNB5()"/>
                    </div>
                </div>
                
                <label for="nb_rep" class="sous_q"><span class="material-icons arrow">arrow_right_alt</span> Choix</label>
                <input type="text" name="choix" id="area_choix" class="area_qz" placeholder="Entrez la réponse" onclick="colorizeNB5()" required/>
                <script src="<?php echo base_url(); ?>js/nb_colored.js"></script>
            </div>
            <div class="line">
                <label for="duree"><span id="nbStart"><i class="fas fa-stopwatch" id="nbStart2"></i></span> Chronomètre</label>
                <div class="time-select">
                    <select name="hrs" id="hrs" class="tps hrs"  onclick="colorizeChrono()">
                        <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                    </select>
                    <span class="separ_tps">:</span>
                    <select name="min" id="min" class="tps min"  onclick="colorizeChrono()">
                        <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                    </select>
                    <span class="separ_tps">:</span>
                    <select name="sec" id="sec" class="tps sec"  onclick="colorizeChrono()">
                        <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                        
                    </select>
                    <!--<input type="time" name="durée" id="durée" min="12:00:00" max="18:00:00" required class="area_qz" onclick="colorizeNBStart()" required/> -->
                    <script src="<?php echo base_url(); ?>js/nb_colored.js"></script>
                </div>
        </div>
        <button class="add">+<span>Ajouter une question</span></button>
        <div class="final_btn">
            <div class="container">
                <input type="submit" name="save" value="Enregistrer" class="save_btn">
                <input type="submit" name="reset" value="Abandonner" class="reset_btn">
            </div>
        </div>
    </form>
</body>