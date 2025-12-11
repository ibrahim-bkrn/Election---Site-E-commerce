<?php

declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

use Mini\Core\Router;

// Table des routes minimaliste
$routes = [
    ['GET', '/', [Mini\Controllers\HomeController::class, 'index']],
    ['GET', '/users', [Mini\Controllers\HomeController::class, 'users']],
    ['GET', '/catalogue', [Mini\Controllers\HomeController::class, 'catalogue']],
    ['GET', '/apropos', [Mini\Controllers\HomeController::class, 'about']],
    ['GET', '/contact', [Mini\Controllers\HomeController::class, 'contact']],
];

// Bootstrap du router
$router = new Router($routes);
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);


