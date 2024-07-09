<?php
require_once __DIR__ . '/../models/User.php';

use Twig\Environment;
use Model\UserModel;

class AuthController {
    private $twig;
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
        }
    }

    public function logout() {
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
    
}

?>