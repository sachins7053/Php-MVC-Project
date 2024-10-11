<?php

class View {
    // Render a view file
    public static function render($view, $data = []) {
        extract($data); // Convert array keys to variables

        $viewPath = __DIR__ . '/../app/views/' . $view . '.php';

        if (file_exists($viewPath)) {
            require($viewPath);
        } else {
            throw new Exception("View file not found: $view");
        }
    }
}
