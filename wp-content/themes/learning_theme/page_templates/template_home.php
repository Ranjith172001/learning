<?php
/*
Template Name: Home Page
*/
get_header(); ?>
<?php get_template_part('template_parts/header'); ?>
<section class="banner position-relative">
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-text text-center">
                    <h1 class="text-white">F <span class="text-name d-inline-block"> B </span> S <span class="text-name d-inline-block"> M </span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute banner-video">
        <video autoplay muted loop playsinline>
            <source src="https://fbsm.slmworld.in/wp-content/themes/fbsm/assets/videos/Logo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="overlay"></div>
</section>


<?php get_template_part('template_parts/footer'); ?>
<?php get_footer(); ?>