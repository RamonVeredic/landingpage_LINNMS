<?php require BASE_PATH . '/public/views/partials/docs-open.php'; ?>
      <section class="manual-section manual-release-page" id="release" aria-labelledby="release-title">
        <h2 id="release-title">Release</h2>
        <p class="manual-release-intro">Pilih versi rilis untuk melihat changelog. Setiap versi memiliki tautan ke halaman rilisnya di GitHub.</p>
        <?php if (empty($changelogReleases)): ?>
        <p class="manual-note">Belum ada release yang dipublikasikan.</p>
        <?php else: ?>
        <nav class="manual-method-nav d-flex flex-wrap gap-2" aria-label="Daftar versi release">
          <?php foreach ($changelogReleases as $release): ?>
          <a href="#<?= e($release['id']) ?>">v<?= e($release['version']) ?></a>
          <?php endforeach; ?>
        </nav>
        <?php foreach ($changelogReleases as $releaseIndex => $release): ?>
        <?php if ($releaseIndex > 0): ?>
        <hr class="manual-release-divider" aria-hidden="true" />
        <?php endif; ?>
        <section class="manual-method manual-release" id="<?= e($release['id']) ?>" aria-labelledby="<?= e($release['id']) ?>-title">
          <header class="manual-release-head">
            <div>
              <span class="manual-release-eyebrow">VERSI RELEASE</span>
              <?php $githubUrl = $release['release_url'] ?? null; ?>
              <?php $hasGithubUrl = is_string($githubUrl) && preg_match('~^https://github\\.com(?:/|$)~i', $githubUrl); ?>
              <h3 id="<?= e($release['id']) ?>-title">
                <?php if ($hasGithubUrl): ?>
                <a class="manual-release-link" href="<?= e($githubUrl) ?>" target="_blank" rel="noopener noreferrer" aria-label="Lihat release v<?= e($release['version']) ?> di GitHub (tab baru)">
                  v<?= e($release['version']) ?>
                  <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i>
                </a>
                <?php else: ?>
                v<?= e($release['version']) ?>
                <?php endif; ?>
              </h3>
            </div>
            <?php if (isset($release['date']) && is_string($release['date']) && $release['date'] !== ''): ?>
            <time class="manual-release-date" datetime="<?= e($release['date']) ?>"><?= e($release['date']) ?></time>
            <?php endif; ?>
          </header>
          <div class="manual-release-body">
            <h4>Changelog</h4>
            <?php foreach (($release['changes'] ?? []) as $category => $items): ?>
              <?php if (!is_string($category) || !is_array($items) || !$items) continue; ?>
              <?php $categoryTitle = ['Fixed' => 'Perbaikan', 'Added' => 'Penambahan', 'Changed' => 'Perubahan', 'Removed' => 'Penghapusan'][$category] ?? $category; ?>
              <div class="manual-release-group">
                <h5><?= e($categoryTitle) ?></h5>
                <ul class="manual-changes">
                  <?php foreach ($items as $item): ?>
                    <?php if (is_string($item) && $item !== ''): ?>
                    <li><?= e($item) ?></li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endforeach; ?>
            <?php foreach (($release['sections'] ?? []) as $section): ?>
              <?php if (!is_array($section) || !is_array($section['groups'] ?? null)) continue; ?>
              <div class="manual-release-group">
                <?php if (is_string($section['title'] ?? null) && $section['title'] !== ''): ?>
                <h5><?= e($section['title']) ?></h5>
                <?php endif; ?>
                <?php foreach ($section['groups'] as $group): ?>
                  <?php if (!is_array($group)) continue; ?>
                  <?php if (is_string($group['title'] ?? null) && $group['title'] !== ''): ?>
                  <h6><?= e($group['title']) ?></h6>
                  <?php endif; ?>
                  <?php if (is_array($group['items'] ?? null) && $group['items']): ?>
                  <ul class="manual-changes">
                    <?php foreach ($group['items'] as $item): ?>
                      <?php if (is_string($item) && $item !== ''): ?>
                      <li><?= e($item) ?></li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </section>
        <?php endforeach; ?>
        <?php endif; ?>
      </section>
    </article>
  </div>
</main>
