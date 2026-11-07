<?php
declare(strict_types=1);

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$public = __DIR__ . '/public';
$file = is_string($path) ? realpath($public . rawurldecode($path)) : false;

if (is_string($path) && str_starts_with($path, '/assets/') && $file !== false
    && str_starts_with($file, $public . '/') && is_file($file)
    && pathinfo($file, PATHINFO_EXTENSION) !== 'php') {
    return false;
}

require $public . '/index.php';
