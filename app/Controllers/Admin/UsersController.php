<?php
// This controller handles the admin users page (/admin/users)

class UsersController
{
    public function index(): void
    {
        // Page title
        $title = 'Users';

        // Fake data for learning purposes
        $users = [
            'Alice',
            'Bob',
            'Charlie'
        ];

        // Choose the admin view
        $view = __DIR__ . '/../../Views/admin/users.php';

        // Load the layout
        require __DIR__ . '/../../Views/layout.php';
    }
}
