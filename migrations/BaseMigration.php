<?php
// File: migrations/BaseMigration.php

namespace Migrations;

abstract class BaseMigration {
    // This method should contain the SQL query to create a table
    abstract public function up();

    // Optionally, you can define a 'down' method to drop the table
    public function down() {
        return "DROP TABLE IF EXISTS " . $this->getTableName();
    }

    // Each migration file should specify the table name
    abstract public function getTableName();
}
