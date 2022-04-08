<?php
/*
 * Registered routes
 * @package APPSENSE
 */

namespace FTAS_THEME;

(!defined('ABSPATH')) ? die('No direct access allowed') : true;
if (!class_exists('ThemeActivate')):
class ThemeActivate
{

    public static function createTables() 
    {
        global $wpdb;

        $sql = "CREATE TABLE {$wpdb->prefix}tas_country (
            `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,                    
            `c_id` varchar(20) DEFAULT NULL,
            `c_name` varchar(195) DEFAULT NULL,
            `c_alpha3` varchar(195) DEFAULT NULL,
            `user_id` varchar(195) DEFAULT NULL,
            `created_at` varchar(50) DEFAULT NULL,
            `updated_at` varchar(50) DEFAULT NULL);
        ";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        
    }

}
endif;
