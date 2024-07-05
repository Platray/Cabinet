<?php

//namespace App\Model;

require_once __DIR__ . '/../config/Database.php';


class BookingModel {
    private $conn;
    private $table = 'booking';
    private $table_open = 'open';
    
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    public function getBookings() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBookingById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function confirmBooking($id) {
        $query = "UPDATE " . $this->table . " SET isConfirmed = 1 WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function updateBooking($id, $data) {
        $query = "UPDATE " . $this->table . " SET service_id = :service_id, booking_date = :booking_date WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':service_id', $data['service_id']);
        $stmt->bindParam(':booking_date', $data['booking_date']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function deleteBooking($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function createBooking($postData) {
        // Extraire les données du formulaire
        $date = $postData['date'];
        $hour = $postData['hour'];
        $email = $postData['email'];
        $lastname = $postData['lastname'];
        $firstname = $postData['firstname'];
        $birthday = $postData['birthday'];

        // Vérifier les heures d'ouverture et autres conditions
        $dayOfWeek = date('l', strtotime($date));
        $timeOfBooking = date('H:i:s', strtotime($hour));

        // Requête pour vérifier les heures d'ouverture
        $stmt = $this->conn->prepare('
            SELECT open.open, open.close, open.isOpen 
            FROM ' . $this->table_open . ' AS open
            WHERE open.day = :dayOfWeek
        ');
        $stmt->execute([':dayOfWeek' => $dayOfWeek]);
        $openHours = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$openHours || !$openHours['isOpen']) {
            return ['success' => false, 'message' => 'Nous sommes fermés ce jour-là.'];
        }

        // Vérifier si l'heure de la réservation est dans les heures d'ouverture
        if ($timeOfBooking < $openHours['open'] || $timeOfBooking > $openHours['close']) {
            return ['success' => false, 'message' => 'La réservation doit être faite pendant les heures d\'ouverture.'];
        }

        // Vérifier s'il y a déjà une réservation à cette date et heure
        $stmt = $this->conn->prepare('
            SELECT * FROM ' . $this->table . ' AS booking
            WHERE booking.date = :date
              AND booking.hour = :hour
        ');
        $stmt->execute([':date' => $date, ':hour' => $hour]);
        $existingBooking = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingBooking) {
            return ['success' => false, 'message' => 'Il existe déjà une réservation à cette date et heure.'];
        }

        // Créer la réservation
        $stmt = $this->conn->prepare('
            INSERT INTO ' . $this->table . ' (lastname, firstname, birthday, email, date, hour)
            VALUES (:lastname, :firstname, :birthday, :email, :date, :hour)
        ');
        $stmt->execute([
            ':lastname' => $lastname,
            ':firstname' => $firstname,
            ':birthday' => $birthday,
            ':email' => $email,
            ':date' => $date,
            ':hour' => $hour
        ]);

        return ['success' => true];
    }
    

    
}
?>