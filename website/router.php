<?php
// Define the base path for your views
$viewsPath = __DIR__.'/views/';

// Sanitize and set the default page
$page = 'home';

if (isset($_GET['url'])) {
    // Sanitize the URL
    $url = filter_var($_GET['url'], FILTER_SANITIZE_URL);
    $url = rtrim($url, '/');

    // Check if the corresponding PHP file exists
    if (file_exists($viewsPath . $url . '.php')) {
        $page = $url;
    }
}

if(file_exists($viewsPath . $page . '.php')){
    include $viewsPath . $page . '.php';
}