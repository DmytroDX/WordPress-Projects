<?php
    $title = get_field('title');
    $imageUrl = get_field('slide')['url'];
    $logo = get_theme_mod('custom_logo');
?>

<div class="slide-item">
    <img src="<?= $imageUrl ?>" alt="">
    <div class="container">
        <div class="d-flex justify-content-center">
            <img src="<?= wp_get_attachment_image_src($logo, 'full')[0]; ?>" alt="">
            <h2><?= nl2br($title) ?></h2>
        </div>
    </div>
</div>