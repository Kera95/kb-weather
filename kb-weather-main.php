<?php
/**
 * @package KB-Weather
 */

// Current plugin version
define( 'KBWEATHER_VERSION', '0.1' );

// Path to plugin folder
if ( !defined( 'KBWEATHER_PATH' ) ) {
    define( 'KBWEATHER_PATH', plugin_dir_path( KBWEATHER_FILE ) );
}

// Path to plugin file, relative to plugins dir
if ( !defined( 'KBWEATHER_BASENAME' ) ) {
    define( 'KBWEATHER_BASENAME', plugin_basename( KBWEATHER_FILE ) );
}

if ( !defined( 'KBWEATHER_TEXTDOMAIN' ) ) {
    define( 'KBWEATHER_TEXTDOMAIN', 'kb-weather' );
}

require( 'vendor/autoload.php' );

$test = new \Admin\KBWeatherAdminInit();

?>