<main id="main" class="manual-page">
  <header class="manual-head container-xl">
    <nav aria-label="Breadcrumb">
      <ol class="breadcrumb mb-3 small">
        <li class="breadcrumb-item"><a class="link-body-emphasis text-success-emphasis" href="/">Beranda</a></li>
        <?php if ($docSection === 'installation'): ?>
        <li class="breadcrumb-item active" aria-current="page">Docs</li>
        <?php else: ?>
        <li class="breadcrumb-item"><a class="link-body-emphasis text-success-emphasis" href="/dokumentasi">Docs</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $docSection === 'mapping' ? 'Pemetaan Data' : 'Changelog' ?></li>
        <?php endif; ?>
      </ol>
    </nav>
    <h1>Docs</h1>
  </header>
  <div class="manual-layout container-xl">
    <nav class="manual-nav" aria-label="Isi Docs">
      <span class="manual-nav-label">ISI DOCS</span>
      <a href="/dokumentasi" <?= $docSection === 'installation' ? 'class="active" aria-current="page"' : '' ?>>Instalasi</a>
      <?php if ($docSection === 'installation'): ?>
      <div class="manual-nav-sub">
        <a href="#docker-compose">Docker Compose</a>
        <a href="#casaos">CasaOS</a>
        <a href="#periksa-error">Periksa error</a>
      </div>
      <?php endif; ?>
      <a href="/dokumentasi/pemetaan-data" <?= $docSection === 'mapping' ? 'class="active" aria-current="page"' : '' ?>>Pemetaan Data</a>
      <?php if ($docSection === 'mapping'): ?>
      <div class="manual-nav-sub">
        <a href="#zte">ZTE</a>
        <a href="#hioso">HIOSO</a>
      </div>
      <?php endif; ?>
      <a href="/dokumentasi/changelog" <?= $docSection === 'changelog' ? 'class="active" aria-current="page"' : '' ?>>Changelog</a>
      <?php if ($docSection === 'changelog'): ?>
      <div class="manual-nav-sub">
        <a href="#v1-0-3">v1.0.3</a>
        <a href="#v1-0-2">v1.0.2</a>
        <a href="#v1-0-0">v1.0.0</a>
      </div>
      <?php endif; ?>
    </nav>
    <article class="manual-content">
