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
    
    public function showUsers() {
        $users = $this->userModel->getUsers();
        echo $this->twig->render('users/listuser.twig', ['users' => $users]);
    }
    
    

    public function editUser($id) {
        if (!$id || !is_numeric($id)) {
            http_response_code(404);
            echo $this->twig->render('404.twig');
            exit();
        }

        $user = $this->userModel->getUserById($id);

        if (!$user) {
            http_response_code(404);
            echo $this->twig->render('404.twig');
            exit();
        }

        return $this->twig->render('users/edituser.twig', [
            'user' => $user
        ]);
    }

    public function saveUser($postData) {
        $id = $postData['id'];
        $lastname = $postData['lastname'];
        $firstname = $postData['firstname'];
        $isAdmin = isset($_POST['isAdmin']) ? 1 : 0;
        
        $result = $this->userModel->updateUser($id, $lastname, $firstname, $isAdmin);

        if ($result) {
            header('Location: /users/listuser');
            exit;
        } else {
            header('Location: /users/listuser');
            exit;
        }
    }

    public function deleteUser($id) {
        $this->userModel->deleteUser($id);
        header('Location: /users/listuser');
        exit();
    }
    
}
?>