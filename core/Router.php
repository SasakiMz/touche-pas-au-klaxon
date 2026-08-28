<?php

namespace Core;

class Router {
    private array $routes = [];
    public function add(string $path, string $controller, string $method): void 
    {
        $this->routes[$path] = [
            'controller' -> $controller,
            'method'     -> $method
        ];
    }
    public function dispatch(string $path): void
    {
        if (!isset($this->routes[$path]))
            {http_response_code(404);
            echo 'Page non trouvée';
            return;
            }
        $routes = this->route[$path];
        $controller = new $route['controller']();
        $controller->{$route['method']}();
    }
}
