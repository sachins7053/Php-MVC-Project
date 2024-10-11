<?php

namespace App\Models;

use PDO;
use PDOException;

class Database {
    private static $instance = null;
    private $connection;

    private $host = 'localhost';
    private $db_name = 'skrishnaandcompany';
    private $username = 'root';
    private $password = '';

    // Private constructor to prevent multiple instances
    private function __construct() {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
    }

    // Static method to get the singleton instance
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    // Method to get the connection
    public function getConnection() {
        return $this->connection;
    }
}
