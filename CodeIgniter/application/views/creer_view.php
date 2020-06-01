
<h1 class="title">Créer le Quizz !</h1>
        
<form action="questions" method="post" class="quizz">
    <hr class="separate"/>
    <div class="line">
        <label for="nomqz"><span class="nb">1</span> Nom du Quizz</label>
        <input type="text" name="nomqz" id="nomqz" class="area_qz" placeholder="Nom"/>
    </div>
    <div class="line">
        <label for="nombre"><span class="nb">2</span> Nombre de questions</label>
        <div class="custom-select quizz-select">
            <select name="nbr" id="nbr">
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
    <div class="line">
        <label for="nomqz"><span class="nb">3</span> Enoncé de la Q1</label>
        <textarea rows="2" cols="22" name="nomqz" id="nomqz" maxlength="500" placeholder="(500 caractères max.)" class="area_qz"></textarea> </textarea>
    </div>
    
    <div class="line">
        <label for="reponse"><span class="nb">4</span> Réponse</label>
    </div>
    <div class="line reponse">
        <label for="nb_rep"><span class="material-icons arrow">arrow_right_alt</span> Type</label>
    </div>
    <div class="final_btn">
        <div class="container">
            <input type="submit" name="save" value="Enregistrer" class="save_btn">
            <input type="submit" name="reset" value="Reset" class="reset_btn">
        </div>
    </div>
</form>
