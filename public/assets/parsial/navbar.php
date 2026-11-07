 <a class="skip-link" href="#main">Langsung ke konten</a>
 <header class="site-header">
      <div class="shell header-inner container-xl">
        <a class="brand" href="index.php"
          ><img
            class="brand-logo"
            src="assets/linnms-logo.png"
            alt=""
            width="44"
            height="44"
            decoding="async"
          /><span
            ><strong>LINNMS</strong
            ><small>NETWORK MANAGEMENT</small></span
          ></a
        >
        <nav class="primary-nav" id="primary-nav" aria-label="Navigasi utama">
          <a class="nav-link-main" href="index.php" <?= ($activePage ?? '') === 'home' ? 'aria-current="page"' : '' ?>>Beranda</a
          ><a class="nav-link-main" href="fitur.php" <?= ($activePage ?? '') === 'features' ? 'aria-current="page"' : '' ?>>Fitur</a><a class="nav-link-main" href="docs.php" <?= ($activePage ?? '') === 'docs' ? 'aria-current="page"' : '' ?>>Dokumentasi</a
          ><a class="nav-link-main" href="about.php" <?= ($activePage ?? '') === 'about' ? 'aria-current="page"' : '' ?>>Tentang</a>
          <div class="dropdown auth-menu">
            <button
              class="btn btn-sm btn-brand nav-cta dropdown-toggle"
              type="button"
              data-bs-toggle="dropdown"
              data-bs-display="static"
              aria-expanded="false"
            >
             Gabung
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Masuk</a></li>
              <li><a class="dropdown-item" href="#">Daftar</a></li>
            </ul>
          </div>
        </nav>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-nav" aria-label="Buka navigasi"> <span></span><span></span><span></span>
        </button>
      </div>
    </header>
