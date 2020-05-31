
<h1 class="title">Créer le quizz</h1>
        
<form action="questions" method="post" class="quizz">
    <label for="nombre">Nombre de questions</label>    
    <div class="custom-select">
        <select name="nb" id="nb">
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
</form>
