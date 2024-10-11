<?php
namespace App\Controllers;

use App\Models\Pages;

class PageController extends BaseController {

    private $page;

    public function __construct() {
        $this->page = new Pages(); // Initialize the model
    }

    
    public function getPages($id): void {
        $pageData = $this->page->getPageBySlug($id); 
        if ($pageData) {
            $this->render('page', $pageData); 
        } else {
            // If no page is found, handle the 404 or other fallback routes
            $this->handleOtherRoutes($id);
        }
    }
    public function Deletepage($id): void {
        $pageData = $this->page->deletePageById($id); 
        if ($pageData > 0) {
            $this->redirectBack(); // Render the view with the page data
        }
    }

    public function Allpages():void{ 
        $pageData = $this->page->getPages();
        $this->render('Dashboard/pages', ['pageData' => $pageData]);
    }

    public function Addpage():void{
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $desc = $_POST['description'];
            $short_desc = $_POST['short_desc'];
            $stat = $_POST['status'];

           $query =  $this->page->AddNewPage($title, $desc, $short_desc, $stat);
           if ($query) {
            header('Location: /skrishna/admin/all-pages');
           }

        } else{
        
        $pageData = ['title', 'desc', 'short_desc','status','created_at'];
        $this->render('Dashboard/add-page', ['pageData' => $pageData]);}
    }

    public function Editpage($id):void{
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $slug = $_POST['slug'];
            $desc = $_POST['description'];
            $short_desc = $_POST['short_desc'];
            $status = $_POST['status'];

           $query =  $this->page->updatePageById($id, $title, $slug, $desc, $short_desc, $status);
           if ($query) {
            header('Location: /skrishna/admin/all-pages');
           }

        } else{
           $pageData =  $this->page->getPageById($id);
           if ($pageData) {
            $this->render('Dashboard/edit-page', ['pageData' => $pageData]);
           } 
        }   
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
