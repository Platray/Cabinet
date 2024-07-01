<?php 

//pour plus tard

namespace Middleware;

class AuthMiddleware {
    public static function checkAuth() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit();
        }
    }
}
?> 
