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
            <?php if (!empty($release['sections'])): ?>
            <h4>Rincian rilis</h4>
            <?php foreach ($release['sections'] as $section): ?>
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
            <?php endif; ?>
            <h4 class="manual-release-changelog-heading">Changelog v<?= e($release['version']) ?></h4>
            <?php
              $notes = $release['changelog'] ?? [];
              // Legacy JSON records can still use changes. Do not auto-label them.
              foreach (($release['changes'] ?? []) as $items) {
                  if (!is_array($items)) continue;
                  foreach ($items as $item) {
                      if (is_string($item) && trim($item) !== '') $notes[] = $item;
                  }
              }
            ?>
            <?php if ($notes): ?>
            <ul class="manual-changes manual-changelog-list">
              <?php foreach ($notes as $note): ?>
              <li><?= e($note) ?></li>
              <?php endforeach; ?>
            </ul>
            <?php else: ?>
            <p class="manual-note">Belum ada catatan perubahan terpisah untuk versi ini.</p>
            <?php endif; ?>
          </div>
        </section>
        <?php endforeach; ?>
        <?php endif; ?>
      </section>
    </article>
  </div>
</main>
