<?php

namespace App\Models;

use App\Models\Database;

class BaseModel { 
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

}