<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="home">
        <?php $query = new WP_Query([
            'post_type' => 'slides',
            'posts_per_page' => -1
        ]); ?>

        <?php if ($query->have_posts()) : ?>
            <div class="slider">
                <?php while ($query->have_posts()) : ?>
                    <?php $query->the_post(); ?>
                    <?php get_template_part('/template-parts/content', 'header'); ?>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        <?php endif; ?>
    </header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <?php $logo = get_theme_mod('custom_logo'); ?>
            <a class="navbar-brand" href="#home">
                <img src="<?= wp_get_attachment_image_src($logo, 'full')[0]; ?>" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <?php
                wp_nav_menu([
                    'menu' => 'primary',
                    'theme_location' => 'primary',
                    'container' => 'div',
                    'container_id' => 'navbarNav',
                    'container_class' => 'navbar-collapse',
                    'menu_class' => 'navbar-nav',
                    'walker' => new CustomNavWalker()
                ]);
            ?>
        </div>
    </nav>