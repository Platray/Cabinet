<?php
    
    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../controllers/FrontController.php';
    require_once __DIR__ . '/../controllers/UserController.php';
    require_once __DIR__ . '/../controllers/AuthController.php';
    require_once __DIR__ . '/../controllers/BookingController.php';
    require_once __DIR__ . '/../config/Database.php';
    require_once '../bootstrap.php'; // Inclut la configuration Twig

   // Démarrage de la session
    session_start();

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

    $bookingController = new BookingController($twig);


   // $bookingController = new BookingController($twig, new BookingModel());


    // Parsing de l'URL pour extraire l'identifiant du post si nécessaire
    $uri = $_SERVER['REQUEST_URI'];
    $uriParts = explode('?', $uri);
    $route = $uriParts[0];
    $queryString = $uriParts[1] ?? '';



    switch ($route) {
      

        case '/':
            $lastPosts = $frontController->getLastPosts();
            echo $twig->render('home.twig', ['posts' => $lastPosts]);
            break;

        case '/contact':
            echo $twig->render('contact.twig');
            break;

        case '/actualites':
            $posts = $frontController->getAllPosts();
            echo $twig->render('blog.twig', ['posts' => $posts]);
            break;

        case '/booking':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $bookingController->create();
            } else {
                echo $twig->render('booking.twig');
            }

        case '/register':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $userController->register();
            } else {
                echo $twig->render('register.twig');
            }
            break;
        
        case '/login':
            echo $twig->render('login.twig');
            break;


        default:
            http_response_code(404);
            render('404');
    }
?>