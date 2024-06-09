<?php 
$layer_url = get_field('layer')['url'];
$layer_height = get_field('layer')['height'] . 'px';
$header = get_field('header');
$buttonText = get_field('button_text');
?>

<div class="layer-background" style="background-image: url('<?php echo $layer_url; ?>'); height: <?= $layer_height ?>">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="text-header">
                <?= nl2br($header) ?>
            </div>
            <div class="button-container">
                <a href="#contact" type="button" class="button-scroll-to-contact">
                    <?= $buttonText ?>
                </a>
                <div class="triangle"></div>
            </div>
        </div>
    </div>
</div>