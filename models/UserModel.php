<?php 

namespace Model;

class UserModel {
    // private $db;

    // public function __construct($db) {
    //     $this->db = $db;
    // }

    // public function createUser($username, $password) {
    //     $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    //     $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    //     $stmt->bindParam(':username', $username);
    //     $stmt->bindParam(':password', $hashedPassword);
    //     return $stmt->execute();
    // }

    // public function getUserByUsername($username) {
    //     $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :username");
    //     $stmt->bindParam(':username', $username);
    //     $stmt->execute();
    //     return $stmt->fetch(\PDO::FETCH_ASSOC);
    // }
}
?>