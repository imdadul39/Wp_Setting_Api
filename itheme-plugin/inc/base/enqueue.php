<?php

/**
 * @package IthemePlugin
 */

class Enqueue
{
    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }
    function enqueue()
    {
        wp_enqueue_script('jquery');
        wp_enqueue_style('itheme_plugin_style', PLUGIN_URL . 'assets/style.css');
        wp_enqueue_script('itheme_plugin_script', PLUGIN_URL . 'assets/script.js');
    }
}
$enqueue = new Enqueue();
$enqueue->register();
