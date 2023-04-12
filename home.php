<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
    
    <main class="main">
        <section class="section hero">
            <div class="container">
                <div class="inner">
                    <h1><?php the_field('main_title'); ?></h1>
                    <a class="btn-large" href="<?php the_field('schedule_call_link'); ?>"><?php the_field('schedule_call_button'); ?></a>
                    
                    <div class="grid" id="grid-fisheye">
                        <img src="<?php the_field('main_image_grid') ?>" alt="">
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('success_section'); ?>

        <?php get_template_part('services'); ?>

        <?php get_template_part('testimonials'); ?>

        <?php get_template_part('projects'); ?>

    </main>

<?php get_footer(); ?>