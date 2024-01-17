<?php

/**
 * @package IthemePlugin
 */
if (class_exists('Init')) {
    class Init
    {
        public static function register_services()
        {
        }
    }
    Init::register_services();
}


// if (!class_exists('IthemePlugin')) {
//     class IthemePlugin
//     {
//         public $ithemeSetting;
//         function __construct()
//         {
//             add_action('init', array($this, 'custom_post_type'));
//             $this->ithemeSetting = plugin_basename(__FILE__);
//         }


//         public function register()
//         {
//             add_action('admin_enqueue_scripts', array($this, 'enqueue'));
//             add_action('admin_menu', array($this, 'add_admin_pages'));
//             add_filter("plugin_action_links_$this->ithemeSetting", array($this, 'settings_links'));
//         }
//         public function settings_links($links)
//         {
//             $settingLinks = '<a href="admin.php?page=itheme_plugin">Settings</a>';
//             array_push($links, $settingLinks);
//             return $links;
//         }


//         function enqueue()
//         {
//             wp_enqueue_style('itheme_style', plugins_url('/assets/style.css', __FILE__));
//             wp_enqueue_script('itheme_script', plugins_url('/assets/script.js', __FILE__));
//         }

//         function Activate()
//         {
//             require_once plugin_dir_path(__FILE__) . '/inc/base/itheme-active.php';
//             IthemePluginActive::Activate();
//         }

//         public function add_admin_pages()
//         {
//             add_menu_page('Itheme Plugin', 'IPlugin', 'manage_options', 'itheme_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
//         }

//         public function admin_index()
//         {
//             require_once plugin_dir_path(__FILE__) . '/templates/admin.php';
//         }




//         function Deactivate()
//         {
//             flush_rewrite_rules();
//         }
//         // Custom Post Type
//         function custom_post_type()
//         {
//             register_post_type('book', array(
//                 'labels'     => [
//                     'name'      => 'Book',
//                     'singular_name'      => '',
//                 ],
//                 'description'         => '',
//                 'public'              => true,
//             ));
//         }
//     }


//     $ithemePlugin = new IthemePlugin();
//     $ithemePlugin->register();

//     // Activate 
//     register_activation_hook(__FILE__, array($ithemePlugin, 'Activate'));
//     // Deactivate 
//     register_deactivation_hook(__FILE__, array($ithemePlugin, 'Deactivate'));

//     require_once plugin_dir_path(__FILE__) . '/inc/pages/admin.php';
// }
