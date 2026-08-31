<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Router;
use App\Controller\HomeController;
use App\Controller\UserController;

$router = new Router();

$router->add(
    '/',
    HomeController::class,
    'home'
);
$router->add(
    '/users',
    UserController::class,
    'index'
);
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$basePath = '/touche-pas-au-klaxon/public';
$path = str_replace($basePath, '', $path);

if ($path === '') {
    $path = '/';
}
$router->dispatch($path);