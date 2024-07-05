<?php
<<<<<<< HEAD
=======
   if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
    
    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../controllers/FrontController.php';
    require_once __DIR__ . '/../controllers/UserController.php';
    require_once __DIR__ . '/../controllers/AuthController.php';
    require_once __DIR__ . '/../controllers/BookingController.php';
    require_once __DIR__ . '/../config/Database.php';
    require_once '../bootstrap.php'; // Inclut la configuration Twig

<<<<<<< HEAD
   // Démarrage de la session
    session_start();

=======
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
    // Création de l'instance de Twig
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../views');
    $twig = new \Twig\Environment($loader, [
        'cache' => __DIR__ . '/../cache',
        'debug' => true // Mettre en false en production
    ]);
    $twig->addGlobal('session', $_SESSION);


    // Instance des contrôleurs
    $frontController = new FrontController($twig);
    $userController = new UserController($twig);
<<<<<<< HEAD

=======
    $authController = new AuthController($twig);
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
    $bookingController = new BookingController($twig);


   // $bookingController = new BookingController($twig, new BookingModel());


    // Parsing de l'URL pour extraire l'identifiant du post si nécessaire
    $uri = $_SERVER['REQUEST_URI'];
    $uriParts = explode('?', $uri);
    $route = $uriParts[0];
    $queryString = $uriParts[1] ?? '';

<<<<<<< HEAD
=======
    function isLoggedIn() {
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }

    function isAdmin() {
        return isset($_SESSION['user_is_admin']) && $_SESSION['user_is_admin'] == 1;
    }
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6


    switch ($route) {
      

        case '/':
<<<<<<< HEAD
            $lastPosts = $frontController->getLastPosts();
            echo $twig->render('home.twig', ['posts' => $lastPosts]);
=======
            echo $twig->render('home.twig');
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
            break;

        case '/contact':
            echo $twig->render('contact.twig');
            break;

        case '/actualites':
            $posts = $frontController->getAllPosts();
            echo $twig->render('blog.twig', ['posts' => $posts]);
            break;

        case '/booking':
<<<<<<< HEAD
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $bookingController->create();
            } else {
                echo $twig->render('booking.twig');
            }
=======
            //verif log
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                // Redirige l'utilisateur n'est pas connecté
                header('Location: /login');
                exit();
            }
            elseif (!isset($_SESSION['user_is_admin']) || $_SESSION['user_is_admin'] != 1) {
                $bookingController->create();
            }
            else {
                // Affichez les réservations existantes (gestion adm via condition twig)
                header('Location: booking/listbooking');
            }
            break;

        case 'bookings/listbooking':
            // Vérification si l'utilisateur est connecté et est admin
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                // Redirige si l'utilisateur n'est pas connecté
                header('Location: /login');
                exit();
            } elseif (!isset($_SESSION['user_is_admin']) || $_SESSION['user_is_admin'] != 1) {
                echo $twig->render('bookings/listbooking', ['message' => 'Vous devez être administrateur pour voir cette page.']);
            } else {
                // Afficher la liste des réservations pour les admins
                $bookingController->showBookings();
            }
            break;

        case '/users':
            // Vérification si l'utilisateur est connecté et est admin
            if (!isLoggedIn()) {
                // Redirige si l'utilisateur n'est pas connecté
                header('Location: /login');
                exit();
            } elseif (!isAdmin()) {
                echo $twig->render('users.twig', ['message' => 'Vous devez être administrateur pour voir cette page.']);
            } else {
                // Afficher la liste des réservations pour les admins
                $user = $userController->readAllUser();
                echo $twig->render('users.twig', ['users' => $user]);
            }
            break;
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6

        case '/register':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $userController->register();
            } else {
                echo $twig->render('register.twig');
            }
            break;
        
        case '/login':
<<<<<<< HEAD
            echo $twig->render('login.twig');
            break;

=======
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $authController->login($_POST['email'], $_POST['password']);
            } else {
                echo $twig->render('login.twig');
            }
            break;

        case '/logout':
            $authController->logout();
            break;
        

>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6

        default:
            http_response_code(404);
            render('404');
    }
?>