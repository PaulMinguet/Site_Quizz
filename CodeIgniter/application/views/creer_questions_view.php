<body onload="onStart();">

    <h1 class='title'>Créer les questions !</h1>

    <script src='<?php echo base_url(); ?>js/dragDrop.js'></script>
    <script src='<?php echo base_url(); ?>js/nb_colored.js'></script>
    <script src='<?php echo base_url(); ?>js/choix.js'></script>
    <form method='post'>

<?php
$last_id = null;
$last_id = $this->auth->get_last_id();
//echo "ID = ".$last_id."<br>";  

    for($i = 1; $i <= 2; $i++){
    echo "
    
        <div class='quizz' style='height: 500px;'>
            <hr class='separate'/>
            <div class='each_quest'>
                <div class='line'>
                    <label for='enonce'><span class='nb' id='nb1'>1</span> Enoncé de la Q".$i."</label>
                    <textarea rows='2' cols='22' name='enonceQ".$i."' id='enonce' maxlength='500' placeholder='(500 caractères max.)' onclick='colorizeNB1()' style='left:55%;' required></textarea>
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
                <div class='line line3'>
                    <label for='reponse'><span class='nb' id='nb3'>3</span> Réponse(s)<br><br><span class='coche'>Cochez les bonnes réponses</span></label>
                </div>
                <div class='line reponse'>
                    <input type='checkbox' name='bonneRep".(($i-1)*4+1)."' value='1' style='right: 32%; margin-top: 2%'>
                    <input type='text' name='choix".(($i-1)*4+1)."' id='area_choix".(($i-1)*4+1)."' class='area_qz' placeholder='Entrez la possibilité 1' onclick=''/>
                    <input type='checkbox' name='bonneRep".(($i-1)*4+2)."'' value='1' style='right: 32%; margin-top: 10%'>
                    <input type='text' name='choix".(($i-1)*4+2)."' id='area_choix".(($i-1)*4+2)."' class='area_qz' style='margin-top:8%;' placeholder='Entrez la possibilité 2' onclick=''/>
                    <input type='checkbox' name='bonneRep".(($i-1)*4+3)."' value='1' style='right: 32%; margin-top: 18%'>
                    <input type='text' name='choix".(($i-1)*4+3)."' id='area_choix".(($i-1)*4+3)."' class='area_qz' style='margin-top:16%;' placeholder='Entrez la possibilité 3' onclick=''/>
                    <input type='checkbox' name='bonneRep".(($i-1)*4+4)."' value='1' style='right: 32%; margin-top: 26%'>
                    <input type='text' name='choix".(($i-1)*4+4)."' id='area_choix".(($i-1)*4+4)."' class='area_qz' style='margin-top:24%;' placeholder='Entrez la possibilité 4' onclick=''/>
                </div>
            </div>
            </hr>
        </div>
        <br><br>
    ";
    }
    ?>
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
</form>

</body>