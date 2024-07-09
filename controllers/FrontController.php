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

}
?>