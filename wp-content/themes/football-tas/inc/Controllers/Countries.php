<?php 
namespace FTAS_THEME\Controllers;
(!defined('ABSPATH')) ? die('No direct access allowed') : true;

use FTAS_THEME\Controllers\Wyscout;

if( !class_exists("Countries") ):
class Countries
{
    public static function fetch_countries()
    {

        $filter     = $_POST['filter'];
		
        $url        = "https://apirest.wyscout.com/v3/areas";
        $results    = Wyscout::connect($url);
        $results    = json_decode($results, true);
        $areas      = $results['areas'];

        if( isset($filter) && !empty($filter) ){
            $filtered_countries = array_filter($areas, function ($var) use ($filter) {
                if( str_starts_with( strtolower($var['name']), strtolower($filter) ) ){
                    return true;
                }
                return false;
            });
            $areas = $filtered_countries;
        }

        ob_start();
        require_once "html/countries.html.php";
        return ob_get_clean();
        
        exit;
        
	}
}
endif;
