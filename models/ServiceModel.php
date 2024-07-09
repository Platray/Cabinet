<?php
require_once __DIR__ . '/../config/Database.php';

class ServiceModel {
    private $conn;
    private $table = 'services';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //recupere tous les services
    public function getAllServices() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //recupere un service par son ID
    public function getServiceById($service_id) {
        $query = "SELECT * FROM " . $this->table . " WHERE service_id = :service_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':service_id', $service_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //crée un service
    public function createService($title, $description) {
        $query = "INSERT INTO " . $this->table . " (title, description) VALUES (:title, :description)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    //Modifie un service (par son id)
    public function updateService($service_id, $title, $description) {
        $query = "UPDATE " . $this->table . " SET title = :title, description = :description WHERE service_id = :service_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':service_id', $service_id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    //supprime un service (par son id)
    public function deleteService($service_id) {
        $query = "DELETE FROM " . $this->table . " WHERE service_id = :service_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':service_id', $service_id);
        return $stmt->execute();
    }
}
?>
