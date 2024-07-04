<?php
require_once 'vendor/autoload.php';

// Charger l'autoloader de Composer
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/views');
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/cache',
    'debug' => true,
]);

// Rendre Twig disponible globalement
global $twig;
