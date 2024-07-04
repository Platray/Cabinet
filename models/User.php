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

     public function getUserByEmail($email) {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}