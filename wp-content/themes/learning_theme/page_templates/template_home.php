<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<section class="banner">
    <div class="container">
        <div class="row">
            <?php
            if(is_user_logged_in()){
                echo '<h1>Welcome to the site</h1>';
            } else {
                echo '<h1>Welcome Guest, Please Register</h1>';
            }
            ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>