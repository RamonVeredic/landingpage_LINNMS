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

/**
 * Lightweight fingerprint of the public asset tree for checking whether a
 * currently open browser tab is using an outdated deployment.
 */
function asset_bundle_version(): string
{
    $directory = BASE_PATH . '/public/assets';
    if (!is_dir($directory)) {
        return 'missing-assets';
    }

    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS)
    );
    $entries = [];
    foreach ($files as $file) {
        if (!$file->isFile()) {
            continue;
        }
        $relativePath = substr($file->getPathname(), strlen($directory) + 1);
        $entries[] = $relativePath . ':' . $file->getMTime() . ':' . $file->getSize();
    }
    sort($entries, SORT_STRING);

    return substr(hash('sha256', implode("\n", $entries)), 0, 16);
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
