<?php

/**
 * Plugin Name: Image Optimizer WD
 * Plugin URI: https://web-dorado.com/products/wordpress-image-optimizer.html
 * Description: Image Optimizer WordPress plugin enables you to resize, compress and optimize PNG, JPG, GIF files while maintaining image quality.
 * Version: 1.0.3
 * Author: WebDorado
 * Author URI: https://web-dorado.com/
 * License: GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

define('IOWD_DIR', WP_PLUGIN_DIR . "/" . plugin_basename(dirname(__FILE__)));
define('IOWD_URL', plugins_url(plugin_basename(dirname(__FILE__))));
define('IOWD_DIR_INCLUDES', IOWD_DIR . '/includes');
define('IOWD_DIR_CLASSES', IOWD_DIR . '/classes');
define('IOWD_DIR_VIEWS', IOWD_DIR . '/views');
define('IOWD_URL_CSS', IOWD_URL . '/assets/css');
define('IOWD_URL_JS', IOWD_URL . '/assets/js');
define('IOWD_URL_IMG', IOWD_URL . '/assets/img');


define('IOWD_NAME', plugin_basename(dirname(__FILE__)));
define('IOWD_MAIN_FILE', plugin_basename(__FILE__));
define('IOWD_PREFIX', "iowd");
//define( 'IOWD_API_URL', "http://local.web-dorado.info/IO_api/v1/" );			
define('IOWD_API_URL', "https://optimizer.web-dorado.com/api/");

setlocale(LC_ALL, 'en_US.UTF-8');

if (version_compare(phpversion(), "5.4", '>')){
    require_once('vendor/autoload.php');
}

if (class_exists("WP_REST_Controller")) {
    require_once('iowd-rest.php');
    add_action('rest_api_init', function () {
        $rest = new IOWD_Rest();
        $rest->register_routes();
    });
}

if (is_admin() || (defined('DOING_CRON') && DOING_CRON)) {
    require_once('iowd_class.php');
    register_activation_hook(__FILE__, array('IOWD', 'activate'));

    if (version_compare(phpversion(), "5.4", '>')){
        require_once(IOWD_DIR_INCLUDES . '/iowd-media-library.php');
        add_action('plugins_loaded', array('IOWD', 'get_instance'));
        register_deactivation_hook(__FILE__, array('IOWD', 'deactivate'));
    }

}

if (!class_exists("DoradoWeb")) {
    require_once(IOWD_DIR . '/wd/start.php');
}

global $iowd_plugin_options;

$iowd_plugin_options = array(
    "prefix"                 => IOWD_PREFIX,
    "wd_plugin_id"           => 181,
    "plugin_title"           => "Image Optimizer WD",
    "plugin_wordpress_slug"  => "image-optimizer-wd",
    "plugin_dir"             => IOWD_DIR,
    "plugin_main_file"       => __FILE__,
    "description"            => '',
    "plugin_features"        => array(),
    "user_guide"             => array(),
    "overview_welcome_image" => null,
    "video_youtube_id"       => "",
    "plugin_wd_url"          => "",
    "plugin_wd_demo_link"    => "",
    "plugin_wd_addons_link"  => "",
    "after_subscribe"        => "admin.php?page=iowd_settings",
    "plugin_wizard_link"     => "",
    "plugin_menu_title"      => __('Image optimizer', IOWD_PREFIX),
    "plugin_menu_icon"       => IOWD_URL_IMG . "/icon.png",
    "deactivate"             => true,
    "subscribe"              => true,
    "custom_post"            => false,
    "menu_capability"        => "manage_options",
    "menu_position"          => null,
);
dorado_web_init($iowd_plugin_options);
