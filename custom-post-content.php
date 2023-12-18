<?php
/**
 * Plugin Name:     Custom Post Content
 * Plugin URI:      https://www.custompostcontent.com
 * Description:     Create a custom content for single post
 * Version:         1.0.0
 * Author:          Faizan Nazir
 * Author URI:      https://www.faizannazir.com
 * Text Domain:     cp-content-fn
 * Domain Path:     /languages
*/

// No directly access
if ( ! defined ( 'ABSPATH' )) {
          exit;
}

// including other php files
include_once( plugin_dir_path( __FILE__ ) . 'includes/text-domain.php' );
include_once( plugin_dir_path( __FILE__ ) . 'includes/register-custom-post-content.php' );
include_once( plugin_dir_path( __FILE__ ) . 'includes/post-list-meta-box.php' );
include_once( plugin_dir_path( __FILE__ ) . 'includes/save-custom-fields-input.php' );
include_once( plugin_dir_path( __FILE__ ) . 'includes/set-content.php' );
include_once( plugin_dir_path( __FILE__ ) . 'includes/set-meta-field-css.php' );
include_once( plugin_dir_path( __FILE__ ) . 'includes/manage_columns.php' );
include_once( plugin_dir_path( __FILE__ ) . 'includes/generate_post_shortcode.php' );
