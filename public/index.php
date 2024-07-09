<?php
//démarre session si pas de session
   if (session_status() === PHP_SESSION_NONE) {
    session_start();
    }
    
    require_once __DIR__ . '/../config/config.php';
    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../controllers/FrontController.php';
    require_once __DIR__ . '/../controllers/UserController.php';
    require_once __DIR__ . '/../controllers/AuthController.php';
    require_once __DIR__ . '/../controllers/BookingController.php';
    require_once __DIR__ . '/../controllers/PostController.php';
    require_once __DIR__ . '/../controllers/HourController.php';
    require_once __DIR__ . '/../controllers/ServiceController.php';
    require_once __DIR__ . '/../config/Database.php';
    require_once '../bootstrap.php'; // Inclut la configuration Twig

    // Création de l'instance de Twig
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../views');
    
    $twig = new \Twig\Environment($loader, [
        'cache' => __DIR__ . '/../cache',
        'debug' => true // Mettre en false en production
    ]);

    //global pour info session et recup CSS sous dossier twig
    $twig->addGlobal('BASE_URL', BASE_URL);
    $twig->addGlobal('session', $_SESSION);


    // Instance des contrôleurs
    $frontController = new FrontController($twig);
    $userController = new UserController($twig);
    $authController = new AuthController($twig);
    $bookingController = new BookingController($twig);
    $hourController = new HourController($twig);
    $postController = new PostController($twig);
    $serviceController = new ServiceController($twig);


    // Parsing de l'URL pour extraire l'identifiant du post si nécessaire
    $uri = $_SERVER['REQUEST_URI'];
    $uriParts = explode('?', $uri);
    $route = $uriParts[0];
    $queryString = $uriParts[1] ?? '';


    //fonction verif log
    function isLoggedIn() {
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
        $_SESSION['user_email'] = $user_email;
    }

    //fonction verif admin
    function isAdmin() {
        return isset($_SESSION['user_is_admin']) && $_SESSION['user_is_admin'] == 1;
    }


    switch ($route) {
      

        //Page accueil
        case '/':
            echo $twig->render('home.twig');
            break;

        //Page info contact
        case '/contact':
            echo $twig->render('contact.twig');
            break;

        //Page actualité (celle de base page 1)
        case '/actualites':
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $postController->showBlog($page);
            } else {
                http_response_code(405);
                render('405');
            }
            break;

        case '/services':
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $serviceController->publicListServices(); // Utilisation de la méthode pour afficher les services
            } else {
                http_response_code(405);
                render('405'); // Affichage d'une erreur 405 pour les autres méthodes HTTP
            }
            break;

        //Page actualites selon id page pour afficher les X articles selon la regle de 5
        case (preg_match('/\/actualites\/(\d+)/', $route, $matches) ? true : false):
            //capture valeur dans 1ere parentheses regex
            $page = $matches[1] ?? 1;
            $postController->showBlog($page);
            break;

        //Page formulaire réservation
        case '/booking':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $bookingController->create();
            } else {
                if (isLoggedIn()) {
                    $bookingController->showForm();
                } else {
                    header('Location: /login');
                    exit();
                }
            }
            break;
            
        //ADM BOOKINGS

        // Afficher la liste des réservations pour les admin
        case '/bookings/listbooking':
            // Vérification si l'utilisateur est connecté et est admin
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                // Redirige si l'utilisateur n'est pas connecté
                header('Location: /login');
                exit();
            } elseif (!isset($_SESSION['user_is_admin']) || $_SESSION['user_is_admin'] != 1) {
                echo $twig->render('/bookings/listbooking', ['message' => 'Vous devez être administrateur pour voir cette page.']);
            } else {
                // Afficher la liste des réservations pour les admins
                $bookingController->showBookings();
            }
            break;
        
        // supprimer booking selon id

        case (preg_match('/\/deleteBooking\/(\d+)/', $route, $matches) ? true : false):
            // Vérification si l'utilisateur est connecté et est admin
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                header('Location: /login');
                exit();
            } elseif (!isset($_SESSION['user_is_admin']) || $_SESSION['user_is_admin'] != 1) {
                echo $twig->render('listbooking.twig', ['message' => 'Vous devez être administrateur pour effectuer cette action.']);
            } else {
                //capture valeur dans 1ere parentheses regex
                $id = $matches[1];
                $bookingController->deleteBooking($id);
            }
            break;

        //edition d'un booking selon id

        case (preg_match('/\/editbooking\/(\d+)/', $route, $matches) ? true : false):
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
                header('Location: /login');
                exit();
            }
            
            // Verif valeur dans 1ere parentheses regex
            if (isset($matches[1])) {
                $bookingId = $matches[1];
                

                $bookingHtml = $bookingController->editBooking($bookingId);
                echo $bookingHtml; 
                
            } else {
                // Redirection si l'ID du booking n'est pas spécifié dans l'URL
                http_response_code(404);
                render('404');
                exit();
            }
            break;
        
            
        // sauvegarde edition booking selon id
     
        case (preg_match('/\/savebooking\/(\d+)/', $route, $matches) ? true : false):
            // Vérifie si la requête est de type POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                
                // Assurez-vous que $_POST contient l'ID de la réservation
                if (isset($_POST['id'])) {
                    $bookingId = $_POST['id'];                     
                    // Crée une instance du contrôleur de réservation avec Twig
                    $controller = new BookingController($twig);
                    // Appelle la méthode saveBooking du contrôleur avec les données POST
                    echo $controller->saveBooking($_POST);
                } else {
                    http_response_code(400);
                    render('400');
                }
            } else {
                http_response_code(405);
                render('405');
            }
            break;

        //ADM SERVICES
        
        // ilste service

        case '/services/listservice' === $route:
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                header('Location: /login');
                exit();
            } elseif (!isset($_SESSION['user_is_admin']) || $_SESSION['user_is_admin'] != 1) {
                echo $twig->render('services/listservice.twig', ['message' => 'Vous devez être administrateur pour voir cette page.']);
            } else {
                $serviceController->listServices();
            }
            break;
    
        // Créer un nouveau service
        case '/createservice' === $route:
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                header('Location: /login');
                exit();
            } elseif (!isset($_SESSION['user_is_admin']) || $_SESSION['user_is_admin'] != 1) {
                echo $twig->render('services/listservice.twig', ['message' => 'Vous devez être administrateur pour voir cette page.']);
            } else {
                $serviceController->createService();
            }
            break;
    
         
        // sauvegarde edition service

        case (preg_match('/\/saveservice\/(\d+)/', $route, $matches) ? true : false):
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['id'])) {
                    $serviceId = $_POST['id'];
                    $serviceController->saveService($_POST);
                } else {
                    http_response_code(400);
                    echo $twig->render('400.twig'); 
                }
            } else {
                http_response_code(405);
                echo $twig->render('405.twig'); 
            }
            break;
    
        // Modifier un service
        case (preg_match('/\/editservice\/(\d+)/', $route, $matches) ? true : false):
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                header('Location: /login');
                exit();
            }
    
            if (isset($matches[1])) {
                $serviceId = $matches[1];
                $serviceController->editService($serviceId); 
            } else {
                http_response_code(404);
                echo $twig->render('404.twig'); 
                exit();
            }
            break;
    
        // Supprimer un service
        case (preg_match('/\/deleteservice\/(\d+)/', $route, $matches) ? true : false):
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                header('Location: /login');
                exit();
            } elseif (!isset($_SESSION['user_is_admin']) || $_SESSION['user_is_admin'] != 1) {
                echo $twig->render('services/listservice.twig', ['message' => 'Vous devez être administrateur pour effectuer cette action.']);
            } else {
                $id = $matches[1];
                $serviceController->deleteService($id);
            }
            break;

        //FIN SERVICES

        //ADM USERS

        //Fonction listing user

        case '/users/listuser':
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                header('Location: /login');
                exit();
            } elseif (!isset($_SESSION['user_is_admin']) || $_SESSION['user_is_admin'] != 1) {
                echo $twig->render('users/listuser', ['message' => 'Vous devez être administrateur pour voir cette page.']);
            } else {
                
                
                $userController->showUsers();
            }
            break;

            
    
        // Route pour modifier un utilisateur
        case (preg_match('/\/edituser\/(\d+)/', $route, $matches) ? true : false):
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                header('Location: /login');
                exit();
            }
            // verif capture valeur dans 1ere parentheses regex
            if (isset($matches[1])) {
                $userId = $matches[1];
                
                echo $userController->editUser($userId);
            } else {
                http_response_code(404);
                render('404');
                exit();
            }
            break;
    
        // Route pour supprimer un utilisateur
        case (preg_match('/\/deleteuser\/(\d+)/', $route, $matches) ? true : false):
            if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                header('Location: /login');
                exit();
            } elseif (!isset($_SESSION['user_is_admin']) || $_SESSION['user_is_admin'] != 1) {
                echo $twig->render('/users/listuser.twig', ['message' => 'Vous devez être administrateur pour effectuer cette action.']);
            } else {
                //capture valeur dans 1ere parentheses regex
                $id = $matches[1];
                
                $userController->deleteUser($id);
            }
            break;
    
        // Route pour enregistrer les modifications d'un utilisateur
        case (preg_match('/\/saveuser\/(\d+)/', $route, $matches) ? true : false):
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['id'])) {
                    $userId = $_POST['id'];
                    echo $userController->saveUser($_POST);
                } else {
                    http_response_code(400);
                    render('400');
                }
            } else {
                http_response_code(405);
                    render('405');
            }
            break;
    
            //FIN ADM USERS

            // DEB ADM HOUR

            //Fonction lecture heures pour liste

            case '/hours/listhour':
                if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                    header('Location: /login');
                    exit();
                } elseif (!isset($_SESSION['user_is_admin']) || $_SESSION['user_is_admin'] != 1) {
                    echo $twig->render('hours/listhour.twig', ['message' => 'Vous devez être administrateur pour voir cette page.']);
                } else {
                    $hourController->showHours();
                }
                break;
        
            //Fonction recuperation pour edition heures selon le hour ID selectionné

            case (preg_match('/\/edithour\/(\d+)/', $route, $matches) ? true : false):
                if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
                    header('Location: /login');
                    exit();
                }
                // verif capture valeur dans 1ere parentheses regex
                if (isset($matches[1])) {
                    $hourId = $matches[1];
                    echo $hourController->editHour($hourId);
                } else {
                    http_response_code(404);
                    render('404');
                    exit();
                }
                break;
        
            //Fonction sauvagegarde heures selon le hour ID selectionné
            case (preg_match('/\/savehour\/(\d+)/', $route, $matches) ? true : false):
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['id'])) {
                        $hourId = $_POST['id'];
                        echo $hourController->saveHour($_POST);
                    } else {
                    http_response_code(400);
                    render('400');
                    }
                } else {
                    http_response_code(405);
                    render('405');
                }
                break;
        
            //FIN ADM HOUR

            //DEB ADM ACTUALITES

            //Fonction lectures des post
            case '/posts/listpost':
                $postController = new PostController();
                $postController->showPosts();
                break;
            
            //Fonction edition d'un post selon le post ID selectionné
            case (preg_match('/\/posts\/editpost\/?(\d+)?/', $route, $matches) ? true : false):
                $postController = new PostController();
                // verif capture valeur dans 1ere parentheses regex
                $postId = $matches[1] ?? null;
                echo $postController->editPost($postId);
                break;
            
            //Fonction sauvegarde modif post
            case '/posts/savepost':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $postController = new PostController();
                    echo $postController->savePost($_POST);
                } else {
                    http_response_code(405);
                    render('405');
                }
                break;
            
            //Fonction suppresion post selon le post ID selectionné
            case (preg_match('/\/posts\/deletepost\/(\d+)/', $route, $matches) ? true : false):
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $postController = new PostController();
                    //verif capture valeur dans 1ere parentheses regex
                    $postId = $matches[1];
                    echo $postController->deletePost($postId);
                } else {
                    http_response_code(405);
                    render('405');
                }
                break;

            //FIN ADM ACTUALITES

        //Fonction enregistrement
        case '/register':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $userController->register();
            } else {
                echo $twig->render('register.twig');
            }
            break;
        
        //Fonction connexion ajout donnée session
        case '/login':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $authController->login($_POST['email'], $_POST['password']);
            } else {
                echo $twig->render('login.twig');
            }
            break;

        //Fonction deconnexion suppresion session
        case '/logout':
            $authController->logout();
            break;
        


        default:
            http_response_code(404);
            render('404');
    }
?>