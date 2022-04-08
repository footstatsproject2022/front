<?php 
namespace FTAS_THEME\Controllers;
(!defined('ABSPATH')) ? die('No direct access allowed') : true;

use FTAS_THEME\Controllers\Wyscout;

if( !class_exists("Competitions") ):
class Competitions
{
    public static function fetch_competitions()
    {

        $post        = $_POST;

        $current_user_id = $post['current_user_id']/20121993;
        $user = get_userdata( $current_user_id );
        if ( $user === false ) {
            return "User not exits, Please login again.";
        }

        $selected_country       = get_user_meta($current_user_id,'selected_country', true);
        $selected_countryname   = get_user_meta($current_user_id,'selected_countryname', true);
        $selected_countryalpha3 = "BRA"; //get_user_meta($current_user_id,'selected_countryalpha3', true);

        if( isset($selected_countryalpha3) && !empty($selected_countryalpha3) )
        {
            $url            = "https://apirest.wyscout.com/v3/competitions?areaId=".$selected_countryalpha3;
            $results        = Wyscout::connect($url);
            $results        = json_decode($results, true);
            $competitions   = $results['competitions'];

            ob_start();
            require_once "html/competitions.html.php";
            return ob_get_clean();
            
            exit;

        }

        return "Something went wrong, please try again later.";

	}


}
endif;
