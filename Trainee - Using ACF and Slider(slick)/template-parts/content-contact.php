<?php 
$title = get_field('title');
$subTitle = get_field('subtitle');
$contactForm = get_field('contact_form');
$map = get_field('map');

$telNumberAndEmail = get_field('telephone_and_email');
$telNumber = $telNumberAndEmail['phone_number'];
$email = $telNumberAndEmail['email'];

$fullAddress = get_field('full-address');
?>

<div class="container">
    <div class="d-flex flex-column justify-content-center gap-3">
        <div class="title">
            <h1><?= $title; ?></h1>
        </div>
        <div class="subtitle">
            <h6><?= nl2br($subTitle); ?></h6>
        </div>
    </div>
    <div class="form-container d-flex flex-column gap-2">
        <div class="form-map d-flex justify-content-between">
            <div class="form-cf7">
                <?= $contactForm; ?>
            </div>
            <div class="map">
                <img src="<?= $map; ?>" alt="">
            </div>
        </div>
        <div class="additional-info d-flex">
            <div class="tel-email d-flex flex-column">
                <p><i class="fa-solid fa-phone"></i><?= $telNumber; ?></p>
                <p><i class="fa-solid fa-at"></i><?= $email; ?></p>
            </div>
            <div class="full-address">
                <?= $fullAddress; ?>
            </div>
        </div>
    </div>
</div>