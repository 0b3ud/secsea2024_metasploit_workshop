<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$viewsPath = __DIR__ . '/views/';
require_once 'router.php';

// Inclure le contrôleur de contact
require_once 'controllers/ContactController.php';

// Créer une instance du contrôleur
$contactController = new ContactController();

// Obtenir l'URL et l'action de la requête
$url = $_GET['url'] ?? 'home';

// Router simple
switch ($url) {
    case 'contact':
        if (isset($_GET['action']) && $_GET['action'] === 'submit') {
            $contactController->submit();
        } else {
            $contactController->index();
        }
        break;
    case 'home':
        $HomeController->index();
        break;
    case 'blog':
        $BlogController->index();
        break;
    default:
        // Gérer les pages non trouvées
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
        break;
}
