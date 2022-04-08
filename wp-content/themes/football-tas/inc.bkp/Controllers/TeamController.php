<?php 
namespace FTAS_THEME\Controllers;
(!defined('ABSPATH')) ? die('No direct access allowed') : true;

use FTAS_THEME\Controllers\Wyscout;

if( !class_exists("TeamController") ):
class TeamController
{
    public static function fetch_team()
    {
        $post       = $_POST; 
        $squad_id   = $post['squad_id'];
        $url        = "https://apirest.wyscout.com/v3/teams/{$squad_id}/squad";
        $results    = Wyscout::connect($url);
        $results    = json_decode($results, true);
        $squad      = $results['squad'];

        if( isset($squad) && sizeof($squad) > 0 )
        {
            ob_start();
            require_once "html/team-squad.html.php";
            return ob_get_clean();
        }

        return "No team squad found!";
        exit;
    }

    public static function fetch_player_statistics()
    {
        $post       = $_POST;
        $player_id  = $post['playerId'];

        $url        = "https://apirest.wyscout.com/v3/players/{$player_id}";
        $result     = Wyscout::connect($url);
        $result    = json_decode($result, true); 

        if( is_array($result) ){

            $player = $result;

            ob_start();
            require_once "html/team-player-details.html.php";
            return ob_get_clean();
        }

        return "No details found!";
        exit;

    }
}   
endif;