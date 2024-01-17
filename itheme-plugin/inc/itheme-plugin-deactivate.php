<?php

/**
 * @package IthemePlugin
 */
class IthemePluginDeactivate
{
    public static function deactive()
    {
        flush_rewrite_rules();
    }
}
