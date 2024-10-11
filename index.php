<?php
define('BASE_URL', 'http://localhost/skrishna/'); 
// Enable error reporting at the start of the script
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/routes/web.php'; // Include routes

session_start();

// Get the request URI
$requestUri = trim($_SERVER['REQUEST_URI'], '/');

// If the request URI starts with 'skrishna/', remove it
if (strpos($requestUri, 'skrishna') === 0) {
    $requestUri = substr($requestUri, strlen('skrishna/'));
}

// Routing logic
$routes = getRoutes();
$matchedRoute = null;
$groupMiddleware = null;

// Loop through the routes to find a match
foreach ($routes as $route => $handler) {

    if (isset($handler['routes']) && isset($handler['middleware'])) {
        // This is a group route, check inside its routes
        foreach ($handler['routes'] as $groupRoute => $groupHandler) {
            $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_-]+)', $groupRoute);
            $pattern = '#^' . $pattern . '$#';

            if (preg_match($pattern, $requestUri, $matches)) {
                $matchedRoute = $groupHandler;
                $groupMiddleware = $handler['middleware'];
                break 2; // Exit both loops
            }
        }
    } else {
        // Regular route
        $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_-]+)', $route);
        $pattern = '#^' . $pattern . '$#';

        if (preg_match($pattern, $requestUri, $matches)) {
            $matchedRoute = $handler;
            break;
        }
    }
}

// Route handling logic
if ($matchedRoute) {
    list($controller, $method, $middleware) = $matchedRoute;

    // Handle group middleware
    if ($groupMiddleware) {
        if (class_exists($groupMiddleware)) {
            $middlewareInstance = new $groupMiddleware();
            if (method_exists($middlewareInstance, 'handle')) {
                $middlewareInstance->handle();
            } else {
                echo "Error: Middleware class '$groupMiddleware' does not have a handle method.";
                exit;
            }
        } else {
            echo "Error: Middleware class '$groupMiddleware' not found.";
            exit;
        }
    }

    // Handle route-specific middleware
    if (!empty($middleware)) {
        if (class_exists($middleware)) {
            $middlewareInstance = new $middleware();
            if (method_exists($middlewareInstance, 'handle')) {
                $middlewareInstance->handle();
            } else {
                echo "Error: Middleware class '$middleware' does not have a handle method.";
                exit;
            }
        } else {
            echo "Error: Middleware class '$middleware' not found.";
            exit;
        }
    }

    // Call the controller method with any extracted parameters
    array_shift($matches); // Remove full match
    if (class_exists($controller) && method_exists($controller, $method)) {
        $controllerInstance = new $controller();
        call_user_func_array([$controllerInstance, $method], $matches);
    } else {
        echo "Error: Controller '$controller' or method '$method' not found.";
    }

} else {
    header('Location: ' . BASE_URL .'404');
    echo "404 - Page Not Found, go to home page";
}