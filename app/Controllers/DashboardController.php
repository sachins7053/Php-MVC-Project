<?php
namespace App\Controllers;
use App\Models\DashboardModel;
class DashboardController extends BaseController {

    private $Dashboard;

    public function __construct() {
        $this->dashboard = new DashboardModel(); // Initialize the model
    }


    public function index(): void {
        require_once __DIR__ . '/../views/Dashboard/dashboard.php';
    }
    
    public function register(): void {
        require_once __DIR__ . '/../views/Dashboard/register.php';
    }

    public function options() {
       $options =  $this->dashboard->getOptions();
       if($options){
            $this->render('Dashboard/setting', ['options' =>  $options]);

       }
    }



   
}
