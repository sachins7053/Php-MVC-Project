<?php

namespace App\Middlewares;

class BaseMiddleware {
    public function handle() {
        // Assuming the user is authenticated if there's a session 'user' set
        if (!isset($_SESSION['user'])) {
            // Redirect to the login page if the user is not authenticated
            header(header: 'Location: /login');
            exit();
        }
    }
}
