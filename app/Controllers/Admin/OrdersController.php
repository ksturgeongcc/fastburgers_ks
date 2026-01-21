<?php
// This controller handles the admin orders page (/admin/orders)
$db = require BASE_PATH . '/config/database.php';
echo "Database connection status: " . ($db->connect_error ? 'Failed - ' . $db->connect_error : 'Successful');

class OrdersController
{
    public function index(): void
    {
        // Page title
        $title = 'Orders';

        // Example order data
        $orders = [
            ['id' => 1, 'item' => 'Cheeseburger', 'price' => 6.50],
            ['id' => 2, 'item' => 'Veggie Burger', 'price' => 7.00],
        ];

        // Choose the admin view
        $view = BASE_PATH . '/app/Views/admin/orders.php';

        // Load the layout
        require BASE_PATH . '/app/Views/layout.php';
    }
}
