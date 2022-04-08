<?php 
namespace FTAS_THEME\Classes;
(!defined('ABSPATH')) ? die('No direct access allowed') : true;

if( !class_exists("AjaxRequests") ):
class AjaxRequests
{
    public static function init()
    {
        add_action( 'wp_ajax_update_user_country', ['FTAS_THEME\Classes\AjaxRequests','update_user_country'] );
    }

    public static function update_user_country()
    {

        $post = $_POST;

        if ( !wp_verify_nonce( $post['nonce'], "select_country")) {
            exit("No naughty business please");
        } 

        $current_user_id = get_current_user_id();
        $country         = $post['country'];
        $countryname     = $post['countryname'];
        $countryalpha3   = $post['countryalpha3'];
        
        if( isset($country) && !empty($country) ){
            //update details
            update_user_meta($current_user_id,'selected_country',$country);
            update_user_meta($current_user_id,'selected_countryname',$countryname);
            update_user_meta($current_user_id,'selected_countryalpha3',$countryalpha3);
            update_user_meta($current_user_id,'selected_country_page','completed');
            
            wp_send_json_success("Country has been added to your dashboard!");
        }

        wp_send_json_error("Please check details or contact to administrator!");

        exit;
    }
}
endif;