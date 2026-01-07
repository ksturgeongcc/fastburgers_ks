<?php
// This is the single entry point for the entire website.
// Every request (/, /contact, /admin/users, etc.) is routed through this file.

require __DIR__ . '/../app/Core/Router.php';

// Create the router and let it decide what should run
$router = new Router();
$router->dispatch();
