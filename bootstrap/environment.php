<?php
use Dotenv\Dotenv;
use App\Custom\Helper\EnvironmentStatic;

/*
  |--------------------------------------------------------------------------
  | Detect The Application Environment
  |--------------------------------------------------------------------------
  |
  | Laravel takes a dead simple approach to your application environments
  | so you can just specify a machine name for the host that matches a
  | given environment, then we will automatically detect it for you.
  |
 */
$env = $app->detectEnvironment(function () {
    $environmentDir = __DIR__ . '/../envvars/';
    $environmentFile = EnvironmentStatic::getEnv() . '.env';
    if (file_exists($environmentDir . $environmentFile)) {
        $dotenv = new Dotenv($environmentDir, $environmentFile);
        $dotenv->load();
    }
});