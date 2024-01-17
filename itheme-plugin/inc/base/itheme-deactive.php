<?php

/**
 * @package IthemePlugin
 */

class IthemePluginDeactive
{
    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}
IthemePluginDeactive::deactivate();
