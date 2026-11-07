<?php
declare(strict_types=1);

if (PHP_SAPI === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $file = is_string($path) ? realpath(__DIR__ . rawurldecode($path)) : false;
    if (is_string($path) && str_starts_with($path, '/assets/') && $file !== false
        && str_starts_with($file, __DIR__ . '/assets/') && is_file($file)
        && pathinfo($file, PATHINFO_EXTENSION) !== 'php') {
        return false;
    }
}

require dirname(__DIR__) . '/app/bootstrap.php';
