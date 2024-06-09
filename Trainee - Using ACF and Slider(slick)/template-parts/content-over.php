<?php
    $title = get_field('title');
    $subtitle = get_field('subtitle');
    $photo_url = get_field('photo')['url'];
    $welcomeText = get_field('welcome_text');
    $bottomText = get_field('bottom_text');
    $signature = get_field('signature')['url'];
?>

<div class="container">
    <h1><?= strtoupper(nl2br($title)) ?></h1>
    <h5><?= nl2br($subtitle) ?></h5>
    <div class="welcome-text d-flex align-items-center gap-5">
        <img src="<?= $photo_url ?>" alt="">
        <div>
            <?= $welcomeText ?>
        </div>
    </div>
    <div class="bottom-text">
        <?= $bottomText ?>
    </div>
    <div class="signature d-flex justify-content-end">
        <img src="<?= $signature ?>" alt="">
    </div>
</div>