<?php 
namespace FTAS_THEME\Controllers;
(!defined('ABSPATH')) ? die('No direct access allowed') : true;

if( !class_exists("Settings") ):
class Settings
{
    public static function init()
    {
        add_action("um_after_login_fields", array("FTAS_THEME\Controllers\Settings","login_redirect") );
    }

    public static function login_redirect()
    {
        $url = site_url()."/select-country"; 
        echo "<input type='hidden' name='redirect_to' value='$url' />";
    }
}
endif;