<?php

function charger_styles() {
    wp_enqueue_style('accueil', get_stylesheet_directory_uri() . '/css/accueil.css');
    wp_enqueue_style('tout', get_stylesheet_directory_uri() . '/css/all.css');
    wp_enqueue_style('header', get_stylesheet_directory_uri() . '/css/header.css');
}
add_action('wp_enqueue_scripts', 'charger_styles');

?>