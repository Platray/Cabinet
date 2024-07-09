<?php
require_once __DIR__ . '/../config/Database.php';

class PostModel {
    private $conn;
    private $table = 'blog';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //fonction recuperer les articles
    public function getPosts() {
        $query = "SELECT id, title, updated_at FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //fonction recuperer un article selon id
    public function getPostById($id) {
        $query = "SELECT id, title, content, image FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //fonction créer article
    public function createPost($title, $content, $image, $userId, $updatedAt) {
        $query = "INSERT INTO " . $this->table . " (title, content, image, user_id, updated_at) VALUES (:title, :content, :image, :user_id, :updated_at)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        
        // Vérif si $image null ou non 
        if ($image !== null) {
            $stmt->bindParam(':image', $image);
        } else {
            // Utilisation valeur NULL si image NULL
            $stmt->bindValue(':image', null, PDO::PARAM_NULL);
        }
        
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':updated_at', $updatedAt);
    
        return $stmt->execute();
    }
    
    
    //fonction modif article
    public function updatePost($id, $title, $content, $image) {
        $query = "UPDATE " . $this->table . " SET title = :title, content = :content, image = :image WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image', $image);
        return $stmt->execute();
    }
    //fonction suppression article selon id
    public function deletePost($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    
    // Méthode pour compter le nombre total d'articles
    public function countArticles() {
        $query = "SELECT COUNT(*) as total FROM {$this->table}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row['total'];
    }

    // Méthode pour récupérer les articles paginés
    public function getArticlesPaginated($offset, $limit = 5) {
        // Requête SQL pour récupérer les articles paginés
        $query = "SELECT id, title, content, image FROM {$this->table} LIMIT :limit OFFSET :offset";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
    
        // Récupération des résultats
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getServiceById($serviceId) {
        $query = "SELECT * FROM services WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $serviceId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // Méthode pour réserver un rendez-vous
    public function bookAppointment($serviceId, $dayId, $time) {
        $query = "INSERT INTO appointments (service_id, day_id, time) VALUES (:service_id, :day_id, :time)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':service_id', $serviceId);
        $stmt->bindParam(':day_id', $dayId);
        $stmt->bindParam(':time', $time);
        return $stmt->execute();
    }

}
