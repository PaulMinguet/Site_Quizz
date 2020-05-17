<?php if ($error) : ?>
    <h3 class="title2 alert">Veuillez vous enregistrer</h3>
    <div class="title2 alert">
        <?= $error ?>
    </div>
<?php endif; ?>

<?php if ($succes) : ?>
    <div class="title2 success">
        <?= $succes ?>
    </div>
<?php endif; ?>
