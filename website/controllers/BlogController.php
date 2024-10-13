<?php

class BlogController {
    public function index()
    {
        //Just render the home view
        $this->render('blog');
    }

    private function render($view, $data = [])
    {
        // Extract any data passed to the view
        extract($data);

        // Include the view file
        require_once "views/{$view}.php";
    }
}