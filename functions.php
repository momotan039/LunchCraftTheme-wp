<?php
//setup theme
function theme_setup() {
    add_theme_support('post-thumbnails'); // Enable featured images
}
add_action('after_setup_theme', 'theme_setup');

//add css files
function css_enqueue_styles() {
    // Get the theme directory URL
    $theme_uri = get_template_directory_uri();

    // Enqueue Styles
    wp_enqueue_style('bootstrap', $theme_uri . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('animate', $theme_uri . '/assets/css/animate.css');
    wp_enqueue_style('lineicons', $theme_uri . '/assets/css/LineIcons.css');
    wp_enqueue_style('owl-carousel', $theme_uri . '/assets/css/owl.carousel.css');
    wp_enqueue_style('owl-theme', $theme_uri . '/assets/css/owl.theme.css');
    wp_enqueue_style('magnific-popup', $theme_uri . '/assets/css/magnific-popup.css');
    wp_enqueue_style('nivo-lightbox', $theme_uri . '/assets/css/nivo-lightbox.css');
    wp_enqueue_style('main-style', $theme_uri . '/assets/css/main.css');
    wp_enqueue_style('responsive', $theme_uri . '/assets/css/responsive.css');

    // Enqueue WordPress default stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'css_enqueue_styles');

//add js files
function js_enqueue_scripts() {
    $theme_uri = get_template_directory_uri();
    // Enqueue Scripts
    wp_enqueue_script('jquery-min', $theme_uri . '/assets/js/jquery-min.js', array('jquery'), null, true);
    wp_enqueue_script('popper', $theme_uri . '/assets/js/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', $theme_uri . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', $theme_uri . '/assets/js/owl.carousel.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-nav', $theme_uri . '/assets/js/jquery.nav.js', array('jquery'), null, true);
    wp_enqueue_script('scrolling-nav', $theme_uri . '/assets/js/scrolling-nav.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-easing', $theme_uri . '/assets/js/jquery.easing.min.js', array('jquery'), null, true);
    wp_enqueue_script('nivo-lightbox', $theme_uri . '/assets/js/nivo-lightbox.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', $theme_uri . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('form-validator', $theme_uri . '/assets/js/form-validator.min.js', array('jquery'), null, true);
    wp_enqueue_script('contact-form', $theme_uri . '/assets/js/contact-form-script.js', array('jquery'), null, true);
    wp_enqueue_script('main-script', $theme_uri . '/assets/js/main.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'js_enqueue_scripts');