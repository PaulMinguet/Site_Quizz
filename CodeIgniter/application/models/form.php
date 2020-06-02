<?php

class Form {
    private $data;
    private $errors;

    public function __construct($data) {
        $this->data = $data;
        $this->errors = $errors;
    }

    public function input(string $name, string $label): string {
        return <<<HTML
            
        
        HTML;
    }
    public function text(string $name, string $label): string {
        
        return '';
    }
}

/**
 * <div class="line">
 *           <label for="enonce"><span class="nb" id="nb3">3</span> Enoncé de la Q1</label>
 *           <textarea rows="2" cols="22" name="enonce" id="enonce" maxlength="500" placeholder="(500 caractères max.)" class="area_qz" onclick="colorizeNB3()" required></textarea>
 *       </div>
 *       <div class="line">
 *           <label for="reponse"><span class="nb" id="nb4">4</span> Réponse</label>
 *       </div>
 *       <div class="line reponse">
 *           <label for="nb_rep" class="sous_q"><span class="material-icons arrow">arrow_right_alt</span> Type</label>
 *           <div class="right">
 *               <div class="radio_form">
 *                   <label for="unique">Bouton radio (réponse unique)</label>
 *                   <input id="unique" type="radio" name="statep" value="unique" onchange=""  onclick="colorizeNB4()" required/>
 *               </div>
 *               <div class="radio_form">
 *                   <label for="multi">Checkbox</label>
 *                   <input id="multi" type="radio" name="statep" value="multi" onchange=""  onclick="colorizeNB4()"/>
 *               </div>
 *               <div class="radio_form">
 *                   <label for="multi">Réponse texte</label>
 *                   <input id="multi" type="radio" name="statep" value="multi" onchange=""  onclick="colorizeNB4()"/>
 *               </div>
 *           </div>
 *           <script src="<?php echo base_url(); ?>js/nb_colored.js"></script>
 *           
 *           <label for="nb_rep" class="sous_q"><span class="material-icons arrow">arrow_right_alt</span> Choix</label>
 *       </div>
 */