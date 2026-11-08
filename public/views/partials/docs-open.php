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
      <a href="/dokumentasi/pemetaan-data" <?= $docSection === 'mapping' ? 'class="active" aria-current="page"' : '' ?>>Pemetaan Data</a>
      <a href="/dokumentasi/changelog" <?= $docSection === 'changelog' ? 'class="active" aria-current="page"' : '' ?>>Changelog</a>
    </nav>
    <article class="manual-content">
