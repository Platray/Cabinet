<?php
require_once __DIR__ . '/../config/Database.php';
class User
{
    private $conn;
    private $table = 'user';

    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $birthday;
    public $isAdmin;
    public $createdAt;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    // Créer un utilisateur
    public function createUser($firstname, $lastname, $email, $birthday, $password, $isAdmin, $createdAt)
    {
        // Vérifiez si le patient existe déjà
        $stmt = $this->conn->prepare('SELECT * FROM user WHERE email = :email');
        $stmt->execute([':email' => $email]);
        $patient = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$patient) {
            // var_dump($firstname.''. $lastname.''.$email.''.$birthday.''.$isAdmin);
            // die();
            $query = "INSERT INTO " . $this->table . " (firstname, lastname, email, birthday, isAdmin, password, createdAt) VALUES (:firstname, :lastname, :email, :birthday,  :isAdmin, :password, :createdAt)";
            $stmt = $this->conn->prepare($query);
            $this->firstname = htmlspecialchars(strip_tags($firstname));
            $this->lastname = htmlspecialchars(strip_tags($lastname));
            $this->email = htmlspecialchars(strip_tags($email));
            $this->birthday = htmlspecialchars(strip_tags($birthday));
            $this->password = htmlspecialchars(strip_tags($password));
            $this->isAdmin = htmlspecialchars(strip_tags($isAdmin));
            $this->createdAt = htmlspecialchars(strip_tags($createdAt));

            
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':birthday', $birthday);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':isAdmin', $isAdmin);
            $stmt->bindParam(':createdAt', $createdAt);
            if ($stmt->execute()) {
                return true;
            
            return false;
            }
        }
    }

    // Lire tous les utilisateurs
     public function readUser()
     {
         $query = "SELECT id, firstname, lastname, email, updated_at FROM " . $this->table . " ORDER BY updated_at DESC";
         $stmt = $this->conn->prepare($query);
         $stmt->execute();
         return $stmt;
     }
    
     // recupere un utilisateur par son mail
     public function getUserByEmail($email) {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // recupere les données utilisateurs
    public function getUsers() {
        $query = "SELECT id, lastname, firstname, email, birthday, isAdmin FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // recupere un utilisateur par son id
    public function getUserById($id) {
        $query = "SELECT id, lastname, firstname, email, birthday, isAdmin FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // modifie un utilisateur (par son id)
    public function updateUser($id, $lastname, $firstname, $isAdmin) {
        $query = "UPDATE " . $this->table . " SET lastname = :lastname, firstname = :firstname, isAdmin = :isAdmin WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':isAdmin', $isAdmin);
        return $stmt->execute();
    }

    // supprime un utilisateur par son id
    public function deleteUser($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
}