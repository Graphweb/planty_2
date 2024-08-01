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
// code pour ciblé avec un hook//
function ajouter_lien_admin($items, $args) {
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin', 10, 2);