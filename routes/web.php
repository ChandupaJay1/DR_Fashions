<?php

require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../app/controllers/PageController.php';

$router = new Router();

$router->add('GET', '/', function () {
    $controller = new PageController();
    $controller->home();
});

$router->add('GET', '/about', function () {
    $controller = new PageController();
    $controller->about();
});

$router->add('GET', '/blog', function () {
    $controller = new PageController();
    $controller->blog();
});

$router->add('GET', '/contact', function () {
    $controller = new PageController();
    $controller->contact();
});

$router->add('GET', '/element', function () {
    $controller = new PageController();
    $controller->element();
});

$router->add('GET', '/portfolio', function () {
    $controller = new PageController();
    $controller->portfolio();
});

$router->add('GET', '/service', function () {
    $controller = new PageController();
    $controller->service();
});
