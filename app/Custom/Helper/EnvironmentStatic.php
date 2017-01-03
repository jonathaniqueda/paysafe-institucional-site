<?php
/**
 * Created by PhpStorm.
 * User: iqueda
 * Date: 8/3/16
 * Time: 10:38 AM
 */

namespace App\Custom\Helper;


class EnvironmentStatic
{
    public static function isProduction()
    {
        if (isset($_SERVER['environment'])) {
            return $_SERVER['environment'] === 'production';
        }

        return false;
    }

    public static function isDevelopment()
    {
        if (isset($_SERVER['environment'])) {
            return $_SERVER['environment'] === 'development';
        }

        return false;
    }

    public static function isLocal()
    {
        if (isset($_SERVER['environment'])) {
            return in_array($_SERVER['environment'], array('local', 'development.local'));
        }

        return true;
    }

    public static function getEnv()
    {
        if (!file_exists(base_path('envapp.php'))) {
            throw new \Exception('File envapp.php is required', 1);
        }

        require_once base_path('envapp.php');

        return isset($_SERVER['environment']) ? $_SERVER['environment'] : getenv('environment');
    }
}