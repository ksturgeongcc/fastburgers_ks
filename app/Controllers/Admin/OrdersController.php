<?php
// This controller handles the admin orders page (/admin/orders)

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
        $view = __DIR__ . '/../../Views/admin/orders.php';

        // Load the layout
        require __DIR__ . '/../../Views/layout.php';
    }
}
