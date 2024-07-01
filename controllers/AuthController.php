<?php
require_once __DIR__ . '/../views/Middleware/AuthMiddleware.php';


use Twig\Environment;
use Model\UserModel;

class AuthController {
    private $twig;
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
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        header('Location: /public/login');
        exit();
    }
}

?>