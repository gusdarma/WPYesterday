<?php 

/*

@package yesterday wordpress theme free

=======================================
ADMIN PAGE
=======================================

*/

function yesterday_add_admin_page() {
    //Generate Admin Page
    add_menu_page( 'Yesterday Theme Option', 'Yesterday', 'manage_options', 'yesterday', 'yesterday_theme_create_page', 'dashicons-image-filter', 50 );

    //Generate Admin Sub Pages - General
    add_submenu_page( 'yesterday', 'Yesterday Theme Option', 'General', 'manage_options', 'yesterday', 'yesterday_theme_create_page' );

    //Generate Admin Sub Pages - Custom CSS
    add_submenu_page( 'yesterday', 'Yesterday Custom CSS', 'Custom CSS', 'manage_options', 'yesterday_custom_css', 'yesterday_theme_custom_css' );

    //Activate Custom Settings
    add_action( 'admin_init' , 'yesterday_custom_settings');
    
}
add_action('admin_menu', 'yesterday_add_admin_page');

//Custom Settings for General
function yesterday_custom_settings() {
    // register_setting( 'yesterday-setting-group', 'first_name' );
    // register_setting( 'yesterday-setting-group', 'last_name' );
    register_setting( 'yesterday-setting-group', 'handler_twitter', 'yesterday_sanitize_twitter');
    register_setting( 'yesterday-setting-group', 'handler_facebook' );
    register_setting( 'yesterday-setting-group', 'handler_instagram' );
    register_setting( 'yesterday-setting-group', 'handler_medium' );
    register_setting( 'yesterday-setting-group', 'handler_youtube' );

    add_settings_section( 'yesterday-sidebar-options', 'Social Media', 'yesterday_sidebar_options', 'yesterday' );
    // add_settings_field( 'sidebar-name', 'Full Name', 'yesterday_sidebar_name', 'yesterday', 'yesterday-sidebar-options' );
    // add_settings_field( 'sidebar-name', 'Last Name', 'yesterday_sidebar_name', 'yesterday', 'yesterday-sidebar-options' );
    add_settings_field( 'sidebar-twitter', 'Twitter', 'yesterday_sidebar_twitter', 'yesterday', 'yesterday-sidebar-options' );
    add_settings_field( 'sidebar-facebook', 'Facebook', 'yesterday_sidebar_facebook', 'yesterday', 'yesterday-sidebar-options' );
    add_settings_field( 'sidebar-instagram', 'Instagram', 'yesterday_sidebar_instagram', 'yesterday', 'yesterday-sidebar-options' );
    add_settings_field( 'sidebar-medium', 'Medium', 'yesterday_sidebar_medium', 'yesterday', 'yesterday-sidebar-options' );
    add_settings_field( 'sidebar-youtube', 'Youtube', 'yesterday_sidebar_youtube', 'yesterday', 'yesterday-sidebar-options' );



}

function yesterday_theme_create_page() {
    require_once( get_template_directory() . '/inc/templates/yesterday-admin.php' );
}

function yesterday_sidebar_options() {
    echo '<p>Input your social media details</p>';  
}

// function yesterday_sidebar_name() {
//     $first_name = esc_attr( get_option( 'first_name' ) ) ;
//     $last_name = esc_attr( get_option( 'last_name' ) ) ;  
//     echo '<input type="text" name="first_name" value="'.$first_name.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$last_name.'" placeholder="Last Name" />';
// }

function yesterday_sidebar_twitter() {
    $handler_twitter = esc_attr( get_option( 'handler_twitter' ) ) ;  
    echo '<input type="text" name="handler_twitter" value="'.$handler_twitter.'" placeholder="Twitter" />' ;
}

function yesterday_sidebar_facebook() {
    $handler_facebook = esc_attr( get_option( 'handler_facebook' ) ) ;  
    echo '<input type="text" name="handler_facebook" value="'.$handler_facebook.'" placeholder="Facebook" />' ;
}

function yesterday_sidebar_instagram() {
    $handler_instagram = esc_attr( get_option( 'handler_instagram' ) ) ;  
    echo '<input type="text" name="handler_instagram" value="'.$handler_instagram.'" placeholder="Instagram" />' ;
}

function yesterday_sidebar_medium() {
    $handler_medium = esc_attr( get_option( 'handler_medium' ) ) ;  
    echo '<input type="text" name="handler_medium" value="'.$handler_medium.'" placeholder="Medium" />' ;
}

function yesterday_sidebar_youtube() {
    $handler_yotube = esc_attr( get_option( 'handler_youtube' ) ) ;  
    echo '<input type="text" name="handler_youtube" value="'.$handler_youtube.'" placeholder="Youtube" />' ;
}


//Function sanitize
function yesterday_sanitize_twitter( $input ){
    $output = sanitize_text_field( $input );
    $output = str_replace( '@', '', $output);
    return $output;
}
 
//Custom Settings for Custom CSS
function yesterday_theme_custom_css() {
    require_once( get_template_directory() . '/inc/templates/yesterday-custom-css.php' );
}