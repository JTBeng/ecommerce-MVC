<?php
// Autoload manual
spl_autoload_register(function ($class) {
    $path = '../' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

$GLOBALS['appConfig'] = require_once '../config/app.php';
require_once '../core/Router.php';

use Core\Router;

$router = new Router();
$router->dispatch($_GET['url'] ?? '');
