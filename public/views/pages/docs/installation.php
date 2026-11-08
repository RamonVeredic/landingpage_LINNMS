<main id="main">
  <div class="page-head shell container-xl">
    <nav class="mb-4" aria-label="Breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a class="link-body-emphasis" href="/">Beranda</a></li>
        <li class="breadcrumb-item"><a class="link-body-emphasis" href="/dokumentasi">Docs</a></li>
        <li class="breadcrumb-item active" aria-current="page">Instalasi</li>
      </ol>
    </nav>
    <h1>Instalasi LINNMS</h1>
  </div>
  <div class="shell docs-layout container-xl">
    <aside class="doc-aside">
      <nav class="aside-sticky" aria-label="Daftar isi instalasi">
        <a class="sidebar-back" href="/dokumentasi"><i class="bi bi-arrow-left" aria-hidden="true"></i> Kembali ke Docs</a>
        <div class="aside-title">DAFTAR ISI</div>
        <a href="#persyaratan">Persyaratan</a>
        <a href="#berkas-compose">Berkas Compose</a>
        <a href="#jalankan">Jalankan</a>
        <a href="#periksa">Periksa layanan</a>
      </nav>
    </aside>
    <article class="doc-body">
      <section class="doc-section" id="persyaratan">
        <h2>Persyaratan</h2>
        <p>Siapkan Docker Engine dan plugin Docker Compose. Image LINNMS dan MariaDB tersedia untuk <code>linux/amd64</code> (prosesor Intel atau AMD 64-bit) dan <code>linux/arm64</code> (ARM 64-bit). Docker memilih image sesuai arsitektur server secara otomatis.</p>
        <p>Pastikan port <code>84</code> dan <code>4143</code> tersedia. Berkas di bawah memakai zona waktu <code>Asia/Jakarta</code> serta <code>PUID</code> dan <code>PGID</code> <code>1000</code>; sesuaikan nilainya jika server Anda berbeda.</p>
      </section>
      <section class="doc-section" id="berkas-compose">
        <h2>Berkas Compose</h2>
        <p>Simpan konfigurasi berikut sebagai <code>compose.yaml</code>.</p>
        <div class="card snippet my-4 overflow-hidden">
          <div class="card-header snippet-head d-flex align-items-center justify-content-between gap-2"><span><i class="bi bi-filetype-yml text-primary me-1" aria-hidden="true"></i> compose.yaml</span><button type="button" class="btn btn-sm btn-outline-primary copy-btn d-inline-flex align-items-center gap-2 flex-shrink-0 rounded-pill fw-semibold" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
          <pre class="p-3 mb-0 overflow-auto"><code>name: linnms
services:
  app:
    image: ${LINNMS_IMAGE:-ghcr.io/ramonveredic/linnms:latest}
    container_name: linnms
    hostname: linnms
    restart: unless-stopped
    environment:
      - PUID=1000
      - PGID=1000
      - TZ=Asia/Jakarta
      - DB_SOCKET=/run/mysqld/mysqld.sock
      - DB_NAME=linnms_appliance
      - DB_USER=root
      - DB_PASSWORD=
    ports:
      - "84:80"
      - "4143:443"
    volumes:
      - linnms-state:/config
      - linnms-run:/run/mysqld
    depends_on:
      db:
        condition: service_healthy

  db:
    image: mariadb:11.4
    container_name: linnms-db
    restart: unless-stopped
    command:
      - --skip-networking
      - --socket=/run/mysqld/mysqld.sock
    environment:
      - MARIADB_DATABASE=linnms_appliance
      - MARIADB_ALLOW_EMPTY_ROOT_PASSWORD=1
      - MARIADB_AUTO_UPGRADE=1
      - TZ=Asia/Jakarta
    volumes:
      - linnms-db:/var/lib/mysql
      - linnms-run:/run/mysqld
    healthcheck:
      test:
        - CMD-SHELL
        - mariadb --protocol=SOCKET --socket=/run/mysqld/mysqld.sock --user=root linnms_appliance --execute='SELECT 1' &gt;/dev/null 2&gt;&amp;1
      interval: 5s
      timeout: 5s
      retries: 30
      start_period: 10s
volumes:
  linnms-state:
  linnms-db:
  linnms-run:</code></pre>
        </div>
      </section>
      <section class="doc-section" id="jalankan">
        <h2>Jalankan</h2>
        <p>Jalankan perintah berikut dari direktori yang berisi <code>compose.yaml</code>.</p>
        <div class="card snippet my-4 overflow-hidden">
          <div class="card-header snippet-head d-flex align-items-center justify-content-between gap-2"><span><i class="bi bi-terminal text-primary me-1" aria-hidden="true"></i> Jalankan LINNMS</span><button type="button" class="btn btn-sm btn-outline-primary copy-btn d-inline-flex align-items-center gap-2 flex-shrink-0 rounded-pill fw-semibold" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
          <pre class="p-3 mb-0 overflow-auto"><code>docker compose -f compose.yaml config
docker compose -f compose.yaml up -d
docker compose -f compose.yaml ps</code></pre>
        </div>
        <p>Setelah kedua container berjalan, buka <code>http://IP_SERVER:84/</code> dan ganti <code>IP_SERVER</code> dengan alamat server Anda.</p>
      </section>
      <section class="doc-section" id="periksa">
        <h2>Periksa layanan</h2>
        <p>Jika halaman belum terbuka, lihat status dan log aplikasi serta database.</p>
        <div class="card snippet my-4 overflow-hidden">
          <div class="card-header snippet-head d-flex align-items-center justify-content-between gap-2"><span><i class="bi bi-terminal text-primary me-1" aria-hidden="true"></i> Status dan log</span><button type="button" class="btn btn-sm btn-outline-primary copy-btn d-inline-flex align-items-center gap-2 flex-shrink-0 rounded-pill fw-semibold" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
          <pre class="p-3 mb-0 overflow-auto"><code>docker compose -f compose.yaml ps
docker compose -f compose.yaml logs --tail=50 app db</code></pre>
        </div>
      </section>
    </article>
  </div>
</main>
