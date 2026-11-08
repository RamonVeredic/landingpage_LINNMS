
<header class="linnms__header__page">
  <div class="container-xl navbar navbar-expand-lg linnms__header__nav">
    <a class="linnms__header__brand navbar-brand m-0" href="/">
      <img class="linnms__header__logo" src="<?= asset('favicon.ico') ?>" alt="" width="44" height="44" decoding="async" />
      <span><strong>LINNMS</strong><small>NETWORK MANAGEMENT</small></span>
    </a>
    <button class="navbar-toggler linnms__header__toggle ms-auto d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#primary-nav" aria-controls="primary-nav" aria-expanded="false" aria-label="Menu navigasi">
      <i class="bi bi-list" aria-hidden="true"></i>
    </button>
    <nav class="collapse navbar-collapse" id="primary-nav" aria-label="Navigasi utama">
      <ul class="navbar-nav ms-lg-auto align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link linnms__header__link d-flex align-items-center justify-content-lg-center" href="/" <?= ($activePage ?? '') === 'home' ? 'aria-current="page"' : '' ?>>Beranda</a></li>
        <li class="nav-item"><a class="nav-link linnms__header__link d-flex align-items-center justify-content-lg-center" href="/#fitur">Fitur</a></li>
        <li class="nav-item"><a class="nav-link linnms__header__link d-flex align-items-center justify-content-lg-center" href="/dokumentasi" <?= ($activePage ?? '') === 'docs' ? 'aria-current="page"' : '' ?>>Docs</a></li>
        <li class="nav-item"><a class="nav-link linnms__header__link d-flex align-items-center justify-content-lg-center" href="/tentang" <?= ($activePage ?? '') === 'about' ? 'aria-current="page"' : '' ?>>Tentang</a></li>
        <li class="nav-item dropdown ms-lg-2">
          <button class="btn btn-sm btn-primary linnms__header__cta dropdown-toggle rounded-pill fw-semibold" type="button" data-bs-toggle="dropdown" aria-expanded="false">Gabung</button>
          <ul class="dropdown-menu dropdown-menu-lg-end">
            <li><a class="dropdown-item" href="#">Masuk</a></li>
            <li><a class="dropdown-item" href="#">Daftar</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>
