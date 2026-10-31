<a class="skip-link" href="#main">Langsung ke konten</a>
<header class="site-header sticky-top">
  <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Navigasi utama">
    <div class="container">
      <a class="navbar-brand brand d-inline-flex align-items-center gap-2" href="index.php">
        <img class="brand-logo" src="assets/linnms-logo.png" alt="" width="42" height="42" decoding="async" />
        <span class="brand-copy d-flex flex-column">
          <strong>LINNMS</strong><small>NETWORK MANAGEMENT</small>
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#siteNavigation"
        aria-controls="siteNavigation" aria-expanded="false" aria-label="Buka navigasi">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="siteNavigation">
        <ul class="navbar-nav ms-lg-auto align-items-lg-center gap-lg-1 py-3 py-lg-0">
          <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'home' ? 'active' : '' ?>" href="index.php" <?= ($activePage ?? '') === 'home' ? 'aria-current="page"' : '' ?>>Beranda</a></li>
          <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'features' ? 'active' : '' ?>" href="fitur.php" <?= ($activePage ?? '') === 'features' ? 'aria-current="page"' : '' ?>>Fitur</a></li>
          <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'docs' ? 'active' : '' ?>" href="docs.php" <?= ($activePage ?? '') === 'docs' ? 'aria-current="page"' : '' ?>>Dokumentasi</a></li>
          <li class="nav-item"><a class="nav-link <?= ($activePage ?? '') === 'about' ? 'active' : '' ?>" href="about.php" <?= ($activePage ?? '') === 'about' ? 'aria-current="page"' : '' ?>>Tentang</a></li>
          <li class="nav-item dropdown ms-lg-3 mt-2 mt-lg-0">
            <button class="btn btn-brand dropdown-toggle nav-join" type="button" id="accountDropdown"
              data-bs-toggle="dropdown" aria-expanded="false">Gabung</button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
              <li><a class="dropdown-item disabled" data-auth-link="login" role="link" aria-disabled="true" tabindex="-1">Masuk <small class="d-block">URL belum tersedia</small></a></li>
              <li><a class="dropdown-item disabled" data-auth-link="register" role="link" aria-disabled="true" tabindex="-1">Daftar <small class="d-block">URL belum tersedia</small></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>