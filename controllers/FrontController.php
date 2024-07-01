<?php

//namespace App\Controller;

use Twig\Environment;
require_once __DIR__ . '/../models/Post.php';
class FrontController {
    private $twig;
    private $postModel;
    
    public function __construct()
    {
        global $twig;
        $this->twig = $twig;
        $this->postModel = new Post();
    }
    //Distribution des pages
    public function home() {
        echo $this->twig->render('home');
    }

    public function contact() {
        echo $this->twig->render('contact');
    }

    public function actualites() {
        echo $this->twig->render('actualites');
    }

    public function booking() {
        echo $this->twig->render('booking');
    }

    public function register() {
        echo $this->twig->render('register');
    }

    //Fonctions posts
    public function getLastPosts() {
        return $this->postModel->readLast();
    }

    public function getAllPosts(){
        return $this->postModel->read();
    }

    
     

   
}
?>