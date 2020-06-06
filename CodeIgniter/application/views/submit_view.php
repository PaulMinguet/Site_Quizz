<body onload=reload()>
    <script src='<?php echo base_url(); ?>js/reload.js'></script>
    
<div class='quizz' style='height: 150px; width: 500px'>
    <button class='add' style='top: 8px; z-index: 100'>+<span>Ajouter une question</span></button>
    <hr class='separate'/>
    <br><br><br>
    <div class='final_btn'>
        <div class='container' style='top: 50px;'>
            <input type='submit' name='save' value='Enregistrer' class='save_btn' id='save_btn'>
            <input type='submit' name='reset' value='Abandonner' class='reset_btn' id='reset_btn'>
        </div>
    </div>
    </hr>
</div>

</body>
