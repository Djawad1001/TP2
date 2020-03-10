<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}
add_action( 'pre_get_posts', 'extraire_cours' );
function extraire_cours( $query ) {
    if ($query->is_category('evenement'))
    {
       $query->set( 'posts_per_page', 3 );
       $query->set( 'orderby', 'date' );
       $query->set( 'order', 'ASC' );
    }
 }

add_action( 'pre_get_posts', 'extraire_coursNom' );
function extraire_coursNom( $query2 ) {
    if ($query2->is_category('cours'))
    {
       $query2->set( 'posts_per_page', 10);
       $query2->set( 'orderby', 'date' );
       $query2->set( 'order', 'ASC' );
    }
 }

// show_admin_bar( true );