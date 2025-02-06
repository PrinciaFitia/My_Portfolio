<?php
function fitia_portfolio_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'fitia-portfolio'),
    ));
}
add_action('after_setup_theme', 'fitia_portfolio_setup');

function fitia_portfolio_scripts() {
    $version = filemtime(get_template_directory() . '/style.css'); // Récupère la dernière modification du fichier CSS
    wp_enqueue_style('fitia-style', get_stylesheet_uri(), array(), $version);
}
add_action('wp_enqueue_scripts', 'fitia_portfolio_scripts');

function fitia_enqueue_scripts() {
    wp_enqueue_script('resume-tabs', get_template_directory_uri() . '/js/resume-tabs.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'fitia_enqueue_scripts');

?>
