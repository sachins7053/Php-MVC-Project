<?php

namespace App\Models;

class Service {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    // Fetch all services
    public function getAllServices() {
        $query = "SELECT * FROM services";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Fetch a specific service by ID
    public function getServiceById($id) {
        $query = "SELECT * FROM services WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
}
