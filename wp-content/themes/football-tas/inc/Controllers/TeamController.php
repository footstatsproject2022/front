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
        $year       = $post['year'];

        $url        = "https://apirest.wyscout.com/v3/players/{$player_id}";
        $player     = Wyscout::connect($url);
        $player     = json_decode($player, true); 

        $output     = array();

        //details
        if( is_array($player) ){
            ob_start();
            require_once "html/player/details.html.php";
            $output['details'] = ob_get_clean();
            
            //market value
            $marketValue = self::getMarketValue($player_id, $year);
            $output['graph'] = $marketValue['graph'];
            $output['current_market_value'] = $marketValue['current_market_value'];
            
            //tabs
            ob_start();
            require_once "html/player/tabs.html.php";
            $output['tabs'] = ob_get_clean();
        
        }

        return $output;
        exit;

    }


    public static function getMarketValue($player_id, $year)
    {
        $file = get_template_directory().'/inc/csv/Market_value_dataframe.csv';
        $rows   = array_map('str_getcsv', file($file));
        $header = array_shift($rows);
        $csv    = array();
        $current_marketvalue = "";
        
        foreach($rows as $row) {
            $entry = array_combine($header, $row);
            if( $entry['playerId'] == $player_id )
            {
                foreach( $entry as $itemKey => $itemVal )
                {
                    
                    if( self::validateDate($itemKey) )
                    {
                        $market_update_date         = \DateTime::createFromFormat('Y-m-d H:i:s', $itemKey); 
                        $market_update_date_month   = $market_update_date->format('M');
                        $market_update_date_year    = $market_update_date->format('Y');
                        
                        if( $market_update_date_year  ==  $year )
                        {
                            $csv[$market_update_date_month] = round($itemVal, 0);
                        }
                        
                    }
                    
                }
                
                $current_marketvalue = $entry['marketValue_final'];
            }
        }

        //graph value
        $finalMarketValArr = [
            'graph' => $csv,
            'current_market_value' => $current_marketvalue,
        ];

        return $finalMarketValArr;
    }


    public static function validateDate($date) {
        if( \DateTime::createFromFormat('Y-m-d H:i:s', $date) !== false ) {
          return true;
        }
        return false;
    }
}   
endif;