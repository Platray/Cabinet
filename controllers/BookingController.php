<?php
require_once __DIR__ . '/../models/BookingModel.php';
//namespace App\Controller;

//use BookingModel;
use Twig\Environment;

class BookingController {
    private $twig;
    private $bookingModel;
    
    //public function __construct(Environment $twig, BookingModel $bookingModel) {
    public function __construct(Environment $twig) {
        
        global $twig;
        $this->twig = $twig;
        $this->bookingModel = new BookingModel();
    }

    public function showForm() {
        echo $this->twig->render('booking.twig');
    }

    public function create() {
        $postData = $_POST;

        $result = $this->bookingModel->createBooking($postData);

        if ($result['success']) {
            echo $this->twig->render('home.twig', ['message' => 'Réservation effectuée avec succès!']);
            
        } else {
            // Afficher le formulaire avec un message d'erreur
            echo $this->twig->render('booking.twig', ['error_message' => 'Erreur : test existant ' . $result['message']]);
        }
    }
}

// // Debug: Afficher les données reçues
// var_dump($postData);
// die(); // Arrêter l'exécution pour vérifier les données




// public function createBooking() {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $date = $_POST['date'];
    //         $hour = $_POST['hour'];

    //         // Combinaison de la date et de l'heure pour le champ booking_hour
    //         $datetime = $date . ' ' . $hour;

    //         if ($this->bookingModel->createBooking($date, $datetime)) {
    //             echo 'Réservation réussie!';
    //         } else {
    //             echo 'Erreur lors de la réservation.';
    //         }
    //     }
    // }
?>

