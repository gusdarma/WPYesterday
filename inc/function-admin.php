<?php 

/*

@package yesterday wordpress theme free

=======================================
ADMIN PAGE
=======================================

*/

function yesterday_add_admin_page() {
    add_menu_page( 'Yesterday Theme Option', 'Yesterday', 'manage_options', 'yesterday-theme-option', 'yesterday_theme_create_page', 'dashicons-image-filter', 50 );
}
add_action('admin_menu', 'yesterday_add_admin_page');

function yesterday_theme_create_page() {
    echo '<h1>Yesterday Theme Option</h1>'; 
}