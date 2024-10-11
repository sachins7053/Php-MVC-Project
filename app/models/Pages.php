<?php

namespace App\Models;
use App\Models\Database;
use PDO;
class Pages {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }


    // Model properties and methods

    // Fetch all pages
    public function getPages() {
        $query = "SELECT * FROM pages where status= 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Fetch a specific page by ID
    public function getPageById($id) {
        $query = "SELECT * FROM pages WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Fetch a specific page by url
    public function getPageBySlug($slug) {
        $query = "SELECT * FROM pages WHERE slug = :slug";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':slug', $slug);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Delete a specific page by ID
    public function deletePageById($id) {
        $query = "DELETE FROM pages WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->rowCount(); // returns the number of affected rows
    }

    // Update a specific page by ID
    public function updatePageById($id, $title, $slug, $content, $short_desc, $status) {
          // Create a slug from the title
          $slug = $this->createSlug($title);
        $query = "UPDATE `pages` SET `title` = :title, `slug` = :slug, `content` = :content, `short_desc` = :short_desc, `status`= :stat WHERE `pages`.`id` = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);
        $stmt->bindParam(':content', $content, PDO::PARAM_STR);
        $stmt->bindParam(':short_desc', $short_desc, PDO::PARAM_STR);
        $stmt->bindParam(':stat', $status, PDO::PARAM_INT);
        $stmt->execute();
        // Return true if at least one row was updated, false otherwise
        return $stmt->rowCount() > 0;
    }


    public function AddNewPage($title, $content, $short_desc, $status) {
        
        // Create a slug from the title
        $slug = $this->createSlug($title);
        $query = "INSERT INTO `pages` (`title`, `slug`, `content`, `short_desc`, `status`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, ?, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $slug); // assuming slug is the same as title
        $stmt->bindParam(3, $content);
        $stmt->bindParam(4, $short_desc);
        $stmt->bindParam(5, $status);
       
        return $stmt->execute();
    }

    protected function createSlug($string) {
        // Convert to lowercase
        $slug = strtolower(trim($string));
        
        // Replace spaces with hyphens
        $slug = preg_replace('/[\s-]+/', '-', $slug);
        
        // Remove special characters
        $slug = preg_replace('/[^a-z0-9-]/', '', $slug);
        
        return $slug;
    }
}
