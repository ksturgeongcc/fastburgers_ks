<?php
// The Router decides which controller should handle the request
// based on the URL path.

class Router
{
    public function dispatch(): void
{
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';

    // Base path = where index.php lives (e.g. /fastburgers_ks/public)
    $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

    // Remove base path from the start of the URL
    if ($basePath !== '' && str_starts_with($path, $basePath)) {
        $path = substr($path, strlen($basePath));
    }

    // Normalise empty to /
    $path = $path === '' ? '/' : $path;

    switch ($path) {
        case '/':
            require __DIR__ . '/../Controllers/HomeController.php';
            (new HomeController())->index();
            break;

        case '/contact':
            require __DIR__ . '/../Controllers/ContactController.php';
            (new ContactController())->index();
            break;

        case '/admin/users':
            require __DIR__ . '/../Controllers/Admin/UsersController.php';
            (new UsersController())->index();
            break;

        case '/admin/orders':
            require __DIR__ . '/../Controllers/Admin/OrdersController.php';
            (new OrdersController())->index();
            break;

        default:
            http_response_code(404);
            echo '<h1>404 - Page Not Found</h1>';
    }
}

}
