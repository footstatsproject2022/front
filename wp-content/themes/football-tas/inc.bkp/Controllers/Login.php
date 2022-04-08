<?php 
namespace FTAS_THEME\Controllers;
(!defined('ABSPATH')) ? die('No direct access allowed') : true;


if( !class_exists("Login") ):
class Login
{
    public static function login()
    {
		global $wpdb;
		$post = $_POST;

		$data = array(
			'email' 	=> $post['email_address'],
			'password' 	=> $post['password'],
		);
		
        $data = array();
        $data['user_login']     = $post["email"];
        $data['user_password']  = $post["password"];
        $data['remember'] = true;
        $user = wp_signon( $data, false );

        if ( !is_wp_error($user) )
        {
            return array('success' => true, 'error' => $user, );
        }
        else{
            return array('success' => false, 'error' => $user->get_error_message(), );
        }
        
        exit;
	}
}
endif;
