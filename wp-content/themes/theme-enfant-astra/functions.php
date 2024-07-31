<?php
// /
//  activation theme
// **/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    // lien pour appeller le css du theme parent
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
//  lien pour appeller le css du theme enfant
wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}