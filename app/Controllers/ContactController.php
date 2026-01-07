<?php
// This controller handles the contact page (/contact)

class ContactController
{
    public function index(): void
    {
        // Page title
        $title = 'Contact Us';

        // Example data (normally this could come from a database)
        $email = 'contact@fastburgers.test';
        $phone = '01234 567890';

        // Choose the view file
        $view = __DIR__ . '/../Views/contact.php';

        // Load the layout
        require __DIR__ . '/../Views/layout.php';
    }
}
