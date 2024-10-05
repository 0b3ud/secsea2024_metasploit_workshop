<?php
// Define the base path for your views
$viewsPath = __DIR__ . '/views/';

// Get the requested URL
$request = $_SERVER['REQUEST_URI'];

// Remove query string and trailing slash
$request = strtok($request, '?');
$request = rtrim($request, '/');

// Define routes
$routes = [
    '/' => 'home.php',
    '/blog' => 'blog.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php'
];

// Check if the route exists
if (array_key_exists($request, $routes)) {
    $view = $viewsPath . $routes[$request];
    if (file_exists($view)) {
        require $view;
    } else {
        http_response_code(404);
        require $viewsPath . '404.php';
    }
} else {
    http_response_code(404);
    require $viewsPath . '404.php';
}