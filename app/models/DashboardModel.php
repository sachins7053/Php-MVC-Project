<?php

namespace App\Models;

use App\Models\Database;
use PDO;

class Dashboard {

    private $db;
    
    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }


    // Model properties and methods
    public function getOptions() {
        $query = "SELECT * FROM options";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
        }
    }