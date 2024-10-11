<?php

namespace App\Controllers;

use App\Models\Service;

class ServiceController {

    public function index() {
        $serviceModel = new Service();
        $services = $serviceModel->getAllServices();

        // Pass services data to view
        require_once __DIR__ . '/../views/services.php';
    }

    public function show($id) {
        // Assuming you have a Service model for database interactions
        // You might want to validate the ID, check if it's numeric, etc.
        if (!is_numeric($id)) {
            echo "Error: Invalid service ID.";
            return;
        }

        // Fetch the service from the database (using a hypothetical Service model)
        $service = $this->getServiceById($id);

        // Check if the service exists
        if (!$service) {
            echo "Error: Service not found.";
            return;
        }

        // Render the service details (you can customize this part)
        $this->renderService($service);
    }

    private function getServiceById($id) {
        // Placeholder for database access logic
        // Assuming you have a Service model or a database query method
        // Replace this with your actual database query
        $services = [
            1 => ['name' => 'IGST', 'description' => 'Professional accounting services.'],
            2 => ['name' => 'SGST', 'description' => 'Expert accounting services.'],
            3 => ['name' => 'CGST', 'description' => 'Expert accouting services.'],
            // Add more services here...
        ];

        return isset($services[$id]) ? $services[$id] : null;
    }

    private function renderService($service) {
        // Display the service details
        echo "<h1>" . htmlspecialchars($service['name']) . "</h1>";
        echo "<p>" . htmlspecialchars($service['description']) . "</p>";
    }

    /*
    public function show($id) {
        if (!isset($_GET['id'])) {
            echo "Service not found";
            return;
        }

       
        echo  $id;

       // $serviceModel = new Service();
       // $service = $serviceModel->getServiceById($serviceId);

        // Pass single service data to view
       // require_once __DIR__ . '/../views/serviceDetail.php';
    }
       */
}
