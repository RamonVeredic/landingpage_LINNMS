<?php
declare(strict_types=1);

$router = require dirname(__DIR__) . '/bootstrap/app.php';

ob_start();
try {
    $router->dispatch($_SERVER['REQUEST_METHOD'] ?? 'GET', $_SERVER['REQUEST_URI'] ?? '/');
} catch (Throwable $exception) {
    ob_clean();
    error_log((string) $exception);
    (new App\Http\Controllers\PageController())->error(500);
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'HEAD') {
    ob_end_clean();
} else {
    ob_end_flush();
}
