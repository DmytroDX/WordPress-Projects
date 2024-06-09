<?php

/**
 * Template Name: Template: Home
 * 
 * @package trainee-one
 */
?>

<?php get_header(); ?>

<div class="home-banner" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI 
?>assets/build/images/home-banner.jpg);">
    <div class="container">
        <h1>A Dining Experience</h1>
    </div>
</div>

<section class="home-call-to-active">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="#" class="rounded-bg call-to-active-1">
                    <div class="image" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI . 'assets/build/images/call-to-active-1.jpg' ?>)"></div>
                    <div class="title">Dining Menu</div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" class="rounded-bg call-to-active-2">
                    <div class="image" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI . 'assets/build/images/call-to-active-2.jpg' ?>)"></div>
                    <div class="title">Lunch Menu</div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" class="rounded-bg call-to-active-3">
                    <div class="image" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI . 'assets/build/images/call-to-active-3.jpg' ?>)"></div>
                    <div class="title">Functions</div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="home-welcome">
    <div class="container">
        <h2>Welcome to</h2>
        <h3>The Backbeach Eating House</h3>
    </div>

    <div class="line"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-1">
            </div>
            <div class="col-lg-8">
                <p class="tagline">There's only one place like the Backbeach Cafe & Restaurant, located on Bunbury's Backbeach with uninterrupted views of crisp white sand and the India Ocean. The perfect place to eat, relax and enjoy.</p>
                <p class="textline">We are proud to support local business and local producers by sourcing as much as possible locally, including from August, beef and chicken from Western Austrial (DBC), coffee from Yallingup and wines from Ferguson Valley, Margaret River and throughout the South West.</p>
            </div>
            <div class="col-lg-2">
                <a href="#" class="button d-flex justify-content-between align-items-center">
                    About Us
                    <i class="fa-solid fa-caret-right"></i>
                </a>
            </div>
            <div class="col-lg-1">
            </div>
        </div>
    </div>
</section>

<section class="home-news">
    <div class="image-bg" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI 
    ?>assets/build/images/news-bg.jpg);"></div>
    <div class="container">
        <div class="row flex-lg-row flex-column">
            <div class="col-lg-6 col-10">
                <a href="#" class="news-img">
                    <div class="img" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI ?>assets/build/images/news-placeholder.jpg)"></div>
                    <div class="title">What's On</div>
                    <div class="date"><?= (new DateTime())->format('d.m.Y'); ?></div>
                </a>
            </div>
            <div class="col-lg-6 col-12">
                <h2>Mother's Day</h2>
                <p>
                    Join us to celebrate your mum this Mother's Day. Breakfast and lunck are pretty full but we're taking dinner bookings so yo...
                </p>
                <a href="#" class="button">
                    Read More
                    <i class="fa-solid fa-caret-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="home-about">
    <div class="image-bg" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI 
    ?>assets/build/images/about-bg.jpg);">
        <div class="top-clip">
            <img src="<?= TEMPLATE_DIRECTORY_URI ?>assets/build/images/Group-1.png" alt="Top Clip"
            width="100%">
        </div>
        <div class="bottom-clip">
            <img src="<?= TEMPLATE_DIRECTORY_URI ?>assets/build/images/Group-2.png" alt="Top Clip"
            width="100%">
        </div>
    </div>

    <div class="container">
        <h2>Served fresh</h2>
        <h3>from the paddock to the plate</h3>
    </div>

    <div class="line"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-1">
            </div>
            <div class="col-lg-8">
                <p class="tagline">Nulla hendrerit malesuada accumsan. Cras hendrerit nisl in lectus commodo, a molestie ante feugiat. Suspendisse nec convallis mauris.</p>
                <p class="textline">Donec elil lorlor, lobortis sil amel lobortisel, feugial sed quam. Aenean efficilur risus nec magna finibus, vitae sodales ex aliquam. Pellentesque habitant marbi tristique marbi tristique senectus et netus malesuada fames ac turpis egestas.</p>
            </div>
            <div class="col-lg-2">
                <a href="#" class="button d-flex justify-content-between align-items-center">
                    Read More
                    <i class="fa-solid fa-caret-right"></i>
                </a>
            </div>
            <div class="col-lg-1">
            </div>
        </div>
    </div>
</section>

<section class="home-about-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="#" class="rounded-bg call-to-active-1">
                    <div class="image" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI . 'assets/build/images/call-to-active-1.jpg' ?>)"></div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" class="rounded-bg call-to-active-2">
                    <div class="image" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI . 'assets/build/images/call-to-active-2.jpg' ?>)"></div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="#" class="rounded-bg call-to-active-3">
                    <div class="image" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI . 'assets/build/images/call-to-active-3.jpg' ?>)"></div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="home-testimonials">
    <div class="image-bg" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI ?>assets/build/images/testimonials-bg.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-3 col"></div>
            <div class="col-lg-7 col-md-9 col-12">
                <h2>Happy Customers</h2>
                <div class="feedback-holder">
                    <p>Ah! What a place. I could go have breakfast every single day and not get tired by the views. The staff are very kind and helpful, and the food is AMAZING! A MUST visit place if you're visiting Bunbury!</p>
                    <div class="separator"></div>
                    <div class="author">Saad Ulde</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-subscribe">
    <div class="darken-bg"></div>
    <div class="image-bg" style="background-image: url(<?= TEMPLATE_DIRECTORY_URI ?>assets/build/images/subscribe-bg.jpg);"></div>

    <div class="container">
        <h2>Sign Up</h2>
        <h3>Subscribe to our email newsletter</h3>
    </div>

    <div class="line"></div>

    <div class="container">
        <div class="contact-form">
            <?= do_shortcode('[contact-form-7 id="6311bd6" title="home-subscribe"]'); ?>
        </div>
    </div>
</section>

<section class="home-socials">
    <div class="container">
        <h2>Socials</h2>
        <h3>Follow us on facebook & instagram</h3>
    </div>

    <div class="line"></div>

    <div class="container">
        <div class="facebook-holder">
            <div class="title">
                <i class="fa-brands fa-square-facebook"></i>
                What's new on facebook</div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= TEMPLATE_DIRECTORY_URI ?>assets/build/images/call-to-active-1.jpg" alt="Facebook post image" width="100%">
                </div>
                <div class="col-lg-6">
                    <div class="meta-data gap-5">
                        <div class="date">
                            <i class="fa-regular fa-calendar-days"></i>
                            Posted 31 Jan 2020
                        </div>
                        <div class="like">
                            <i class="fa-solid fa-thumbs-up"></i>
                            24 Likes
                        </div>
                    </div>
                    <p>Check out the view (and the dolphins, they're out there today!) Duis posuere justo sed tellus congue, a convallis metus molestie. Quisque pellen tesque ante feugiat velit ullam corper venenatis congue.</p>
                    <div class="button">Read on facebook</div>
                </div>
            </div>
        </div>
        <div class="instagram-holder">
            <i class="fa-brands fa-square-instagram"></i>
            @backbeachcafe
        </div>
    </div>
</section>

<?php get_footer(); ?>