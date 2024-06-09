<section class="contact">
    <div class="image-bg" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI ?>assets/build/images/news-bg.jpg);"></div>

    <div class="container">
        <h2>Contact</h2>
        <h3>Send us a message below</h3>
    </div>

    <div class="line"></div>

    <div class="container">
        <div class="contact-form">
            <?= do_shortcode('[contact-form-7 id="05ab54d" title="footer-contact"]'); ?>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row align-items-center">
            <div class="icon col-lg-1 col-md-2 col-sm-3 col-3">
                <img src="<?= TEMPLATE_DIRECTORY_URI ?>assets/build/images/glass-chears.png" alt="Glass Chears">
            </div>
            <div class="warning-holder col-lg-11 col-md-10 col-sm-9 col-12">
                <h3>WARNING, Under the Liquor Control Act 1998, it is an offence:</h3>
                <p>To sell or supply liquor to a person under the age of 18 years on a licenced or regulated premises; or for a person under the age of 18 years to purchase, liquor on a licenced or regulated premises.</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>