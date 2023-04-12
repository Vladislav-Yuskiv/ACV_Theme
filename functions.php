<?php
add_action('wp_enqueue_scripts', function() {

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
    
    wp_enqueue_script('swipe', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');
    wp_enqueue_script('d3js', 'https://d3js.org/d3.v2.min.js', array('swipe'), 'null', true);
    wp_enqueue_script('fisheye', get_template_directory_uri() . '/assets/js/fisheye.js', array('d3js'), 'null', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/app.js', array('fisheye'), 'null', true);
});

add_action( 'after_setup_theme', 'my_theme_register_thumbnail_support' );
function my_theme_register_thumbnail_support() {
    add_theme_support( 'post-thumbnails' );
}


add_theme_support('post_thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
?>