<body onload="onStart();">

    <h1 class='title'>Créer les questions !</h1>

    <script src='<?php echo base_url(); ?>js/dragDrop.js'></script>
    <script src='<?php echo base_url(); ?>js/nb_colored.js'></script>
    <script src='<?php echo base_url(); ?>js/choix.js'></script>
    <form method='post'>

<?php
$last_id = null;
$last_id = $this->auth->get_last_id();

    for($i = 1; $i <= 10; $i++){
    echo "
    
        <div class='quizz' style='height: 575px;'>
            <hr class='separate'/>
            <div class='each_quest'>
                <div class='line'>
                    <label for='enonce'><span class='nb' id='nb1'>1</span> Enoncé de la Q".$i."</label>
                    <textarea rows='2' cols='22' name='enonce' id='enonce' maxlength='500' placeholder='(500 caractères max.)' onclick='colorizeNB1()' style='left:55%;' required></textarea>
                </div>
                <div class='line'>
                    <label for='image'><span class='nb' id='nb2'>2</span> Ajouter une image</label>
                    <div class='right add_img'>
                        <div class='radio_form'>
                            <label for='oui'>Oui</label>
                            <input id='oui' type='radio' name='image' value='oui' onchange=''  onclick='colorizeNB2(); dragDrop();' />
                        </div>
                        <div class='radio_form'>
                            <label for='non'>Non</label>
                            <input id='non' type='radio' name='image' value='non' onchange=''  onclick='colorizeNB2(); dragDrop();' />
                        </div>
                        <div class='dropper' id='dropper'>
                            <span id='btn_quit' onclick='btnQuit();'>×</span>
                            <h2>Drag & Drop</h2>
                            </div>
                        
                    </div>
                </div>
                <div class='line line5'>
                    <label for='reponse'><span class='nb' id='nb3'>3</span> Réponse</label>
                </div>
                <div class='line reponse'>
                    <label for='nb_rep' class='sous_q'><span class='material-icons arrow'>arrow_right_alt</span> Type</label>
                    <div class='right'>
                        <div class='radio_form'>
                            <label for='unique'>Bouton radio (réponse unique)</label>
                            <input id='unique' type='radio' name='statep' value='unique' onchange='choixUnique()'  onclick=''/>
                        </div>
                        <div class='radio_form'>
                            <label for='multi'>Checkbox</label>
                            <input id='multi' type='radio' name='statep' value='multi' onchange='choixMultiple()'  onclick=''/>
                        </div>
                    </div>
                    
                    <label for='nb_rep' class='sous_q'><span class='material-icons arrow'>arrow_right_alt</span> Choix</label>
                    <input type='text' name='choix1' id='area_choix1' class='area_qz' placeholder='Entrez la possibilité 1' onclick='' required/>
                    <input type='text' name='choix2' id='area_choix2' class='area_qz' style='margin-top:8%;' placeholder='Entrez la possibilité 2' onclick='' required/>
                    <input type='text' name='choix3' id='area_choix3' class='area_qz' style='margin-top:16%;' placeholder='Entrez la possibilité 3' onclick='' required/>
                    <input type='text' name='choix4' id='area_choix4' class='area_qz' style='margin-top:24%;' placeholder='Entrez la possibilité 4' onclick='' required/>
                </div>
            </div>
            </hr>
        </div>
        <br><br>
    ";
    }
    ?>
    </form>
    <br><br><br>
    <div class='quizz' style='height: 150px; width: 500px'>
        <button class='add' style='top: 8px; z-index: 100;'>+</button>
        <span class='add-span' style=" z-index: 200;">Ajouter une question</span>
        <hr class='separate'/>
        <br><br><br>
        <div class='final_btn'>
            <div class='container' style='top: 50px;'>
                <input type='submit' name='save' value='Enregistrer' class='save_btn' id='save_btn'>
                <input type='submit' name='reset' value='Abandonner' class='reset_btn' id='reset_btn' onclick="reset();">
                <script src='<?php echo base_url(); ?>js/reload.js'></script>
            </div>
        </div>
        </hr>
    </div>

</body>