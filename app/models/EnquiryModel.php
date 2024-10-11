<?php

namespace App\Models;

use App\Models\Database;
use PDO;
class EnquiryModel {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    // Model properties and methods

     // Fetch all Enquiries
     public function getEnquiry() {
        $query = "SELECT * FROM enquiries";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function InsertEnquiry($name, $email, $num, $enquiry){
        $query = "INSERT INTO `enquiries` (`name`, `email`, `number`, `enquiry`) VALUES (:username, :email, :num, :enquiry)";
        $stmt = $this->db->prepare($query);


        $stmt->bindParam(':username', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':num', $num, PDO::PARAM_INT);
        $stmt->bindParam(':enquiry', $enquiry, PDO::PARAM_STR);
        return $stmt->execute();
    }

}
