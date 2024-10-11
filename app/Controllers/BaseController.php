<?php

namespace App\Controllers;

use App\Models\Database;

class BaseController {

    protected $db;

    // Base constructor, where common things can be initialized
    public function __construct() {
        // Database connection initialization
        $this->db = Database::getInstance()->getConnection();
        
        // Start session if needed (for authentication, etc.)
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        // Additional common functionalities such as middleware checks, session handling, etc.
        $this->init();
    }

    // Method to load models in any controller that extends the base controller
    protected function loadModel($model) {
        $modelClass = "App\\Models\\{$model}";
        if (class_exists($modelClass)) {
            return new $modelClass();
        } else {
            throw new \Exception("Model {$model} not found.");
        }
    }

    // Common logic that can be run for every controller
    protected function init() {
        // Example: Add global middleware check, session check, or user authentication
    }

    // You can also add a method to render views
    protected function render($view, $data = []) {
        extract($data); // Extract array into variables
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            throw new \Exception("View {$view} not found.");
        }
    }

    protected function redirectBack($fallbackUrl = null) {
        // Check if there's a referrer URL in the request headers
        $previousUrl = $_SERVER['HTTP_REFERER'] ?? $fallbackUrl;

        if ($previousUrl) {
            header("Location: $previousUrl");
        } else {
            // If no referrer, redirect to the fallback URL
            header("Location: $fallbackUrl");
        }

        exit; // Ensure no further code is executed
    }

}
