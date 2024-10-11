<?php
// File: migrations/CreateUsersTable.php

namespace Migrations;

use App\Models\Database;

class CreateUsersTable extends BaseMigration {
    
    public function up() {
        $sql = "
            CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );
        ";
        $db = Database::getInstance()->getConnection();
        $db->exec($sql);
        echo "Table 'users' created successfully.\n";
    }

    public function getTableName() {
        return 'users';
    }
}
