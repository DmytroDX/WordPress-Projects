<?php get_header(); ?>

<main>
    <?php
        $query = new WP_Query([
            'post_type' => 'content',
            'posts_per_page' => -1,
            'title' => 'Over'
        ]);
    ?>
    <?php if ($query->have_posts()): ?>
        <section id="over">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php if($post->post_title == 'Over'): ?>
                    <?php get_template_part('/template-parts/content', 'over'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </section>
    <?php endif; ?>

    <?php
        $query = new WP_Query([
            'post_type' => 'content',
            'posts_per_page' => -1,
            'title' => 'Slogan'
        ]);
    ?>
    <?php if ($query->have_posts()): ?>
        <section id="slogan">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php if($post->post_title == 'Slogan'): ?>
                    <?php get_template_part('/template-parts/content', 'slogan'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </section>
    <?php endif; ?>

    <?php
        $query = new WP_Query([
            'post_type' => 'content',
            'posts_per_page' => -1,
            'title' => 'Prijzen'
        ]);
    ?>
    <?php if ($query->have_posts()): ?>
        <section id="prijzen">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php if($post->post_title == 'Prijzen'): ?>
                    <?php get_template_part('/template-parts/content', 'prijzen'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </section>
    <?php endif; ?>

    <?php
        $query = new WP_Query([
            'post_type' => 'content',
            'posts_per_page' => -1,
            'title' => 'Fotos'
        ]);
    ?>
    <?php if ($query->have_posts()): ?>
        <section id="fotos">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php if($post->post_title == 'Fotos'): ?>
                    <?php get_template_part('/template-parts/content', 'fotos'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </section>
    <?php endif; ?>

    <?php
        $query = new WP_Query([
            'post_type' => 'content',
            'posts_per_page' => -1,
            'title' => 'Contact'
        ]);
    ?>
    <?php if ($query->have_posts()): ?>
        <section id="contact">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <?php if($post->post_title == 'Contact'): ?>
                    <?php get_template_part('/template-parts/content', 'contact'); ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>