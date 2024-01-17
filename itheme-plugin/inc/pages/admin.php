<?php

/**
 * @package IthemePlugin
 */
class AdminPages
{

    public function register()
    {
        add_action('admin_menu', array($this, 'add_admin_pages'));
        add_action('admin_init', array($this, 'itheme_settings_api'));
    }
    public function add_admin_pages()
    {
        add_menu_page('Itheme Plugin', 'IPlugin', 'manage_options', 'itheme_plugin', array($this, 'admin_index'), 'dashicons-store', 110);

        add_submenu_page('itheme_plugin', 'General', 'Itheme Genarel', 'manage_options', 'itheme_plugin', array($this, 'admin_index'));

        add_submenu_page('itheme_plugin', 'Theme Custom CSS', 'Custom CSS', 'manage_options', 'xpent-custom_css', array($this, 'xpent_custom_css_page'));
    }


    // plugin Setting Api *************************
    public function itheme_settings_api()
    {
        add_settings_section('plugin_heading', 'Plugin Options', array($this, 'plugin_heading_function'), 'itheme_plugin');

        add_settings_field('plugin_text', 'Plugin Heading', array($this, 'plugin_text_function'), 'itheme_plugin', 'plugin_heading');

        register_setting('plugin_heading', 'plugin_text');

        add_settings_field('itheme_facebook', 'Facebook Link', array($this, 'facebook_link_function'), 'itheme_plugin', 'plugin_heading');
        register_setting('plugin_heading', 'itheme_facebook');

        add_settings_field('itheme_linkedin', 'linkedin Link', array($this, 'linkedin_link_function'), 'itheme_plugin', 'plugin_heading');
        register_setting('plugin_heading', 'itheme_linkedin');
    }
    public function plugin_heading_function()
    {
        return;
    }
    public function plugin_text_function()
    {
        echo '<input class="regular-text" type="text" name="plugin_text" value="' . get_option('plugin_text') . '"/>';
    }
    public function facebook_link_function()
    {
        echo '<input class="regular-text" type="text" name="itheme_facebook" value="' . esc_url(get_option('itheme_facebook')) . '"/>';
    }

    public function linkedin_link_function()
    {
        echo '<input class="regular-text" type="text" name="itheme_linkedin" value="' . esc_url(get_option('itheme_linkedin')) . '"/>';
    }


    public function admin_index()
    {

?>
        <form action="options.php" method="post">
            <div class="wrap">
                <ul class="tab-menu">
                    <li class="active" data-toggle="tab-1">tab-1</li>
                    <li data-toggle="tab-2">tab-2</li>
                    <li data-toggle="tab-3">tab-3</li>
                    <li data-toggle="tab-4">tab-4</li>
                </ul>
                <div class="tab-content active" id="tab-1">
                    <?php settings_errors(); ?>
                    <?php do_settings_sections('itheme_plugin'); ?>

                    <?php settings_fields('plugin_heading'); ?>






                    <?php submit_button(); ?>

                </div>




                <div class="tab-content" id="tab-2">
                    <h2>This is a tab heading 2</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsa repudiandae delectus quibusdam ullam eligendi dolores fugit, eaque hic earum laudantium fuga adipisci? Nesciunt fugit at odio, inventore ducimus numquam!</p>
                </div>
                <div class="tab-content" id="tab-3">
                    <h2>This is a tab heading 3</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsa repudiandae delectus quibusdam ullam eligendi dolores fugit, eaque hic earum laudantium fuga adipisci? Nesciunt fugit at odio, inventore ducimus numquam!</p>
                </div>
                <div class="tab-content" id="tab-4">
                    <h2>This is a tab heading 4</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsa repudiandae delectus quibusdam ullam eligendi dolores fugit, eaque hic earum laudantium fuga adipisci? Nesciunt fugit at odio, inventore ducimus numquam!</p>
                </div>
            </div>
        </form>
<?php
    }
    public function xpent_custom_css_page()
    {
        echo '<h1 class="hello">This is Subpage</h1>';
    }
}
$adminPages = new AdminPages();
$adminPages->register();
