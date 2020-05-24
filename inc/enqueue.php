<?php
/*

@package yesterday wordpress theme free

=======================================
ADMIN ENQUEUE FUNCTIONS
=======================================

*/

function yesterday_load_admin_scripts( $hook ) {
    echo $hook;
    wp_register_style( 'yesterday-admin', get_template_directory_uri() . '/inc/css/admin.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'yesterday-admin' );
}

add_action( 'admin_enqueue_scripts', 'yesterday_load_admin_scripts' );