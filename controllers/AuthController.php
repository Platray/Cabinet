<?php
<<<<<<< HEAD
require_once __DIR__ . '/../views/Middleware/AuthMiddleware.php';

=======
require_once __DIR__ . '/../models/User.php';
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6

use Twig\Environment;
use Model\UserModel;

class AuthController {
    private $twig;
<<<<<<< HEAD
    private $userModel;

    public function __construct(Environment $twig, UserModel $userModel) {
        $this->twig = $twig;
        $this->userModel = $userModel;
    }

    public function register() {
        $is_logged_in = isset($_SESSION['user_id']);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            if ($password === $confirmPassword) {
                if ($this->userModel->createUser($username, $password)) {
                    header('Location: /public/login');
                    exit();
                } else {
                    echo $this->twig->render('register.twig', ['error' => 'Failed to create user', 'is_logged_in' => $is_logged_in]);
                }
            } else {
                echo $this->twig->render('register.twig', ['error' => 'Passwords do not match', 'is_logged_in' => $is_logged_in]);
            }
        } else {
            echo $this->twig->render('register.twig', ['is_logged_in' => $is_logged_in]);
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->getUserByUsername($username);
            var_dump($user); // Debug: Vérifier l'utilisateur récupéré
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['user_id'];
                header('Location: /public/booking');
                exit();
            } else {
                echo $this->twig->render('login.twig', ['error' => 'Invalid username or password']);
            }
        } else {
            echo $this->twig->render('login.twig');
=======
    private $user;

    public function __construct() {
        global $twig;
        $this->twig = $twig;
        $this->user = new User();

    }
    public function login($email, $password) {
        $user = $this->user->getUserByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            // Connexion réussie
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['logged_in'] = true;
            $_SESSION['user_is_admin'] = $user['isAdmin'];
            header('Location: /');  
        } else {
            // Échec de la connexion
            echo "Nom d'utilisateur ou mot de passe incorrect";
            echo $email, " ", $password;
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
        }
    }

    public function logout() {
<<<<<<< HEAD
        session_unset();
        session_destroy();
        header('Location: /public/login');
        exit();
    }
=======
        //déstruction de toutes les variables de session
        $_SESSION = array();

        //déstruction de la session complète, suppression cookie de session.
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // détruit la session.
        session_destroy();

        
        header('Location: /');
        exit;
    }
    
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
}

?>