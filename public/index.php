<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Bramus\Router\Router;

$router = new Router();

// Load route definitions
require_once __DIR__ . '/../routes/web.php';

// Run the router
$router->run();
