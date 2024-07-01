<?php

//namespace App\Model;

require_once __DIR__ . '/../config/Database.php';


class BookingModel {
    private $conn;
    private $table ;
    
    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    
    // Méthodes pour gérer les réservations

    // public function createBooking($date, $hour) {
    //     $query = $this->conn->prepare("INSERT INTO booking (booking_date, booking_hour) VALUES (:date, :hour)");
    //     return $query->execute([':date' => $date, ':hour' => $hour]);
    // }

   

        public function createBooking($postData) {
            // Vérifiez la présence des clés attendues
            if (!isset($postData['date'], $postData['hour'], $postData['email'], $postData['lastname'], $postData['firstname'], $postData['birthday'])) {
                return ['success' => false, 'message' => 'Tous les champs sont requis.'];
            }
    
            $date = $postData['date'];
            $hour = $postData['hour'];
            $dateTime = $date . ' ' . $hour;
            $email = $postData['email'];
            $lastname = $postData['lastname'];
            $firstname = $postData['firstname'];
            $birthday = $postData['birthday'];
    
            // Vérifiez les heures d'ouverture
            $dayOfWeek = date('l', strtotime($dateTime));
            $timeOfBooking = date('H:i:s', strtotime($dateTime));
    
            $stmt = $this->conn->prepare('SELECT * FROM open WHERE day = :day');
            $stmt->execute([':day' => $dayOfWeek]);
            $openHours = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if (!$openHours) {
                return ['success' => false, 'message' => 'Nous sommes fermés ce jour-là.'];
            }
    
            if ($timeOfBooking < $openHours['open'] || $timeOfBooking > $openHours['close']) {
                return ['success' => false, 'message' => 'La réservation doit être faite pendant les heures d\'ouverture.'];
            }
    
            // Vérifiez si le patient existe déjà
            $stmt = $this->conn->prepare('SELECT * FROM user WHERE email = :email');
            $stmt->execute([':email' => $email]);
            $patient = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if (!$patient) {
                // Créez un nouveau patient
                $stmt = $this->conn->prepare('INSERT INTO patient (lastname, firstname, birthday, email) VALUES (:lastname, :firstname, :birthday, :email)');
                $stmt->execute([
                    ':lastname' => $lastname,
                    ':firstname' => $firstname,
                    ':birthday' => $birthday,
                    ':email' => $email
                ]);
                $patientId = $this->conn->lastInsertId();
            } else {
                $patientId = $patient['id'];
            }
    
            // Créez la réservation
            $stmt = $this->conn->prepare('INSERT INTO booking (id_book, date_book) VALUES (:id_book, :date_book)');
            $stmt->execute([
                ':id_book' => $patientId,
                ':date_book' => $dateTime
            ]);
    
            return ['success' => true];
        }



    public function getBookings() {
        $query = $this->conn->query("SELECT * FROM booking");
        return $query->fetchAll();
    }
}
?>