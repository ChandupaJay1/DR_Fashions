<?php

use Bramus\Router\Router;

$router = new Router();

$router->get('/', function() {
    require __DIR__ . '/../app/controllers/PageController.php';
    $controller = new PageController();
    $controller->home();
});

$router->get('/about', function() {
    require __DIR__ . '/../app/controllers/PageController.php';
    $controller = new PageController();
    $controller->about();
});

$router->get('/contact', function() {
    require __DIR__ . '/../app/controllers/PageController.php';
    $controller = new PageController();
    $controller->contact();
});

$router->get('/blog', function() {
    require __DIR__ . '/../app/controllers/PageController.php';
    $controller = new PageController();
    $controller->blog();
});

$router->get('/portfolio', function() {
    require __DIR__ . '/../app/controllers/PageController.php';
    $controller = new PageController();
    $controller->portfolio();
});

$router->get('/service', function() {
    require __DIR__ . '/../app/controllers/PageController.php';
    $controller = new PageController();
    $controller->service();
});

$router->get('/element', function() {
    require __DIR__ . '/../app/controllers/PageController.php';
    $controller = new PageController();
    $controller->element();
});

// 404 handler
$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo "404 - Page Not Found";
});
