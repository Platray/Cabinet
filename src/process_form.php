<?php
require_once 'path/to/your/User.php'; // Incluez le fichier où votre classe User est définie
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('/path/to/templates');
$twig = new \Twig\Environment($loader);

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars(strip_tags(trim($_POST['firstname'])));
    $lastname = htmlspecialchars(strip_tags(trim($_POST['lastname'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $birthday = htmlspecialchars(strip_tags(trim($_POST['birthday'])));
    $isAdmin = isset($_POST['isAdmin']) ? 1 : 0;

    if (!validateEmail($email)) {
        echo $twig->render('register.twig', ['error' => 'Email invalide.']);
    } else {
        $user = new User();
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->birthday = $birthday;
        $user->isAdmin = $isAdmin;

        if ($user->createUser()) {
            echo $twig->render('success.twig');
        } else {
            echo $twig->render('register.twig', ['error' => 'Erreur lors de la création de l\'utilisateur.']);
        }
    }
}