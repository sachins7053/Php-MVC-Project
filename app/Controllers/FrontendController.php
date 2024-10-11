<?php
namespace App\Controllers;

use App\Models\Pages;

class FrontendController extends BaseController {


    public function index(): void {
        require_once __DIR__ . '/../views/home.php';
    }

    public function home(): void {
        echo "Welcome to the homepage!";
    }
    public function getPages($id): void {
        $pageData = $this->page->getPageById($id); // Fetch the page data
        if ($pageData) {
            $this->render('page', $pageData); // Render the view with the page data
        } else {
            // If no page is found, handle the 404 or other fallback routes
            $this->handleOtherRoutes($slug);
        }
    }

    public function login(): void {
        require_once __DIR__ . '/../views/Dashboard/login.php';
    }
    public function location(): void {
        require_once __DIR__ . '/../views/location.php';
    }

    public function about(): void {
        require_once __DIR__ . '/../views/about.php';
    }
    public function contact(): void {
        echo "This is the Contact page."; // Corrected from "This is the About page."
    }
    public function notfound(): void {
        require_once __DIR__ . '/../views/404.php'; // Corrected from "This is the About page."
    }

     // Fallback to other routes if no page is found
     private function handleOtherRoutes($slug) {
        $routes = getRoutes();

        // Check if the slug matches any other route (like /about or /home)
        if (array_key_exists($slug, $routes)) {
            list($controller, $method) = $routes[$slug];
            $controllerInstance = new $controller();
            call_user_func([$controllerInstance, $method]);
        } else {
            echo "404 - Page Not Found"; // Handle not found case
        }
    }

   
}
