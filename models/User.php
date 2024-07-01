<?php
require_once __DIR__ . '/../config/Database.php';
class User
{
    private $conn;
    private $table = 'user';

    public $firstname;
    public $lastname;
    public $email;
    public $birthday;
    public $isAdmin;

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

    
    // // Lire un seul post
    // public function readOne()
    // {
    //     $query = "SELECT id, user_id, title, content, updated_at FROM " . $this->table . " WHERE id = ?";
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->bindParam(1, $this->id);
    //     $stmt->execute();
    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //     $this->user_id = $row['user_id'];
    //     $this->title = $row['title'];
    //     $this->content = $row['content'];
    //     $this->updated_at = $row['updated_at'];
    // }

    // // Mettre à jour un post
    // public function update()
    // {
    //     $query = "UPDATE " . $this->table . " SET user_id = :user_id, title = :title, content = :content WHERE id = :id";
    //     $stmt = $this->conn->prepare($query);
    //     $this->user_id = htmlspecialchars(strip_tags($this->user_id));
    //     $this->title = htmlspecialchars(strip_tags($this->title));
    //     $this->content = htmlspecialchars(strip_tags($this->content));
    //     $this->id = htmlspecialchars(strip_tags($this->id));
    //     $stmt->bindParam(':user_id', $this->user_id);
    //     $stmt->bindParam(':title', $this->title);
    //     $stmt->bindParam(':content', $this->content);
    //     $stmt->bindParam(':id', $this->id);
    //     if ($stmt->execute()) {
    //         return true;
    //     }
    //     return false;
    // }
    // // Supprimer un post
    // public function delete()
    // {
    //     $query = "DELETE FROM " . $this->table . " WHERE id = :id";
    //     $stmt = $this->conn->prepare($query);
    //     $this->id = htmlspecialchars(strip_tags($this->id));
    //     $stmt->bindParam(':id', $this->id);
    //     if ($stmt->execute()) {
    //         return true;
    //     }
    //     return false;
    // }
}