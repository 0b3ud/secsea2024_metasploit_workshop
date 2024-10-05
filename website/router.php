<?php

// Define the base paths
$viewsPath = __DIR__ . '/views/';
$controllersPath = __DIR__ . '/controllers/';

// Sanitize and set the default page
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = rtrim($url, '/');
$url = strtolower($url); // Convert to lowercase
$url = preg_replace('/[^a-z0-9\-]/', '', $url); // Remove any character that is not alphanumeric or hyphen

// Sanitize action
$action = isset($_GET['action']) ? $_GET['action'] : '';
$action = filter_var($action, FILTER_SANITIZE_URL);
$action = strtolower($action);
$action = preg_replace('/[^a-z0-9\-]/', '', $action);

// Inclure les contrôleurs nécessaires
require_once $controllersPath . 'ContactController.php';
require_once $controllersPath . 'HomeController.php';
require_once $controllersPath . 'BlogController.php';

// Créer des instances des contrôleurs
$contactController = new ContactController();
$homeController = new HomeController();
$blogController = new BlogController();

// Router simple
switch ($url) {
    case 'contact':
        if ($action === 'submit') {
            $contactController->submit();
        } else {
            $contactController->index();
        }
        break;
    case 'home':
        $homeController->index();
        break;
    case 'blog':
        $blogController->index();
        break;
    default:
        // Gérer les pages non trouvées
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
        break;
}