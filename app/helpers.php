<?php
declare(strict_types=1);

function web_routes(): array
{
    static $routes = null;
    return $routes ??= require BASE_PATH . '/routes/web.php';
}


function asset(string $path): string
{
    $path = ltrim($path, '/');
    $url = '/assets/' . $path;
    $file = BASE_PATH . '/public/assets/' . $path;
    if (in_array(pathinfo($path, PATHINFO_EXTENSION), ['css', 'js'], true) && is_file($file)) {
        $url .= '?v=' . filemtime($file);
    }
    return $url;
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
