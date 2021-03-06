<?php
/*
Plugin Name: RP3 Custom Functionality
Description: Custom post types and taxonomies and other custom functionality used by RP3 that should not be tied to the theme
Version: 3.1
Author: Tracy Rotton
Author URI: http://rp3agency.com
*/

define( 'RP3_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'RP3_PLUGIN_INC_DIR', RP3_PLUGIN_DIR . 'inc/' );

require_once( RP3_PLUGIN_INC_DIR . 'custom-post-types.php' );
require_once( RP3_PLUGIN_INC_DIR . 'home-page-featured.php' );
