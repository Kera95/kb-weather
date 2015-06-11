<?php
/**
 * @package KB-Weather
 */

/**
 * Plugin Name: Kontrablock's weather report
 * Version: 0.1
 * Plugin URI: https://github.com/Kera95/kb-weather/
 * Description: Simple, lightweight and fast weather report plugin
 * Author: Kerim Karalic
 * Author URI: karalickerim95@gmail.com
 * Text Domain: kb-weather
 * License: GPL 2.0 or higher
 */

/**
 * Kontrablock's weather report plugin
 * Copyright (C) 2008-2015, Kerim Karalic - karalickerim95@gmail.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined( 'KBWEATHER_FILE' ) ) {
    define( 'KBWEATHER_FILE', __FILE__ );
}

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

$test = new \Admin\KBWeatherLoader();

?>