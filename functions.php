<?php

function charger_styles() {
    wp_enqueue_style('accueil', get_stylesheet_directory_uri() . '/css/accueil.css');
    wp_enqueue_style('tout', get_stylesheet_directory_uri() . '/css/all.css');
    wp_enqueue_style('header', get_stylesheet_directory_uri() . '/css/header.css');
}
add_action('wp_enqueue_scripts', 'charger_styles');


function mytheme_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mytheme_custom_logo_setup');

function disable_wp_block_library_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'disable_wp_block_library_css', 100);

function ajouter_scripts_personnalises() {
    // Enregistre et inclut votre fichier JS
    wp_enqueue_script(
        'slider-script', // Identifiant unique pour le script
        get_template_directory_uri() . '/js/slider.js', // Chemin vers le fichier JS
        array('jquery'), // Dépendances (optionnel, ici jQuery)
        null, // Version (optionnel)
        true // Charger le script dans le footer
    );
}
add_action('wp_enqueue_scripts', 'ajouter_scripts_personnalises');
?>

