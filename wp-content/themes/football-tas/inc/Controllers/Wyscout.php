<?php 
namespace FTAS_THEME\Controllers;
(!defined('ABSPATH')) ? die('No direct access allowed') : true;


if( !class_exists("Wyscout") ):
class Wyscout
{
    public static function connect($api_url)
    {
		
        $username = '3zyrbji-k8sulng8x-0qthbfo-67sds2tgz1';
        $password = 'Ml_c;Gf,$*PGPG^.i&H2y4_TR:%D=4';
        $base64 = base64_encode("$username:$password");

        $url = $api_url; 
        $ch = curl_init($url); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Authorization: Basic '.$base64,  
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result_curl = curl_exec($ch);

        return $result_curl;

	}
}
endif;
