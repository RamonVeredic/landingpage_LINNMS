<?php require BASE_PATH . '/public/views/partials/docs-open.php'; ?>
      <section class="linnms__docs__section" id="instalasi" aria-labelledby="instalasi-title">
        <h2 id="instalasi-title">Panduan Instalasi LINNMS</h2>
        <p class="linnms__docs__intro">Pilih satu metode instalasi. Image LINNMS tersedia untuk AMD64 dan ARM64; Docker akan mengambil varian yang sesuai dengan server.</p>
        <nav class="linnms__docs__method__nav d-flex flex-wrap gap-2" aria-label="Bagian panduan instalasi">
          <a href="#docker-compose">Docker Compose</a>
          <a href="#casaos">CasaOS</a>
          <a href="#periksa-error">Periksa error</a>
        </nav>
        <section class="linnms__docs__method" id="docker-compose" aria-labelledby="docker-title">
          <h3 id="docker-title">Docker Compose</h3>
          <ol class="linnms__docs__steps m-0 ps-4">
            <li>
              <strong class="d-block">Siapkan Docker Engine dan plugin Compose.</strong>
              <p>Pastikan <code>docker --version</code> dan <code>docker compose version</code> berjalan. Periksa <code>uname -m</code>: <code>x86_64</code> berarti AMD64, sedangkan <code>aarch64</code> berarti ARM64. Server perlu akses ke GHCR dan Docker Hub untuk mengunduh image.</p>
            </li>
            <li>
              <strong class="d-block">Buat direktori dan berkas Compose.</strong>
              <p>Jalankan <code>mkdir -p linnms &amp;&amp; cd linnms</code>, lalu simpan YAML berikut sebagai <code>compose.yaml</code>. Port HTTP bawaan adalah <code>84</code>; port HTTPS container dipetakan ke <code>4143</code>.</p>
              <div class="linnms__docs__code" data-code>
                <div class="linnms__docs__code__head d-flex align-items-center justify-content-between"><span>compose.yaml</span><button type="button" class="linnms__docs__code__copy p-0" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
                <pre class="m-0"><code>name: linnms
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
            </li>
            <li>
              <strong class="d-block">Validasi dan jalankan layanan.</strong>
              <p>Jalankan perintah ini dari direktori yang berisi <code>compose.yaml</code>.</p>
              <div class="linnms__docs__code" data-code>
                <div class="linnms__docs__code__head d-flex align-items-center justify-content-between"><span>Terminal</span><button type="button" class="linnms__docs__code__copy p-0" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
                <pre class="m-0"><code>docker compose -f compose.yaml config
docker compose -f compose.yaml up -d
docker compose -f compose.yaml ps</code></pre>
              </div>
            </li>
            <li>
              <strong class="d-block">Buka LINNMS.</strong>
              <p>Jika layanan <code>app</code> dan <code>db</code> berjalan, buka <code>http://IP_SERVER:84/</code>. Ganti <code>IP_SERVER</code> dengan alamat server.</p>
            </li>
          </ol>
        </section>
        <section class="linnms__docs__method" id="casaos" aria-labelledby="casaos-title">
          <h3 id="casaos-title">CasaOS</h3>
          <ol class="linnms__docs__steps m-0 ps-4">
            <li>
              <strong class="d-block">Buka instalasi aplikasi kustom.</strong>
              <p>Di beranda CasaOS, klik <code>+</code> pada daftar aplikasi, pilih <code>Install a customized app</code>, lalu <code>Import</code>. Gunakan YAML CasaOS di bawah.</p>
            </li>
            <li>
              <strong class="d-block">Periksa lokasi data dan port.</strong>
              <p>YAML CasaOS menyimpan data di <code>/DATA/AppData/LINNMS/state</code>, <code>/DATA/AppData/LINNMS/database</code>, dan <code>/DATA/AppData/LINNMS/run</code>. Pastikan lokasi tersebut sesuai dengan server Anda. Port HTTP bawaan adalah <code>88</code>, sedangkan port HTTPS container dipetakan ke <code>4143</code>.</p>
            </li>
            <li>
              <strong class="d-block">Impor YAML dan pasang aplikasi.</strong>
              <p>Salin seluruh YAML berikut ke fitur impor CasaOS, periksa hasil impornya, lalu jalankan instalasi.</p>
              <div class="linnms__docs__code" data-code>
                <div class="linnms__docs__code__head d-flex align-items-center justify-content-between"><span>casaos-compose.yaml</span><button type="button" class="linnms__docs__code__copy p-0" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
                <pre class="m-0"><code>name: LINNMS
services:
  app:
    image: ghcr.io/ramonveredic/linnms:latest
    container_name: LINNMS
    hostname: LINNMS
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
      - target: 80
        published: "88"
        protocol: tcp
      - target: 443
        published: "4143"
        protocol: tcp
    volumes:
      - type: bind
        source: /DATA/AppData/LINNMS/state
        target: /config
      - type: bind
        source: /DATA/AppData/LINNMS/run
        target: /run/mysqld
    depends_on:
      db:
        condition: service_healthy

  db:
    image: mariadb:11.4
    container_name: LINNMS-db
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
      - type: bind
        source: /DATA/AppData/LINNMS/database
        target: /var/lib/mysql
      - type: bind
        source: /DATA/AppData/LINNMS/run
        target: /run/mysqld
    healthcheck:
      test:
        - CMD-SHELL
        - mariadb --protocol=SOCKET --socket=/run/mysqld/mysqld.sock --user=root linnms_appliance --execute='SELECT 1' &gt;/dev/null 2&gt;&amp;1
      interval: 5s
      timeout: 5s
      retries: 30
      start_period: 10s

x-casaos:
  architectures:
    - amd64
    - arm64
  author: RamonVeredic
  category: Network
  description:
    en_us: Network Management System
  developer: RamonVeredic
  hostname: ""
  icon: https://cdn.jsdelivr.net/gh/RamonVeredic/icon@main/LINNMS/original.png
  index: /
  is_uncontrolled: false
  main: app
  port_map: "88"
  scheme: http
  store_app_id: LINNMS
  tagline:
    en_us: Network Management System.
  title:
    custom: LINNMS
    en_us: LINNMS</code></pre>
              </div>
            </li>
            <li>
              <strong class="d-block">Buka LINNMS.</strong>
              <p>Setelah aplikasi dan database berjalan, buka <code>http://IP_SERVER:88/</code>. Ganti <code>IP_SERVER</code> dengan alamat server.</p>
            </li>
          </ol>
        </section>
        <section class="linnms__docs__method" id="periksa-error" aria-labelledby="error-title">
          <h3 id="error-title">Periksa pesan error</h3>
          <p>Untuk Docker Compose, jalankan perintah ini dari direktori <code>compose.yaml</code>. Hasilnya menunjukkan kesalahan konfigurasi, status container, dan log aplikasi serta database.</p>
          <div class="linnms__docs__code" data-code>
            <div class="linnms__docs__code__head d-flex align-items-center justify-content-between"><span>Terminal</span><button type="button" class="linnms__docs__code__copy p-0" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
            <pre class="m-0"><code>docker compose -f compose.yaml config
docker compose -f compose.yaml ps --all
docker compose -f compose.yaml logs --tail=100 app db</code></pre>
          </div>
          <p>Untuk CasaOS, buka detail aplikasi <code>LINNMS</code> dan container <code>LINNMS-db</code>, lalu lihat log masing-masing. Gunakan pesan error yang muncul di sana sebagai dasar perbaikan.</p>
        </section>
      </section>
    </article>
  </div>
</main>
