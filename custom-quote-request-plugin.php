<?php 
/**
 * Plugin Name: Custom Quote Request
 * Plugin URI: https://yourwebsite.com
 * Description: A custom WordPress plugin to manage quote requests.
 * Version: 1.0.0
 * Author: Hamza Naeem
 * Author URI: https://yourwebsite.com
 * License: GPL2
 */

if(!defined("ABSPATH"))
    {
        exit;
    }

class CQR_Plugin{
    public function __construct()
    {
        $this->define_constants();
        $this->init_hooks();
        $this->includes();
    }

    private function define_constants()
    {
        define("CQR_VERSION","1.0");
        define("CQR_DIR_PATH", plugin_dir_path(__FILE__));
        define("CQR_DIR_URL", plugin_dir_url(__FILE__));
    }

    private function init_hooks()
    {
        register_activation_hook(__FILE__, array($this, "activate"));
        register_deactivation_hook(__FILE__, array($this, "deactivate"));
    }

    private function includes()
    {
        require_once CQR_DIR_PATH . "includes/class_cqr_frontend.php";
        new CQR_Frontend();
    }

    public function activate()
    {
        flush_rewrite_rules();
    }

    public function deactivate()
    {
        flush_rewrite_rules();
    }
}

function cqr_init_plugin()
{
    return new CQR_Plugin();
}

cqr_init_plugin();
?>