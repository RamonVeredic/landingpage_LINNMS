<?php require BASE_PATH . '/public/views/partials/docs-open.php'; ?>
      <section class="manual-section" id="changelog" aria-labelledby="changelog-title">
        <h2 id="changelog-title">Changelog</h2>
        <?php if (empty($changelogReleases)): ?>
        <p class="manual-note">Riwayat perubahan belum tersedia.</p>
        <?php else: ?>
        <nav class="manual-method-nav d-flex flex-wrap gap-2" aria-label="Versi changelog">
          <?php foreach ($changelogReleases as $release): ?>
          <a href="#<?= e($release['id']) ?>">v<?= e($release['version']) ?></a>
          <?php endforeach; ?>
        </nav>
        <?php foreach ($changelogReleases as $release): ?>
        <section class="manual-method manual-release" id="<?= e($release['id']) ?>" aria-labelledby="<?= e($release['id']) ?>-title">
          <h3 id="<?= e($release['id']) ?>-title">v<?= e($release['version']) ?></h3>
          <?php if (isset($release['date']) && is_string($release['date']) && $release['date'] !== ''): ?>
          <p class="manual-note">Tanggal rilis: <?= e($release['date']) ?></p>
          <?php endif; ?>
          <div class="manual-release-body">
            <?php foreach (($release['changes'] ?? []) as $category => $items): ?>
              <?php if (!is_string($category) || !is_array($items) || !$items) continue; ?>
              <h4><?= e($category) ?></h4>
              <ul class="manual-changes">
                <?php foreach ($items as $item): ?>
                <?php if (is_string($item) && $item !== ''): ?>
                <li><?= e($item) ?></li>
                <?php endif; ?>
                <?php endforeach; ?>
              </ul>
            <?php endforeach; ?>
            <?php foreach (($release['sections'] ?? []) as $section): ?>
              <?php if (!is_array($section)) continue; ?>
              <?php if (is_string($section['title'] ?? null)): ?>
              <h4><?= e($section['title']) ?></h4>
              <?php endif; ?>
              <?php if (!is_array($section['groups'] ?? null)) continue; ?>
              <?php foreach ($section['groups'] as $group): ?>
                <?php if (!is_array($group)) continue; ?>
                <?php if (is_string($group['title'] ?? null) && $group['title'] !== ''): ?>
                <h5><?= e($group['title']) ?></h5>
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
            <?php endforeach; ?>
          </div>
        </section>
        <?php endforeach; ?>
        <?php endif; ?>
      </section>
    </article>
  </div>
</main>
