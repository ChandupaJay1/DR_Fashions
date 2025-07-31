<?php

class Router
{
    private $routes = [];

    public function add($method, $pattern, $callback)
    {
        $this->routes[] = [
            'method' => $method,
            'pattern' => "#^" . $pattern . "$#",
            'callback' => $callback
        ];
    }

    public function dispatch($uri)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        foreach ($this->routes as $route) {
            if ($method === $route['method'] && preg_match($route['pattern'], $uri, $params)) {
                array_shift($params);
                return call_user_func_array($route['callback'], $params);
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }
}
