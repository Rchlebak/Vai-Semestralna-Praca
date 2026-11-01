<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= App\Configuration::APP_NAME ?></title>
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
</head>
<body>

<header class="hlavicka">
    <div class="kontajner">
        <a href="<?= $link->url('home.index') ?>" class="logo">
            <span class="logo-ikona">🐾</span>
            Útulok
        </a>
        <nav class="menu" aria-label="Hlavné menu">
            <a href="<?= $link->url('home.adopcie') ?>" class="tlacidlo">♡ Adoptuj</a>
            <a href="#" class="tlacidlo tlacidlo-svetle">✋ Dobrovoľník</a>
        </nav>
    </div>
</header>

<main class="kontajner">
    <?= $contentHTML ?>
</main>

<footer class="paticka">
    <div class="kontajner">
        <p>© 2026 Útulok – domov pre tých najmenších</p>
    </div>
</footer>

</body>
</html>
