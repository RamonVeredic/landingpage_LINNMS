<?php
declare(strict_types=1);

$base = rtrim($argv[1] ?? 'http://127.0.0.1', '/');
$checks = 0;

function check(bool $condition, string $message): void
{
    global $checks;
    $checks++;
    if (!$condition) {
        throw new RuntimeException($message);
    }
}

function request(string $path, string $method = 'GET'): array
{
    global $base;
    $context = stream_context_create(['http' => [
        'method' => $method,
        'ignore_errors' => true,
        'follow_location' => 0,
        'timeout' => 10,
    ]]);
    $stream = fopen($base . $path, 'r', false, $context);
    if ($stream === false) {
        throw new RuntimeException('Request failed: ' . $path);
    }
    $headers = stream_get_meta_data($stream)['wrapper_data'];
    $body = stream_get_contents($stream);
    fclose($stream);
    preg_match('/\s(\d{3})\s/', $headers[0], $status);
    $parsed = [];
    foreach (array_slice($headers, 1) as $header) {
        if (str_contains($header, ':')) {
            [$name, $value] = explode(':', $header, 2);
            $parsed[strtolower(trim($name))] = trim($value);
        }
    }
    return [(int) $status[1], $parsed, $body];
}

$assets = [];
foreach (['/', '/tentang', '/dokumentasi', '/dokumentasi/instalasi', '/dokumentasi/oid', '/dokumentasi/changelog'] as $path) {
    [$status, $headers, $body] = request($path);
    check($status === 200, $path . ' must return 200');
    check(substr_count(strtolower($body), '<!doctype html>') === 1, $path . ' must render one layout');
    check(str_contains($body, '<main') && str_contains($body, '<footer'), $path . ' must render content and footer');
    preg_match_all('/(?:href|src)="([^"]+)"/', $body, $matches);
    foreach ($matches[1] as $url) {
        if (preg_match('~^https?://~', $url) || str_starts_with($url, '#')) {
            continue;
        }
        check(str_starts_with($url, '/'), 'Internal URL must be absolute: ' . $url);
        check(!str_contains($url, '.php'), 'Internal URL must not expose PHP: ' . $url);
        if (str_starts_with($url, '/assets/')) {
            $assets[$url] = true;
        } else {
            check(request(explode('#', $url, 2)[0])[0] === 200, 'Broken internal link: ' . $url);
        }
    }
}
foreach (array_keys($assets) as $asset) {
    check(request($asset)[0] === 200, 'Asset must load: ' . $asset);
}
$redirects = require dirname(__DIR__) . '/routes/redirects.php';
foreach ($redirects as $old => $target) {
    [$status, $headers] = request($old);
    check($status === 301 && ($headers['location'] ?? '') === $target, 'Invalid redirect: ' . $old);
}
foreach ([
    '/oid.php?source=old' => '/dokumentasi/oid?source=old',
    '/fitur.php?source=old' => '/?source=old#fitur',
    '/dokumentasi/oid/?source=old' => '/dokumentasi/oid?source=old',
] as $old => $target) {
    [$status, $headers] = request($old);
    check($status === 301 && ($headers['location'] ?? '') === $target, 'Query or slash redirect failed: ' . $old);
}
foreach (['/tidak-ada', '/missing.php', '/app/helpers.php', '/resources/views/pages/home.php', '/routes/web.php', '/assets/missing.css', '/assets/parsial/navbar.php'] as $path) {
    check(request($path)[0] === 404, 'Unavailable path must return 404: ' . $path);
}
[$status, $headers] = request('/tentang', 'POST');
check($status === 405 && ($headers['allow'] ?? '') === 'GET, HEAD', 'POST must return 405 with Allow');
[$status, $headers, $body] = request('/dokumentasi/oid', 'HEAD');
check($status === 200 && $body === '', 'HEAD must return 200 without a body');
echo $checks . " routing checks passed.\n";
