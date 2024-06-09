<?php
$title = get_field('title');
$gallery = get_field('gallery');
?>

<div class="fotos-container">
    <div class="title-background">
        <div class="title">
            <h1><?= $title ?></h1>
        </div>
    </div>
    <div class="gallery">
        <div class="row row-cols-5">
            <?php for ($i = 0; $i < count($gallery); $i++): ?>
                <a href="<?= $gallery[$i] ?>" data-fancybox="gallery">
                    <img src="<?= $gallery[$i] ?>" />
                </a>
            <?php endfor; ?>
        </div>
    </div>
</div>