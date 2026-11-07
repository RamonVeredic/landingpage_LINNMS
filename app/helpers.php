<?php
declare(strict_types=1);

function web_routes(): array
{
    static $routes = null;
    return $routes ??= require BASE_PATH . '/routes/web.php';
}

function route(string $name): string
{
    $routes = web_routes();
    if (!isset($routes[$name])) {
        throw new InvalidArgumentException('Unknown route: ' . $name);
    }
    return $routes[$name]['path'];
}

function asset(string $path): string
{
    return '/assets/' . ltrim($path, '/');
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
