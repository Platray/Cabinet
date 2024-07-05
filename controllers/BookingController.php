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

    public function showBookings() {
        $bookings = $this->bookingModel->getBookings();
        echo $this->twig->render('booking/listbooking.twig', ['bookings' => $bookings]);
    }

    public function confirmBooking($id) {
        $this->bookingModel->confirmBooking($id);
        header('Location: /bookings');
        exit;
    }

    public function editBooking($id) {
        $booking = $this->bookingModel->getBookingById($id);
        echo $this->twig->render('bookings/edit.html.twig', ['booking' => $booking]);
    }

    public function updateBooking($id, $data) {
        $this->bookingModel->updateBooking($id, $data);
        header('Location: /bookings');
        exit;
    }

    public function deleteBooking($id) {
        $this->bookingModel->deleteBooking($id);
        header('Location: /bookings');
        exit;
    }

    public function showBookingsAdm() {
        if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
            header('Location: /login');
            exit();
        }

        $bookings = $this->bookingModel->getBookings();
        echo $this->twig->render('bookings.twig', [
            'bookings' => $bookings,
            'logged_in' => $_SESSION['logged_in'],
            'user_name' => $_SESSION['user_name']
        ]);
    }
    public function create() {
        // Vérifier si les données du formulaire sont présentes
        if (isset($_POST['date'], $_POST['hour'], $_POST['email'], $_POST['lastname'], $_POST['firstname'], $_POST['birthday'])) {
            $postData = [
                'date' => $_POST['date'],
                'hour' => $_POST['hour'],
                'email' => $_POST['email'],
                'lastname' => $_POST['lastname'],
                'firstname' => $_POST['firstname'],
                'birthday' => $_POST['birthday']
            ];

            // Appeler la méthode createBooking() du modèle BookingModel
            $result = $this->bookingModel->createBooking($postData);

            if ($result['success']) {
                // Redirection vers une page de succès ou vers la liste des réservations
                header('Location: /bookings');
                exit();
            } else {
                // Gérer les erreurs si la création de la réservation échoue
                echo "Erreur lors de la création de la réservation : " . $result['message'];
            }
        } else {
            // Gérer le cas où des données requises sont manquantes
            echo "Tous les champs sont requis.";
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

