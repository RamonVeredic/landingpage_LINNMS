<?php
declare(strict_types=1);

define('BASE_PATH', dirname(__DIR__));

require __DIR__ . '/helpers.php';
require __DIR__ . '/controller.php';

function handle_request(array $config): void
{
    $controller = new PageController();
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
    $path = parse_url($uri, PHP_URL_PATH);

    if (!is_string($path) || !str_starts_with($path, '/')) {
        $controller->error(400);
        return;
    }

    $canonical = rtrim($path, '/') ?: '/';
    $action = $config['pages'][$canonical] ?? null;
    $redirect = $config['redirects'][$canonical] ?? null;

    if ($action === null && $redirect === null) {
        $controller->error(404);
        return;
    }

    if (!in_array($method, ['GET', 'HEAD'], true)) {
        header('Allow: GET, HEAD');
        $controller->error(405);
        return;
    }

    if ($redirect !== null || $canonical !== $path) {
        $target = $redirect ?? $canonical;
        [$destination, $fragment] = array_pad(explode('#', $target, 2), 2, null);
        $query = parse_url($uri, PHP_URL_QUERY);
        if (is_string($query) && $query !== '') {
            $destination .= '?' . $query;
        }
        if ($fragment !== null) {
            $destination .= '#' . $fragment;
        }
        header('Location: ' . $destination, true, 301);
        return;
    }

    header('Content-Type: text/html; charset=UTF-8');
    $controller->{$action}();
}

ob_start();
try {
    handle_request(require __DIR__ . '/routes.php');
} catch (Throwable $exception) {
    ob_clean();
    error_log((string) $exception);
    (new PageController())->error(500);
}

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'HEAD') {
    ob_end_clean();
} else {
    ob_end_flush();
}
