<?php
require_once __DIR__ . '/../models/ServiceModel.php';

class ServiceController {
    private $twig;
    private $serviceModel;

    public function __construct() {
        global $twig;
        $this->twig = $twig;
        $this->serviceModel = new ServiceModel();
    }

    public function publicListServices() {
        $services = $this->serviceModel->getAllServices();
        
        echo $this->twig->render('services.twig', ['services' => $services]);
    }

    public function listServices() {
        $services = $this->serviceModel->getAllServices();
        
        echo $this->twig->render('services/listservice.twig', ['services' => $services]);
    }

    public function createService() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];

            $result = $this->serviceModel->createService($title, $description);
            if ($result) {
                header('Location: /services/listservice');
                exit;
            } else {
                echo $this->twig->render('services/createservice.twig', ['message' => 'Erreur lors de la création du service.']);
            }
        } else {
            echo $this->twig->render('services/createservice.twig');
        }
        
    }

    public function saveNewService($postData) {
        $title = $postData['title'];
        $description = $postData['description'];

        $result = $this->serviceModel->createService($title, $description);

        if ($result) {
            header('Location: /services/listservice');
            exit;
        } else {
            echo $this->twig->render('services/createservice.twig', ['message' => 'Erreur lors de la création du service.']);
        }
    }

    public function editService($id) {
        if (!$id || !is_numeric($id)) {
            http_response_code(404);
            echo $this->twig->render('404.twig');
            exit();
        }

        $service = $this->serviceModel->getServiceById($id);

        if (!$service) {
            http_response_code(404);
            echo $this->twig->render('404.twig');
            exit();
        }

        echo $this->twig->render('services/editservice.twig', [
            'service' => $service
        ]);
    }

    public function saveService($postData) {
        $id = $postData['id']; 
        $title = $postData['title'];
        $description = $postData['description'];
    
        $result = $this->serviceModel->updateService($id, $title, $description);
    
        if ($result) {
            header('Location: /services/listservice');
            exit();
        } else {
            echo $this->twig->render('services/editservice.twig', [
                'service' => $this->serviceModel->getServiceById($id),
                'message' => 'Erreur lors de la mise à jour du service.'
            ]);
        }
    }

    public function deleteService($id) {
        $result = $this->serviceModel->deleteService($id);
        if ($result) {
            header('Location: /services/listservice');
            exit();
        } else {
            echo $this->twig->render('services/listservice.twig', ['message' => 'Erreur lors de la suppression du service.']);
        }
    }
}
?>
