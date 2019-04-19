<?php
/**
 * @package   Generate Secure Password
 * @author    Daria C.
 * @license   GPL-2.0+
 * @link      
 * @copyright Daria C.
 *
 * @wordpress-plugin
 * Plugin Name:	  Generate Secure Password
 * Plugin URI:        
 * Description:       Secure Password Plugin
 * Version:           1.0.0
 * Author:            Daria C.
 * Author URI:
 * Text Domain:       
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

define( 'DA_GSP_PLUGIN', __FILE__ );

define( 'DA_GSP_PLUGIN_BASENAME', plugin_basename( DA_GSP_PLUGIN ) );

define( 'DA_GSP_PLUGIN_NAME', trim( dirname( DA_GSP_PLUGIN_BASENAME ), '/' ) );

define( 'DA_GSP_PLUGIN_DIR', untrailingslashit( dirname( DA_GSP_PLUGIN ) ) );

require_once DA_GSP_PLUGIN_DIR . '/includes/functions.php';
require_once DA_GSP_PLUGIN_DIR . '/includes/init.php';
require_once DA_GSP_PLUGIN_DIR . '/includes/shortcodes.php';

