<?php
require_once __DIR__ . '/../models/BookingModel.php';
use Twig\Environment;

class BookingController {
    private $twig;
    private $bookingModel;

    public function __construct(Environment $twig) {
        global $twig;
        $this->twig = $twig;
        $this->bookingModel = new BookingModel();
    }

    //fonction afficher pour formulaire
    public function showForm() {
        $services = $this->bookingModel->getServices();
        echo $this->twig->render('booking.twig', [
            'services' => $services,
        ]);
    }

    //fonction création
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $book_date = $_POST['book_date'];
            $service_id = $_POST['service_id'];
            $book_time = $_POST['book_time'];
            $user_email = $_SESSION['user_email'];
            
            // Combine date and time to form datetime
            $date_book = $book_date . ' ' . $book_time . ':00';
    
            // Get the day of the week from the selected date
            $date = new DateTime($book_date);
            $dayOfWeekNumber = $date->format('N'); // 1 for Monday, 2 for Tuesday, etc.
    
            // Convert day number to French day name
            switch ($dayOfWeekNumber) {
                case 1:
                    $dayOfWeek = 'lundi';
                    break;
                case 2:
                    $dayOfWeek = 'mardi';
                    break;
                case 3:
                    $dayOfWeek = 'mercredi';
                    break;
                case 4:
                    $dayOfWeek = 'jeudi';
                    break;
                case 5:
                    $dayOfWeek = 'vendredi';
                    break;
                case 6:
                    $dayOfWeek = 'samedi';
                    break;
                case 7:
                    $dayOfWeek = 'dimanche';
                    break;
                default:
                    $dayOfWeek = '';
                    break;
            }
    
            try {
                // Check if the selected day is open
                if (!$this->bookingModel->isDayOpen($dayOfWeek)) {
                    echo "<script>alert('Le jour sélectionné n\'est pas ouvert.');</script>";
                    $this->showForm();
                    return;
                }
    
                // Check if the time slot is available
                if ($this->bookingModel->isBookingExists($date_book, $service_id)) {
                    echo "<script>alert('Le créneau sélectionné est déjà réservé.');</script>";
                    $this->showForm();
                    return;
                }
    
                // Create the booking
                $this->bookingModel->createBooking($service_id, $user_email, $date_book);
    
                echo "<script>alert('Réservation créée avec succès.');</script>";
                $this->showForm();
            } catch (Exception $e) {
                echo "<script>alert('" . $e->getMessage() . "');</script>";
                $this->showForm();
            }
        }
    }

    //affichage adm
    public function showBookings() {
        $bookings = $this->bookingModel->getBookings();
        echo $this->twig->render('bookings/listbooking.twig', ['bookings' => $bookings]);
    }

    //affichage adm
    public function confirmBooking($id) {
        $this->bookingModel->confirmBooking($id);
        header('Location: /bookings/listbooking.twig');
        exit;
    }

    //fonction edition selon id selectionné
    public function editBooking($bookingId) {
        try {
            // Récupérer les détails de la réservation à éditer
            $booking = $this->bookingModel->getBookingById($bookingId);
    
            if (!$booking) {
                // Si la réservation n'est pas trouvée, retourner une page 404
                http_response_code(404);
                render('404');
                exit();
            }
    
            // Récupérer les informations supplémentaires nécessaires pour l'édition (services, etc.)
            $services = $this->bookingModel->getServices();
    
            // Rendre le template editbooking.twig avec les données récupérées
            return $this->twig->render('/bookings/editbooking.twig', [
                'booking' => $booking,
                'services' => $services,
            ]);
        } catch (Exception $e) {
            // En cas d'erreur, retourner une page d'erreur générale
            http_response_code(500);
            render('500');
            exit();
        }
    }

    //affichage adm
    //fonction sauvegarde modif
    public function saveBooking($postData) {
        $id = $postData['id'];
        $mail = $postData['mail'];
        $date = $postData['date'];
        $time = $postData['time'];
        $isConfirm = $postData['isConfirm'];

        $result = $this->bookingModel->updateBooking($id, $mail, $date, $time, $isConfirm);

        if ($result) {
            header('Location: /bookings/listbooking');
            exit;
        } else {
            header('Location: /bookings/listbooking');
            exit;
        }
    }

    //affichage adm
    public function deleteBooking($id) {
        $this->bookingModel->deleteBooking($id);
        header('Location: /bookings/listbooking');
        exit;
    }

   
    

}
?>
