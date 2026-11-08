<?php

/** @var \App\Models\Animal[] $animals */
/** @var Framework\Support\LinkGenerator $link */
?>

<div class="nadpis-stranky">
    <p>Správa zvierat</p>
    <h1>Zvieratá v útulku</h1>
    <p class="popis">Zoznam zvierat uložených v databáze.</p>
</div>

<p>
    <a href="<?= $link->url('animal.add') ?>" class="tlacidlo">+ Pridať zviera</a>
</p>

<div class="zoznam">
    <?php foreach ($animals as $animal) { ?>
        <article class="karta">
            <div class="karta-vrch"><span class="odznak"><?= e($animal->getSpecies()) ?></span></div>
            <h3><?= e($animal->getName()) ?></h3>
            <p class="info">Vek: <?= $animal->getAge() ?> · <?= e($animal->getLocation()) ?></p>
            <div class="karta-akcie">
                <a href="<?= $link->url('animal.edit', ['id' => $animal->getId()]) ?>"
                   class="tlacidlo tlacidlo-male tlacidlo-svetle">Upraviť</a>
                <form method="post" action="<?= $link->url('animal.delete') ?>">
                    <input type="hidden" name="id" value="<?= $animal->getId() ?>">
                    <button type="submit" class="tlacidlo tlacidlo-male tlacidlo-cervene">Zmazať</button>
                </form>
            </div>
        </article>
    <?php } ?>
</div>
