<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php (function_exists('wp_body_open')) ? wp_body_open() : null; ?>

<?php
    use TRAINEE_ONE\Dynamic_Navigation_Menu;

    $primary_menu_id = (Dynamic_Navigation_Menu::get_instance())
        ->get_nav_menu_id('header-menu');

    $nav_items = wp_get_nav_menu_items($primary_menu_id);
?>

<div id="wrapper-navbar">
    <div class="top-helder-holder">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-4">
                    <a href="/" class="logo-holder">
                        <div class="logo">
                            <img src="<?= TEMPLATE_DIRECTORY_URI ?>assets/build/images/wine-cups.png" alt="The Logo">
                        </div>
                    </a>
                </div>

                <div class="col-6">
                    <div class="reservation-holder">
                        <div class="contact-holder">
                            <a href="#" class="phone">
                                <i class="fa-solid fa-phone"></i>
                                08 9791 6575
                            </a>
                            <a href="#" class="address">
                                <i class="fa-solid fa-map"></i>
                                Lot 757, Ocean Drive, Bunbury
                            </a>
                            <div class="social-media-holder-tablet">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                        <a href="#" class="reservation-btn">Make a Reservation</a>
                    </div>
                </div>
                
                <div class="col">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="bar">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="menu-title">
                            <?= esc_html__('Menu', 'trainee-one') ?>
                        </div>
                    </button>

                    <div class="social-media-holder">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php foreach ($nav_items as $nav_item): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $nav_item->url; ?>">
                                <?= $nav_item->title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bottom-helder-holder">
        <div class="container">
            <div class="row flex-column">
                <div class="col">
                    <a href="/" class="logo-holder text-center">
                        <div class="logo">
                            <img src="<?= TEMPLATE_DIRECTORY_URI ?>assets/build/images/wine-cups.png" alt="The Logo">
                        </div>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="#" class="reservation-btn">Make a Reservation</a>
                </div>
            </div>
        </div>
    </div>
</div>