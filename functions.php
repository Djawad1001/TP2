<?php
/*
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}*/
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
     $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version'));
    wp_enqueue_script( 'main_js',get_stylesheet_directory_uri() . '/js/main.js', NULL, 1.0,true);
}

/**
 * Le code en commentaire a été réalisé directement dans front-page.php sinon il y avait un 
 * probleme etre front-page.php et category-evenement.php
 */
/*add_action( 'pre_get_posts', 'extraire_cours' );
function extraire_cours( $query ) {
    if ($query->is_category('evenement'))
    {
       $query->set( 'posts_per_page', 60);
       $query->set( 'orderby', 'date' );
       $query->set( 'order', 'ASC' );
    }
 }*/

add_action( 'pre_get_posts', 'extraire_coursNom' );
function extraire_coursNom( $query2 ) {
    if ($query2->is_category('cours'))
    {
       $query2->set( 'posts_per_page', 3);
       $query2->set( 'orderby', 'title' );
       $query2->set( 'order', 'ASC' );
    }
 }

// show_admin_bar( true );