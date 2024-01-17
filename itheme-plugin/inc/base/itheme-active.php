<?php

/**
 * @package IthemePlugin
 */

class IthemePluginActive
{
    public static function activate()
    {
        flush_rewrite_rules();
    }
}

IthemePluginActive::activate();
