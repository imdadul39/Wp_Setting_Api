<?php

/**
 * @package IthemePlugin
 */
class SettingLink
{
    public function register()
    {
        add_filter('plugin_action_links_' . PLUGIN, array($this, 'setting_link'));
    }
    public function setting_link($link)
    {
        $setting_link = '<a href="admin.php?page=itheme_plugin">Settings</a>';
        array_push($link, $setting_link);
        return $link;
    }
}
$settingLink = new SettingLink();
$settingLink->register();
