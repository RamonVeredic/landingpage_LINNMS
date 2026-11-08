<main id="main" class="linnms__docs__page">
  <header class="linnms__docs__head container-xl">
    <nav aria-label="Breadcrumb">
      <ol class="breadcrumb mb-3 small">
        <li class="breadcrumb-item"><a class="link-body-emphasis text-success-emphasis" href="/">Beranda</a></li>
        <?php if ($docSection === 'installation'): ?>
        <li class="breadcrumb-item active" aria-current="page">Docs</li>
        <?php else: ?>
        <li class="breadcrumb-item"><a class="link-body-emphasis text-success-emphasis" href="/dokumentasi">Docs</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $docSection === 'mapping' ? 'Pemetaan Data' : 'Release' ?></li>
        <?php endif; ?>
      </ol>
    </nav>
    <h1><?= $docSection === 'changelog' ? 'Release' : 'Docs' ?></h1>
  </header>
  <div class="linnms__docs__layout container-xl">
    <nav class="linnms__docs__nav" aria-label="Isi Docs">
      <span class="linnms__docs__nav-label">ISI DOCS</span>
      <a href="/dokumentasi" <?= $docSection === 'installation' ? 'class="active" aria-current="page"' : '' ?>>Instalasi</a>
      <?php if ($docSection === 'installation'): ?>
      <div class="linnms__docs__nav-sub">
        <a href="#docker-compose">Docker Compose</a>
        <a href="#casaos">CasaOS</a>
        <a href="#periksa-error">Periksa error</a>
      </div>
      <?php endif; ?>
      <a href="/dokumentasi/pemetaan-data" <?= $docSection === 'mapping' ? 'class="active" aria-current="page"' : '' ?>>Pemetaan Data</a>
      <?php if ($docSection === 'mapping'): ?>
      <div class="linnms__docs__nav-sub">
        <a href="#zte">ZTE</a>
        <a href="#hioso">HIOSO</a>
      </div>
      <?php endif; ?>
      <a href="/dokumentasi/changelog" <?= $docSection === 'changelog' ? 'class="active" aria-current="page"' : '' ?>>Release</a>
      <?php if ($docSection === 'changelog' && !empty($changelogReleases)): ?>
      <div class="linnms__docs__nav-sub">
        <?php foreach ($changelogReleases as $release): ?>
        <a href="#<?= e($release['id']) ?>">v<?= e($release['version']) ?></a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </nav>
    <article class="linnms__docs__content">
