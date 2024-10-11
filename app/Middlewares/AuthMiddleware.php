<?php

namespace App\Middlewares;

class AuthMiddleware {
    public function handle() {
        // Assuming the user is authenticated if there's a session 'user' set
        if (!isset($_SESSION['user_id'])) {
           
            header('Location: /skrishna/admin/login');
            exit();
        }
    }
}
