<?php
 require_once __DIR__ . '/../models/User.php';
class UserController {
    private $twig;
    private $userModel;
    
    public function __construct()
    {
        global $twig;
        $this->twig = $twig;
        $this->userModel = new User();
    }
<<<<<<< HEAD
=======

    public function readAllUser(){
        return $this->userModel->readUser();
    }

>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
    //traintement de l'inscription
    public function register()
    {
        $firstname = htmlspecialchars(strip_tags(trim($_POST['firstname'])));
        $lastname = htmlspecialchars(strip_tags(trim($_POST['lastname'])));
        $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
        $birthday = htmlspecialchars(strip_tags(trim($_POST['birthday'])));
        $password = htmlspecialchars(strip_tags(trim($_POST['password'])));
        $isAdmin = isset($_POST['isAdmin']) ? 1 : 0;
        
        $createdAt = date('Y-m-d H:i:s');

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        if ($this->userModel->createUser($firstname, $lastname, $email, $birthday, $hashedPassword, $isAdmin, $createdAt)) {
            header('Location: /');
            exit;
        }  else {
            // Afficher le formulaire avec un message d'erreur
<<<<<<< HEAD
            echo $this->twig->render('register.twig', ['error_message' => 'Erreur : Mail existant ' . $result['message']]);
        }
    }
    // public function login()
    // {
    //     $users = $this->userModel->readOne($username);
    //     foreach ($users as $user) {
    //         if ($user['username'] === $username && password_verify($password, $user['password'])) {
    //             $_SESSION['user_id'] = $user['id'];
    //             $_SESSION['is_admin'] = $user['is_admin'];
    //             echo $this->twig->render('dashboard.twig', [
    //                 'session' => $_SESSION
    //             ]);
    //             exit;
    //         }
    //     }
    // }
=======
            echo $this->twig->render('register.twig', ['error_message' => 'Erreur : Mail existant ' ]);
        }
    }
    
>>>>>>> 9c9846b346baadfaf03dffd98fb72f22692600f6
}
?>