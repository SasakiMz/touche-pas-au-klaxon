<?php

namespace Core;

class Router {
    /**
     * @var array<string, array<string, string>>
     */
    private array $routes = [];
    public function add(string $path, string $controller, string $method): void 
    {
        $this->routes[$path] = [
            'controller' => $controller,
            'method'     => $method
        ];
    }
    public function dispatch(string $path): void
    {
        if (!isset($this->routes[$path])) {
            http_response_code(404);
            echo 'Page non trouvée';
            return;
        }

        $route = $this->routes[$path];
        $method = $route['method'];
        $controllerClass = $route['controller'];
        $controller = new $controllerClass();
        $controller->$method();
    }
}
