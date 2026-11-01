 <a class="skip-link" href="#main">Langsung ke konten</a>
 <header class="site-header">
      <div class="shell header-inner">
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
          <a href="index.php" <?= ($activePage ?? '') === 'home' ? 'aria-current="page"' : '' ?>>Beranda</a
          ><a href="fitur.php" <?= ($activePage ?? '') === 'features' ? 'aria-current="page"' : '' ?>>Fitur</a><a href="docs.php" <?= ($activePage ?? '') === 'docs' ? 'aria-current="page"' : '' ?>>Dokumentasi</a
          ><a href="about.php" <?= ($activePage ?? '') === 'about' ? 'aria-current="page"' : '' ?>>Tentang</a>
          <div class="auth-menu">
            <button
              class="header-cta auth-trigger"
              type="button"
              aria-expanded="false"
              aria-controls="auth-menu-panel"
            >
             Gabung<span class="auth-caret" aria-hidden="true"></span>
            </button>
            <div class="auth-menu-panel" id="auth-menu-panel" hidden>
              <a class="auth-link is-unavailable" data-auth-link="login" aria-disabled="true" tabindex="-1">Masuk<small>URL belum tersedia</small></a>
              <a class="auth-link is-unavailable" data-auth-link="register" aria-disabled="true" tabindex="-1">Daftar<small>URL belum tersedia</small></a
              >
            </div>
          </div>
        </nav>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-nav" aria-label="Buka navigasi"> <span></span><span></span><span></span>
        </button>
      </div>
    </header>