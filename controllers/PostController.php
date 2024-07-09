<?php
require_once __DIR__ . '/../models/PostModel.php';

class PostController {
    private $twig;
    private $postModel;

    public function __construct() {
        global $twig;
        $this->twig = $twig;
        $this->postModel = new PostModel();
    }

    //fonction recuperer les articles coté adm
    public function showPosts() {
        $posts = $this->postModel->getPosts();
        echo $this->twig->render('posts/listpost.twig', ['posts' => $posts]);
    }
    
    //fonction affichage pour edition
    public function editPost($id) {
        $post = $this->postModel->getPostById($id);
        echo $this->twig->render('posts/editpost.twig', ['post' => $post]);
    }

    //fonction sauvegarde modif de l'article
    public function savePost($postData) {
        $id = $postData['id'] ?? null;
        $title = $postData['title'];
        $content = $postData['content'];
        $image = $_FILES['image']['name'] ? $this->uploadImage($_FILES['image']) : null;
        $userId = $_SESSION['user_id']; 
        $updatedAt = date('Y-m-d H:i:s');
    
        if ($id) {
            $result = $this->postModel->updatePost($id, $title, $content, $image, $userId, $updatedAt);
        } else {
            $result = $this->postModel->createPost($title, $content, $image, $userId, $updatedAt);
        }
    
        header('Location: /posts/listpost');
        exit;
    }
    
    
    //fonction supression article selon son id coté adm
    public function deletePost($id) {
        // Récupérer les informations sur l'article pour obtenir le nom de l'image
        $post = $this->postModel->getPostById($id);
        if (!$post) {
            // Gérer l'erreur si l'article n'est pas trouvé
            header('Location: /error_page.php');  // Rediriger vers une page d'erreur
            exit;
        }
    
        // Chemin vers le répertoire d'images
        $imagePath = 'D:/xampp/htdocs/Cabinet/public/img/';
    
        // Nom de l'image à supprimer 
        $imageName = $post['image'];
    
        // Construire le chemin complet de l'image
        $imageFile = $imagePath . $imageName;
    
        // Vérifier si le fichier existe avant de le supprimer
        if (file_exists($imageFile)) {
            // Supprimer le fichier image
            unlink($imageFile);
        }
    
        // Supprimer l'article de la base de données
        $this->postModel->deletePost($id);
    
        // Redirection vers la liste des articles après la suppression
        header('Location: /posts/listpost');
        exit;
    }

    //fonction envoi de l'image (modifier chemin absolu lors de mise en prod)
    private function uploadImage($image) {
        $targetDir = "D:/xampp/htdocs/Cabinet/public/img/";  // Chemin absolu vers le répertoire des images pour test
        $targetFile = $targetDir . basename($image["name"]);
    
        // Vérifiez si le fichier existe déjà
        if (file_exists($targetFile)) {
            throw new Exception("Le fichier existe déjà.");
            sleep(3);
            header("Location: /posts/listpost");
        }
    
        // Vérifiez la taille du fichier
        if ($image["size"] > 650000) {  // Limite de taille à 500KB
            throw new Exception("Le fichier est trop volumineux.");
            sleep(3);
            header("Location: /posts/listpost");
        }
    
        // Vérifiez le type de fichier
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            throw new Exception("Seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.");
        }
    
        // Déplacer le fichier téléchargé vers le répertoire cible
        if (!move_uploaded_file($image["tmp_name"], $targetFile)) {
            throw new Exception("Une erreur s'est produite lors du téléchargement du fichier.");
        }
    
        return basename($image["name"]);
    }

    //fonction recuperer les articles selon la page en cours
    public function showBlog($page) {
        // Nombre d'articles par page
        $limit = 5;
    
        // Calcul de l'offset (adresse mémoire)
        $offset = ($page - 1) * $limit;
    
        // Récupérer les articles pour la page spécifiée
        $articles = $this->postModel->getArticlesPaginated($offset, $limit);
    
        // Récupérer le nombre total d'articles pour la pagination
        $totalArticles = $this->postModel->countArticles();
    
        // Calculer le nombre total de pages
        $totalPages = ceil($totalArticles / $limit);
    
        // Rendre la vue Twig avec les articles et la pagination
        echo $this->twig->render('blog.twig', [
            'articles' => $articles,
            'total_pages' => $totalPages,
            'current_page' => $page
        ]);
    }

    
    
}
?>
