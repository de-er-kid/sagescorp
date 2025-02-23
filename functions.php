<?php
function sagescorp_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'sagescorp_theme_setup');

function sagescorp_enqueue_scripts() {
    // Enqueue styles
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('animated-text', get_template_directory_uri() . '/assets/css/animated-text.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/all.min.css');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style('theme-default', get_template_directory_uri() . '/assets/css/theme-default.css');
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css');
    wp_enqueue_style('owl-transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css');
    wp_enqueue_style('venobox', get_template_directory_uri() . '/venobox/venobox.css');
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/css/bootstrap-icons.css');
    wp_enqueue_style('dropdown', get_template_directory_uri() . '/assets/css/dropdown.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');

    // Enqueue scripts
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), null, false);
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('venobox', get_template_directory_uri() . '/venobox/venobox.js', array('jquery'), null, true);
    wp_enqueue_script('animated-text', get_template_directory_uri() . '/assets/js/animated-text.js', array('jquery'), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array('jquery'), null, true);
    wp_enqueue_script('scrollup', get_template_directory_uri() . '/assets/js/jquery.scrollUp.js', array('jquery'), null, true);
    wp_enqueue_script('barfiller', get_template_directory_uri() . '/assets/js/jquery.barfiller.js', array('jquery'), null, true);
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'sagescorp_enqueue_scripts');
?>