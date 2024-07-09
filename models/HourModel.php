<?php
require_once __DIR__ . '/../config/Database.php';

class HourModel
{
    private $conn;
    private $table = 'open';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //fonction recuperer les heures
    public function getHours() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //fonction recuperer les heures selon l'id (la journée donc)
    public function getHourById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //fonction modif des horaire d'une journée précise
    public function updateHour($id, $open, $close, $isOpen) {
        $query = "UPDATE " . $this->table . " SET open = :open, close = :close, isOpen = :isOpen WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':open', $open);
        $stmt->bindParam(':close', $close);
        $stmt->bindParam(':isOpen', $isOpen);
    
        var_dump($query);
    
        $result = $stmt->execute();
        var_dump($result);
    
        return $result;
    }
    
}
?>
