
<header class="site-header">
  <div class="shell container-xl navbar navbar-expand-lg linnms-navbar">
    <a class="brand navbar-brand m-0" href="index.php">
      <img class="brand-logo" src="assets/linnms-logo.png" alt="" width="44" height="44" decoding="async" />
      <span><strong>LINNMS</strong><small>NETWORK MANAGEMENT</small></span>
    </a>
    <button class="navbar-toggler linnms-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#primary-nav" aria-controls="primary-nav" aria-expanded="false" aria-label="Menu navigasi">
      <i class="bi bi-list" aria-hidden="true"></i>
    </button>
    <nav class="collapse navbar-collapse" id="primary-nav" aria-label="Navigasi utama">
      <ul class="navbar-nav ms-lg-auto align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link linnms-nav-link" href="index.php" <?= ($activePage ?? '') === 'home' ? 'aria-current="page"' : '' ?>>Beranda</a></li>
        <li class="nav-item"><a class="nav-link linnms-nav-link" href="fitur.php" <?= ($activePage ?? '') === 'features' ? 'aria-current="page"' : '' ?>>Fitur</a></li>
        <li class="nav-item"><a class="nav-link linnms-nav-link" href="docs.php" <?= ($activePage ?? '') === 'docs' ? 'aria-current="page"' : '' ?>>Dokumentasi</a></li>
        <li class="nav-item"><a class="nav-link linnms-nav-link" href="about.php" <?= ($activePage ?? '') === 'about' ? 'aria-current="page"' : '' ?>>Tentang</a></li>
        <li class="nav-item dropdown ms-lg-2">
          <button class="btn btn-sm btn-brand linnms-nav-cta dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Gabung</button>
          <ul class="dropdown-menu dropdown-menu-lg-end">
            <li><a class="dropdown-item" href="#">Masuk</a></li>
            <li><a class="dropdown-item" href="#">Daftar</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>
