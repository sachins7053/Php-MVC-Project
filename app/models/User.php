<?php

namespace App\Models;

use App\Models\Database;
use PDO;

class User {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    // Model properties and methods


    // Fetch all users
    public function getUsers() {
        $query = "SELECT * FROM users";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Fetch a specific service by ID
    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Delete a specific page by ID
    public function deleteUserById($id) {
        $query = "DELETE FROM Users WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->rowCount(); // returns the number of affected rows
    }

    // Update a specific user by ID
        public function updateUserById($id, $username, $email, $password) {
            $query = "UPDATE `users` SET `username` = :username, `email` = :email, `password` = :password WHERE `id` = :id";
            $stmt = $this->db->prepare($query);

            // Hash the password before storing it
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Bind parameters
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

            // Execute the statement
            $stmt->execute();

            // Return true if at least one row was updated, false otherwise
            return $stmt->rowCount() > 0;
        }


    public function AddNewUser($user, $email, $pass) {



        $query = "INSERT INTO `users` (`username`, `email`, `password`) VALUES (:username, :email, :hashedpass)";
        $stmt = $this->db->prepare($query);

        // Hash the password
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

        $stmt->bindParam(':username', $user, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':hashedpass', $hashedPassword, PDO::PARAM_STR);
        return $stmt->execute();

       
    }

    // Check if user exists and verify password for login
    public function login($email, $password) {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
