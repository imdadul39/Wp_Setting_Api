<?php

/**
 * @package IthemePlugin
 */
class IthemePluginActivate
{
    public static function activate()
    {
        echo 'test';
        flush_rewrite_rules();
    }
}
