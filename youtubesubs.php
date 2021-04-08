<?php
/**
 * YoutubeSubs
 *
 * @package     YoutubeSubs
 * @author      Tria Bagus
 * @copyright   2021 Tria Bagus
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: YoutubeSubs
 * Plugin URI:  https://example.com/YoutubeSubs
 * Description: This plugin youtube subsribe for this widget.
 * Version:     1.0
 * Author:      Tria Bagus
 * Author URI:  https://triabagus.xyz
 * Text Domain: youtube-subscribe
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// The point of that code is to prevent any PHP inside the file from being executed if the file is accessed directly outside a WordPress context. ABSPATH is defined by WordPress, so if it's missing when the file is accessed you can tell that it's not running in a WordPress context.

if (!defined('ABSPATH')) { exit; } 

// Load script
require_once(plugin_dir_path(__FILE__).'/includes/yts-enqueue.php');

// Load class 
require_once(plugin_dir_path(__FILE__).'/includes/yts-class.php');

// Register Widget
function register_youtubesubs(){
    register_widget('Youtube_Subs_Widget');
}

add_action('widgets_init', 'register_youtubesubs');