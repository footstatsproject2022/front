<?php 
header("Set-Cookie: cross-site-cookie=football_tas; SameSite=None; Secure");

(!defined('ABSPATH')) ? die('No direct access allowed') : true;
(file_exists(dirname(__FILE__) . '/vendor/autoload.php')) ? require_once dirname(__FILE__) . '/vendor/autoload.php' : false;

use FTAS_THEME\ThemeActivate;
use FTAS_THEME\RegisterRoutes;
use FTAS_THEME\Classes\AjaxRequests;
use FTAS_THEME\Controllers\Settings;

//some global variables

//Theme activate
// add_action("after_switch_theme", function(){
//     ThemeActivate::createTables();
// });

//Register Routes
add_action('rest_api_init', function () {
    RegisterRoutes::routes();
});

//ajax requests
AjaxRequests::init();

//settings
Settings::init();


add_theme_support( 'post-thumbnails' );
add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    )
);

add_theme_support(
    'custom-logo'
);

set_post_thumbnail_size( 1568, 9999 );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(
    array(
        'primary' => __( 'Primary Menu', 'titan' ), 
    )
);

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';



/*--**
Enqueue Bootstrap CSS and JS for Sitewide Support
**--*/
function bootstrap_scrpits_enqueue()
{
    wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(  'jquery'  ), NULL, true);
    wp_register_style('bootstrap-css', get_stylesheet_directory_uri().'/styles/app.css', false, NULL, 'all');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_style('bootstrap-css');
}
add_action('wp_enqueue_scripts', 'bootstrap_scrpits_enqueue');

/*--**
Enqueue Font Awesome for Sitewide Support
**--*/
function font_awesome_scripts_enqueue(){
	wp_register_script('font-awesome', 'https://kit.fontawesome.com/ce986cd428.js', array('jquery'), NULL, true);
  wp_enqueue_script('font-awesome');
}
add_action('wp_enqueue_scripts', 'font_awesome_scripts_enqueue');

/*--**
Enqueue JQuery for Sitewide Support
**--*/
// if (!is_admin()) add_action("wp_enqueue_scripts", "jquery_enqueue", 11);
// function jquery_enqueue() {
//    wp_deregister_script('jquery');
//    wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", false, null);
//    wp_enqueue_script('jquery');
// }



// function redirect_user() {
//     if ( ! is_user_logged_in() && ! is_page( 'login' ) ) {
//         $return_url = esc_url( home_url( "/login" ) );
//         wp_redirect( $return_url );
//         exit;
//     }
// }
// add_action( 'template_redirect', 'redirect_user' );

