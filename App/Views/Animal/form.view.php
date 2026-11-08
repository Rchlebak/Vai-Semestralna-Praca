<?php

/** @var \App\Models\Animal $animal */
/** @var Framework\Support\LinkGenerator $link */
?>

<form method="post" action="<?= $link->url('animal.save') ?>" class="formular">
    <input type="hidden" name="id" value="<?= $animal->getId() ?>">

    <label for="name">Meno</label>
    <input type="text" name="name" id="name" value="<?= e($animal->getName()) ?>" required>

    <label for="species">Druh</label>
    <input type="text" name="species" id="species" value="<?= e($animal->getSpecies()) ?>" required>

    <label for="age">Vek (roky)</label>
    <input type="number" name="age" id="age" min="0" value="<?= $animal->getAge() ?>" required>

    <label for="location">Lokalita</label>
    <input type="text" name="location" id="location" value="<?= e($animal->getLocation()) ?>" required>

    <div class="formular-tlacidla">
        <button type="submit" class="tlacidlo">Uložiť</button>
        <a href="<?= $link->url('animal.index') ?>" class="tlacidlo tlacidlo-svetle">Späť</a>
    </div>
</form>
