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
 * Content fingerprint of all public assets and changelog JSON files.
 * Used to refresh open tabs after either code or release data changes.
 */
function asset_bundle_version(): string
{
    static $version = null;
    if ($version !== null) {
        return $version;
    }

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
        $contentHash = hash_file('sha256', $file->getPathname());
        if ($contentHash !== false) {
            $entries[] = $relativePath . ':' . $contentHash;
        }
    }
    // A changelog-only GitHub update must also invalidate open browser tabs.
    $changelogDirectory = BASE_PATH . '/public/views/data-change';
    foreach (glob($changelogDirectory . '/v*.json') ?: [] as $file) {
        if (!is_file($file)) {
            continue;
        }
        $contentHash = hash_file('sha256', $file);
        if ($contentHash !== false) {
            $entries[] = 'data-change/' . basename($file) . ':' . $contentHash;
        }
    }
    sort($entries, SORT_STRING);

    $version = substr(hash('sha256', implode("\n", $entries)), 0, 16);
    return $version;
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
