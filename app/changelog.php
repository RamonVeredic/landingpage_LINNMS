<?php
declare(strict_types=1);

/**
 * Load published changelog records from one JSON file per release.
 * Filenames and JSON version fields must match (vMAJOR.MINOR.PATCH.json).
 */
function changelog_releases(): array
{
    $directory = BASE_PATH . '/public/views/data-change';
    if (!is_dir($directory)) {
        return [];
    }

    $releases = [];
    foreach (glob($directory . '/v*.json') ?: [] as $file) {
        if (!preg_match('/^v([0-9]+\.[0-9]+\.[0-9]+)\.json$/D', basename($file), $matches)) {
            continue;
        }

        $raw = file_get_contents($file);
        if ($raw === false) {
            error_log('Cannot read changelog: ' . basename($file));
            continue;
        }

        try {
            $release = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            error_log('Invalid changelog JSON in ' . basename($file) . ': ' . $exception->getMessage());
            continue;
        }

        if (!is_array($release) || ($release['version'] ?? null) !== $matches[1]) {
            error_log('Changelog version mismatch: ' . basename($file));
            continue;
        }

        // A draft file can live in GitHub without appearing on the website.
        if (($release['published'] ?? true) === false) {
            continue;
        }

        $hasChanges = is_array($release['changes'] ?? null) && $release['changes'] !== [];
        $hasSections = is_array($release['sections'] ?? null) && $release['sections'] !== [];
        // Prefer an ordered verbatim changelog list; do not invent category labels.
        $changelog = is_array($release['changelog'] ?? null)
            ? array_values(array_filter($release['changelog'],
                static fn ($item): bool => is_string($item) && trim($item) !== ''))
            : [];
        if (!$hasChanges && !$hasSections && !$changelog) {
            error_log('Release has no description or changelog: ' . basename($file));
            continue;
        }

        // Ignore malformed optional fields instead of emitting PHP foreach warnings.
        $release['changes'] = $hasChanges ? $release['changes'] : [];
        $release['sections'] = $hasSections ? $release['sections'] : [];
        $release['changelog'] = $changelog;
        $release['id'] = 'v' . str_replace('.', '-', $matches[1]);
        $releases[] = $release;
    }

    usort($releases, static fn (array $a, array $b): int =>
        version_compare($b['version'], $a['version'])
    );

    return $releases;
}
