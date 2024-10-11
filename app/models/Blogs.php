<?php

namespace App\Models;
use App\Models\Database;

class Posts {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    // Model properties and methods

    // Fetch all postss
    public function getPosts() {
        $query = "SELECT * FROM posts";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Fetch a specific post by ID
    public function getPostById($id) {
        $query = "SELECT * FROM posts WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Delete a specific post by ID
    public function deletePostById($id) {
        $query = "DELETE FROM posts WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->rowCount(); // returns the number of affected rows
    }

    // Update a specific post by ID
    public function updatePostById($id, $title, $slug, $content, $short_desc) {
        $query = "UPDATE `posts` SET `title` = :title, `slug` = :slug, `content` = :content, `short_desc` = :short_desc WHERE `pages`.`id` = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);
        $stmt->bindParam(':content', $content, PDO::PARAM_STR);
        $stmt->bindParam(':short_desc', $short_desc, PDO::PARAM_STR);
        $stmt->execute();
        // Return true if at least one row was updated, false otherwise
        return $stmt->rowCount() > 0;
    }

    // Add new Page 
    public function AddPost($title , $content, $short_desc) {
        $query = "INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `short_desc`, `created_at`, `updated_at`) VALUES (NULL, $title, $title, $content ,$short_desc , current_timestamp(), current_timestamp())";
        $stmt = $this->db->prepare($query);
        return $stmt->execute();
       // return $stmt->fetch();
    }

    public function AddNewPost($title, $content, $short_desc) {
        $query = "INSERT INTO `posts` (`title`, `slug`, `content`, `short_desc`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $title); // assuming slug is the same as title
        $stmt->bindParam(3, $content);
        $stmt->bindParam(4, $short_desc);
        return $stmt->execute();
       // return $stmt->fetch();
    }
}
