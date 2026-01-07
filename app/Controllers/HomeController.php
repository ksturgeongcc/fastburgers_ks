<?php
// This controller handles the home page (/)

class HomeController
{
    public function index(): void
    {
        // Page title used by the layout
        $title = 'Fast Burgers';

        // Data to be displayed in the view
        $message = 'Welcome to Fast Burgers! This page is loaded using a controller and a router.';

        // Tell the layout which view to display
        $view = __DIR__ . '/../Views/home.php';

        // Load the layout (which will load the view)
        require __DIR__ . '/../Views/layout.php';
    }
}
