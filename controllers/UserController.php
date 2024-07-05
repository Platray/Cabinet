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

    public function readAllUser(){
        return $this->userModel->readUser();
    }

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
            echo $this->twig->render('register.twig', ['error_message' => 'Erreur : Mail existant ' ]);
        }
    }
    
}
?>