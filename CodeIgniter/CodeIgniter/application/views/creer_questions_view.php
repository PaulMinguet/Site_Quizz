<body onload="onStart();">

    <h1 class='title'>Créer les questions !</h1>

    <script src='../../js/choix.js'></script>
    <form method='post'>

<?php
$this->load->model('Auth');
$nbQ = $this->Auth->getNbQuestion();
//echo "nb Questions : ".$nbQ."<br>";

    for($i = 1; $i <= $nbQ; $i++){
    echo "
    
        <div class='quizz' style='height: 380px;'>
            <hr class='separate'/>
            <div class='each_quest'>
                <div class='line'>
                    <label for='enonce'><span class='nb' id='nb1'>1</span> Enoncé de la Q".$i."</label>
                    <textarea rows='2' cols='22' name='enonceQ".$i."' id='enonce' maxlength='500' placeholder='(500 caractères max.)' onclick='colorizeNB1()' style='left:55%;' required></textarea>
                </div>
                <div class='line'>
                    <label for='image'><span class='nb' id='nb2'>2</span> Ajouter une image</label>
                    <input type='text' name='img".$i."' id='area_img".$i."' class='area_qz lien_img' placeholder='Entrez un lien vers votre image' onclick='' style='position: relative; top: 2px; left: 72px;'/>
                    
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
    <div class='quizz' style='height: 90px; width: 500px;'>
        <hr class='separate' style='top: -6px;'/>
        <div class='final_btn'>
            <div class='container' style='top: 50px;'>
                <input type='submit' name='save' value='Enregistrer' class='save_btn' id='save_btn'>
                <input type='reset' name='reset' value='Abandonner' class='reset_btn' id='reset_btn'>
                <script src='../../js/reload.js'></script>
            </div>
        </div>
        </hr>
    </div>
</form>

</body>
