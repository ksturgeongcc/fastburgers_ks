<?php
// This controller handles the admin users page (/admin/users)
$db = require BASE_PATH . '/config/database.php';
echo "Database connection status: " . ($db->connect_error ? 'Failed - ' . $db->connect_error : 'Successful');

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
        $view = BASE_PATH . '/app/Views/admin/users.php';

        // Load the layout
        require BASE_PATH . '/app/Views/layout.php';
    }
}
