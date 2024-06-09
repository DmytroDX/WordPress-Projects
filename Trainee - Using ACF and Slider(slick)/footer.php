    <?php wp_footer(); ?>
    <footer class="foot">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <?php $logo = get_theme_mod('custom_logo'); ?>
            <a class="navbar-brand" href="#">
                <img src="<?= wp_get_attachment_image_src($logo, 'full')[0]; ?>" alt="">
            </a>
            <p>Copyright&copy; 2018 Inspiratie by <mark>Stephanie</mark></p>
        </div>
    </footer>
</body>
</html>