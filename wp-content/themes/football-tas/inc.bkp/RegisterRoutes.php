<?php
/*
 * Registered routes
 * @package APPSENSE
 */

namespace FTAS_THEME;

(!defined('ABSPATH')) ? die('No direct access allowed') : true;
if (!class_exists('RegisterRoutes')):
class RegisterRoutes
{

    public static function routes() 
    {

        register_rest_route( 'api/v1', '/countries', array(
          'methods' => 'POST',
          'callback' => ['\FTAS_THEME\Controllers\Countries', 'fetch_countries'],
        ), true ); 
        
        register_rest_route( 'api/v1', '/competitions', array(
          'methods' => 'POST',
          'callback' => ['\FTAS_THEME\Controllers\Competitions', 'fetch_competitions'],
        ), true );


        //Get Team
        register_rest_route( 'api/v1', '/team', array(
          'methods' => 'POST',
          'callback' => ['\FTAS_THEME\Controllers\TeamController', 'fetch_team'],
        ), true );

        //Get Team Player Statistics
        register_rest_route( 'api/v1', '/team/player/statistics', array(
          'methods' => 'POST',
          'callback' => ['\FTAS_THEME\Controllers\TeamController', 'fetch_player_statistics'],
        ), true );

        
    }

}
endif;
