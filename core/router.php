<?php

class Router {
    protected $routes = [];

    // Method to register GET routes
    public function get($uri, $controllerAction) {
        $this->routes['GET'][$uri] = $controllerAction;
    }

    // Handle incoming request
    public function dispatch($requestUri, $requestMethod) {
        $requestUri = rtrim($requestUri, '/'); // Remove trailing slash

        if (isset($this->routes[$requestMethod][$requestUri])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestMethod][$requestUri])
            );
        }

        // If no route found, display a 404 page
        http_response_code(404);
        echo "404 Page Not Found!";
    }

    // Call the controller and method
    protected function callAction($controller, $method) {
        $controller = new $controller;

        if (!method_exists($controller, $method)) {
            throw new Exception(
                "{$controller} does not respond to the {$method} action."
            );
        }

        return $controller->$method();
    }
}
