<?php
// ce fichier est inclu automatiquement dans les themes wordpress
// il permet entre autres de créer des fonctions réutilisables

// création d'une constante en php
define('THEME_URI', get_stylesheet_directory_uri());

// add_action permet d'exécuter une fonction à un moment donné (du cycle de vie du theme) 
add_action('init', function(){

    load_theme_textdomain('khun', get_template_directory() . '/languages' );

    // permet d'ajouter une fonctionalité wordpress 
    // ex logo, image des articles, ...
    add_theme_support('custom-logo',/* [
        'height' => '50px',
        'width' => '100px'
    ]*/);
    add_theme_support('post-thumbnails', ['post']);

    //ajouter un emplacement de menu
    register_nav_menu('primary-menu', 'Menu en haut');
    register_nav_menu('footer-menu', 'Menu en bas');
    register_nav_menu('faq-menu', 'Menu à droite');
});

add_action('wp_enqueue_scripts', function() {
    // c'est ici que l'on va ajouter nos feuilles de style et nos scripts javascript
    wp_enqueue_style(
        /*identifiant de la feuille de style */
        'main_css',
        /* source le la fueille de style */
        THEME_URI . '/assets/css/main.css',
        /* dépendences de la feuille de style */ 
        []
    );

    // ajouter un script js
    // wp_enqueue_script()

    // si je suis sur la page d'accueil
    if(is_front_page()) {
        // ajouter une feuille de style
        wp_enqueue_style('home_css', THEME_URI . '/assets/css/home.css', ['main_css']);
    }

    // si c'est la page de contact
    if(is_page('contact')) {
        /*... */
    }

    // si je suis sur la page d'un article
    if(is_single()) {

    }

    // si je suis sur la page des articles
    if(is_home()) {
        wp_enqueue_style('news_css', THEME_URI . '/assets/css/news.css', ['main_css']);
    }
});

// permet de modifier le comportement d'une fonction wordpress 
// pour faire autre chose
// add_filter('the_title', function($previous) {
//     return '♣' . $previous . '♥';
// });

// si php 8.2
// mofifier la fonction excerpt_length
// pour changer le nombre de mots des resumées
add_filter('excerpt_length', fn () => 25);

// add_filter('excerpt_length', function () { return 25; });


function getLastNews() {
    // SELECT * FROM Content 
    // WHERE post_type = 'post' 
    // ORDER BY date DESC 
    // LIMIT 3
    return new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'DESC',
        'order_by' => 'date'
    ]);
}