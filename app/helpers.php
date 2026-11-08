<?php
declare(strict_types=1);

/**
 * Append a content-based version to local assets so deployments cannot reuse
 * a stale browser/CDN cache entry, even if file modification times are equal.
 */
function asset(string $path): string
{
    $path = ltrim($path, '/');
    $url = '/assets/' . $path;
    $file = BASE_PATH . '/public/assets/' . $path;

    if (is_file($file)) {
        $hash = hash_file('sha256', $file);
        if ($hash !== false) {
            $url .= '?v=' . substr($hash, 0, 16);
        }
    }

    return $url;
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
