<?php
require_once __DIR__ . '/../models/HourModel.php';

class HourController {
    private $twig;
    private $hourModel;
    
    public function __construct()
    {
        global $twig;
        $this->twig = $twig;
        $this->hourModel = new HourModel();
    }

    //fonction recuperer les heures pour affichage
    public function showHours() {
        $hours = $this->hourModel->getHours();
        echo $this->twig->render('hours/listhour.twig', ['hours' => $hours]);
    }

    //fonction edition heures selon id
    public function editHour($id) {
        if (!$id || !is_numeric($id)) {
            http_response_code(404);
            echo $this->twig->render('404.twig');
            exit();
        }
    
        $hour = $this->hourModel->getHourById($id);
    
        if (!$hour) {
            http_response_code(404);
            echo $this->twig->render('404.twig');
            exit();
        }
    
        return $this->twig->render('hours/edithour.twig', [
            'hour' => $hour
        ]);
    }

    //fonction sauvegarde modif heure(horaires)
    public function saveHour($postData) {
        $id = $postData['id'];
        $open = $postData['open'];
        $close = $postData['close'];
        $isOpen = $postData['isOpen'];
        
        $result = $this->hourModel->updateHour($id, $open, $close, $isOpen);
    
        if ($result) {
            header('Location: /hours/listhour');
            exit;
        } else {
            header('Location: /hours/listhour');
            exit;
        }
    }
    
}
?>
