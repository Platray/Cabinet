<?php

require_once __DIR__ . '/../config/Database.php';

class BookingModel {
    private $conn;
    private $table = 'booking';
    private $table_open = 'open';
    private $table_services = 'services';
    
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    //fonction liste booking en récupérant les services associés selon le service_id en lien avec la table service_id (on affichera le titre du service lié à l'id)
     public function getBookings() {
         $query = "
             SELECT booking.*, services.title AS service_title
             FROM " . $this->table . " AS booking
             LEFT JOIN " . $this->table_services . " AS services ON booking.service_id = services.service_id
         ";
         $stmt = $this->conn->prepare($query);
         $stmt->execute();
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
     }

    //fonction recup booking selon id
    public function getBookingById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //fonction booking update selon id
    public function updateBooking($id, $mail, $date, $time, $isConfirm) {
        $query = "UPDATE " . $this->table . " SET book_email = :mail, date_book = :date, isConfirm = :isConfirm WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':mail', $mail);
        $dateTime = date('Y-m-d H:i:s', strtotime("$date $time"));
        $stmt->bindParam(':date', $dateTime);
        $stmt->bindParam(':isConfirm', $isConfirm);
        return $stmt->execute();
    }

    //fonction supprimer booking selon id
    public function deleteBooking($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    //fonction verif dispo sur la journée selon le service et le datetime
    public function checkAvailability($serviceId, $dateTime) {
        $sql = "SELECT COUNT(*) AS count FROM bookings WHERE service_id = :service_id AND date_book = :date_book";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':service_id', $serviceId, PDO::PARAM_INT);
        $stmt->bindParam(':date_book', $dateTime);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] == 0;
    }

    //fonction recup id service selon son titre
    public function getServiceId($serviceTitle) {
        $sql = "SELECT service_id FROM services WHERE title = :title";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $serviceTitle, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['service_id'] : null;
    }

    //fonction recup service selon le service_id lié à la table services
    public function getServices() {
        $stmt = $this->conn->prepare("SELECT service_id AS id, title FROM services");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    //fonction recuperer les jours ouverts pour booking
    public function getOpenDays() {
        $sql = "SELECT day, isOpen FROM open";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //fonction recuperer si oui ou non le jour selectionné est ouvert (lors de resa)
    public function isDayOpen($day) {
        $sql = "SELECT isOpen FROM open WHERE day = :day";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':day', $day, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result && $result['isOpen'] == 1;
    }

    //fonction recuperer si il y a deja une resa (verif pour pas de doublon)
    public function isBookingExists($date_book, $service_id) {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM booking WHERE date_book = :date_book AND service_id = :service_id");
        $stmt->bindParam(':date_book', $date_book);
        $stmt->bindParam(':service_id', $service_id);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }

    //fonction creation de la resa
    public function createBooking($service_id, $user_email, $date_book) {
        $stmt = $this->conn->prepare("INSERT INTO booking (service_id, book_email, date_book, isConfirm) VALUES (:service_id, :book_email, :date_book, 0)");
        $stmt->bindParam(':service_id', $service_id);
        $stmt->bindParam(':book_email', $user_email);
        $stmt->bindParam(':date_book', $date_book);
        if (!$stmt->execute()) {
            throw new Exception('Erreur lors de la création de la réservation.');
        }
    }

    
}
?>
