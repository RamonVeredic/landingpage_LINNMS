<main id="main" class="manual-page">
  <header class="manual-head container-xl">
    <nav aria-label="Breadcrumb">
      <ol class="breadcrumb mb-3 small">
        <li class="breadcrumb-item"><a class="link-body-emphasis text-success-emphasis" href="/">Beranda</a></li>
        <?php if ($docSection === 'installation'): ?>
        <li class="breadcrumb-item active" aria-current="page">Documentai</li>
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
      <?php if ($docSection === 'installation'): ?>
      <section class="manual-section" id="instalasi" aria-labelledby="instalasi-title">
        <h2 id="instalasi-title">Panduan Instalasi LINNMS</h2>
        <p class="manual-intro">Pilih satu metode instalasi. Image LINNMS tersedia untuk AMD64 dan ARM64; Docker akan mengambil varian yang sesuai dengan server.</p>
        <nav class="manual-method-nav d-flex flex-wrap gap-2" aria-label="Bagian panduan instalasi">
          <a href="#docker-compose">Docker Compose</a>
          <a href="#casaos">CasaOS</a>
          <a href="#periksa-error">Periksa error</a>
        </nav>
        <section class="manual-method" id="docker-compose" aria-labelledby="docker-title">
          <h3 id="docker-title">Docker Compose</h3>
          <ol class="manual-steps">
            <li>
              <strong>Siapkan Docker Engine dan plugin Compose.</strong>
              <p>Pastikan <code>docker --version</code> dan <code>docker compose version</code> berjalan. Periksa <code>uname -m</code>: <code>x86_64</code> berarti AMD64, sedangkan <code>aarch64</code> berarti ARM64. Server perlu akses ke GHCR dan Docker Hub untuk mengunduh image.</p>
            </li>
            <li>
              <strong>Buat direktori dan berkas Compose.</strong>
              <p>Jalankan <code>mkdir -p linnms &amp;&amp; cd linnms</code>, lalu simpan YAML berikut sebagai <code>compose.yaml</code>. Port HTTP bawaan adalah <code>84</code>; port HTTPS container dipetakan ke <code>4143</code>.</p>
              <div class="manual-code" data-code>
                <div class="manual-code-head"><span>compose.yaml</span><button type="button" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
                <pre><code>name: linnms
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
              <strong>Validasi dan jalankan layanan.</strong>
              <p>Jalankan perintah ini dari direktori yang berisi <code>compose.yaml</code>.</p>
              <div class="manual-code" data-code>
                <div class="manual-code-head"><span>Terminal</span><button type="button" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
                <pre><code>docker compose -f compose.yaml config
docker compose -f compose.yaml up -d
docker compose -f compose.yaml ps</code></pre>
              </div>
            </li>
            <li>
              <strong>Buka LINNMS.</strong>
              <p>Jika layanan <code>app</code> dan <code>db</code> berjalan, buka <code>http://IP_SERVER:84/</code>. Ganti <code>IP_SERVER</code> dengan alamat server.</p>
            </li>
          </ol>
        </section>
        <section class="manual-method" id="casaos" aria-labelledby="casaos-title">
          <h3 id="casaos-title">CasaOS</h3>
          <ol class="manual-steps">
            <li>
              <strong>Buka instalasi aplikasi kustom.</strong>
              <p>Di beranda CasaOS, klik <code>+</code> pada daftar aplikasi, pilih <code>Install a customized app</code>, lalu <code>Import</code>. Gunakan YAML CasaOS di bawah.</p>
            </li>
            <li>
              <strong>Periksa lokasi data dan port.</strong>
              <p>YAML CasaOS menyimpan data di <code>/DATA/AppData/LINNMS/state</code>, <code>/DATA/AppData/LINNMS/database</code>, dan <code>/DATA/AppData/LINNMS/run</code>. Pastikan lokasi tersebut sesuai dengan server Anda. Port HTTP bawaan adalah <code>88</code>, sedangkan port HTTPS container dipetakan ke <code>4143</code>.</p>
            </li>
            <li>
              <strong>Impor YAML dan pasang aplikasi.</strong>
              <p>Salin seluruh YAML berikut ke fitur impor CasaOS, periksa hasil impornya, lalu jalankan instalasi.</p>
              <div class="manual-code" data-code>
                <div class="manual-code-head"><span>casaos-compose.yaml</span><button type="button" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
                <pre><code>name: LINNMS
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
              <strong>Buka LINNMS.</strong>
              <p>Setelah aplikasi dan database berjalan, buka <code>http://IP_SERVER:88/</code>. Ganti <code>IP_SERVER</code> dengan alamat server.</p>
            </li>
          </ol>
        </section>
        <section class="manual-method" id="periksa-error" aria-labelledby="error-title">
          <h3 id="error-title">Periksa pesan error</h3>
          <p>Untuk Docker Compose, jalankan perintah ini dari direktori <code>compose.yaml</code>. Hasilnya menunjukkan kesalahan konfigurasi, status container, dan log aplikasi serta database.</p>
          <div class="manual-code" data-code>
            <div class="manual-code-head"><span>Terminal</span><button type="button" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
            <pre><code>docker compose -f compose.yaml config
docker compose -f compose.yaml ps --all
docker compose -f compose.yaml logs --tail=100 app db</code></pre>
          </div>
          <p>Untuk CasaOS, buka detail aplikasi <code>LINNMS</code> dan container <code>LINNMS-db</code>, lalu lihat log masing-masing. Gunakan pesan error yang muncul di sana sebagai dasar perbaikan.</p>
        </section>
      </section>
      <?php endif; ?>
      <?php if ($docSection === 'mapping'): ?>
      <section class="manual-section" id="pemetaan-data" aria-labelledby="pemetaan-title">
        <h2 id="pemetaan-title">Pemetaan Data</h2>
        <details class="manual-details" id="zte">
          <summary><span><strong>ZTE</strong><small>GPON · C300 / C320</small></span><i class="bi bi-chevron-down" aria-hidden="true"></i></summary>
          <div class="manual-details-body">
            <div class="manual-table-wrap" tabindex="0" role="region" aria-label="Tabel pemetaan data ZTE">
              <table class="table table-sm align-top mb-0 manual-table">
<caption class="visually-hidden">Pemetaan data perangkat ZTE</caption>
<thead><tr><th scope="col">Data</th><th scope="col">Sumber</th><th scope="col">OID / perintah</th><th scope="col">Deskripsi</th></tr></thead>
<tbody>
  <tr>
    <th scope="row">Nama perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.1.5.0</code></td>
    <td>Nama sistem perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Uptime</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.1.3.0</code></td>
    <td>Waktu aktif perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Deskripsi sistem</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.1.1.0</code></td>
    <td>Deskripsi perangkat, termasuk informasi model dan versi.</td>
  </tr>
  <tr>
    <th scope="row">Model perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.47.1.1.1.1.13</code></td>
    <td>Model perangkat dari inventaris fisik.</td>
  </tr>
  <tr>
    <th scope="row">Serial perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.47.1.1.1.1.11.1</code></td>
    <td>Nomor seri chassis perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Waktu perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.25.1.2.0</code></td>
    <td>Tanggal dan waktu perangkat melalui SNMP.</td>
  </tr>
  <tr>
    <th scope="row">Waktu perangkat</th>
    <td>Telnet</td>
    <td><code class="text-break">show clock</code></td>
    <td>Tanggal dan waktu perangkat melalui Telnet.</td>
  </tr>
  <tr>
    <th scope="row">Nama ONU</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1012.3.28.1.1.2.{ponIndex}.{onuId}</code></td>
    <td>Baca dan ubah nama ONU.</td>
  </tr>
  <tr>
    <th scope="row">Deskripsi ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1012.3.28.1.1.3.{ponIndex}.{onuId}</code></td>
    <td>Keterangan ONU.</td>
  </tr>
  <tr>
    <th scope="row">Vendor ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1012.3.28.1.1.4.{ponIndex}.{onuId}</code></td>
    <td>Nama vendor ONU.</td>
  </tr>
  <tr>
    <th scope="row">Serial ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1012.3.28.1.1.5.{ponIndex}.{onuId}</code></td>
    <td>Nomor seri ONU.</td>
  </tr>
  <tr>
    <th scope="row">Status ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1012.3.28.2.1.2.{ponIndex}.{onuId}</code></td>
    <td>Status operasional ONU.</td>
  </tr>
  <tr>
    <th scope="row">RX ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1082.500.20.2.2.2.1.10.{ifIndex}.{onuId}.1</code></td>
    <td>Daya terima ONU, dalam dBm.</td>
  </tr>
  <tr>
    <th scope="row">TX ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1082.500.20.2.2.2.1.14.{ifIndex}.{onuId}.1</code></td>
    <td>Daya kirim ONU, dalam dBm.</td>
  </tr>
  <tr>
    <th scope="row">Suhu ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1082.500.20.2.2.2.1.19.{ifIndex}.{onuId}.1</code></td>
    <td>Suhu ONU, dalam derajat Celsius.</td>
  </tr>
  <tr>
    <th scope="row">CPU dan memori perangkat</th>
    <td>Telnet</td>
    <td><code class="text-break">show processor</code></td>
    <td>Satu keluaran berisi persentase penggunaan CPU dan memori.</td>
  </tr>
  <tr>
    <th scope="row">Suhu card</th>
    <td>Telnet</td>
    <td><code class="text-break">show card-temperature</code></td>
    <td>Suhu pada card perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Kipas</th>
    <td>Telnet</td>
    <td><code class="text-break">show fan</code></td>
    <td>Kondisi kipas perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Inventaris card</th>
    <td>Telnet</td>
    <td><code class="text-break">show card</code></td>
    <td>Daftar card pada perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Versi firmware</th>
    <td>Telnet</td>
    <td><code class="text-break">show version-running</code></td>
    <td>Versi firmware yang berjalan pada perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Daya optik per ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show pon power attenuation gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Nilai daya optik pada ONU tertentu.</td>
  </tr>
  <tr>
    <th scope="row">RX ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show pon power onu-rx gpon-olt_{ponPath}</code></td>
    <td>Daya terima pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">TX ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show pon power onu-tx gpon-olt_{ponPath}</code></td>
    <td>Daya kirim pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">RX OLT</th>
    <td>Telnet</td>
    <td><code class="text-break">show pon power olt-rx gpon-olt_{ponPath}</code></td>
    <td>Daya terima pada sisi OLT.</td>
  </tr>
  <tr>
    <th scope="row">Detail ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon onu detail-info gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Informasi detail ONU.</td>
  </tr>
  <tr>
    <th scope="row">Port Ethernet ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon remote-onu interface eth gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Status dan pengaturan port LAN. VLAN dan DHCP dibaca melalui perintah terpisah di bawah.</td>
  </tr>
  <tr>
    <th scope="row">VLAN port LAN ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon remote-onu vlan eth gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Mode dan VLAN tiap port LAN.</td>
  </tr>
  <tr>
    <th scope="row">DHCP port LAN ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon remote-onu dhcp-ip ethuni gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Pengaturan DHCP tiap port LAN.</td>
  </tr>
  <tr>
    <th scope="row">Wi-Fi dan VEIP ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon remote-onu interface {wifi|veip} gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Status dan konfigurasi antarmuka Wi-Fi atau VEIP.</td>
  </tr>
  <tr>
    <th scope="row">TR-069 dan akses jarak jauh ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon remote-onu tr069-mgmt gpon-onu_{ponPath}:{onuId}</code> / <code class="text-break">show gpon remote-onu security-mgmt gpon-onu_{ponPath}:{onuId} {index}</code></td>
    <td>Konfigurasi TR-069 atau aturan akses jarak jauh.</td>
  </tr>
  <tr>
    <th scope="row">Konfigurasi layanan ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show running-config</code></td>
    <td>Sumber konfigurasi VLAN, WAN, VEIP, Wi-Fi, dan layanan ONU lainnya.</td>
  </tr>
  <tr><th scope="row" colspan="4">Pengaturan ZTE</th></tr>
  <tr>
    <th scope="row">Status PON</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.2.1.2.2.1.7.{ifIndex}</code></td>
    <td>Baca dan ubah status admin: Enable = 1; Disable = 2.</td>
  </tr>
  <tr>
    <th scope="row">Link PON</th>
    <td>SNMP GET</td>
    <td><code class="text-break">1.3.6.1.2.1.2.2.1.8.{ifIndex}</code></td>
    <td>Status operasional port PON.</td>
  </tr>
  <tr>
    <th scope="row">Keterangan PON</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.2.1.31.1.1.1.18.{ifIndex}</code></td>
    <td>Baca dan ubah deskripsi port PON.</td>
  </tr>
  <tr>
    <th scope="row">Aktifkan / nonaktifkan ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">action active</code> / <code class="text-break">action deactive</code></td>
    <td>Di mode <code>interface gpon-onu_{ponPath}:{onuId}</code>.</td>
  </tr>
  <tr>
    <th scope="row">Port LAN ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">interface eth eth_0/{port} state {unlock|lock}</code></td>
    <td>Enable / Disable. Jalankan di mode <code>pon-onu-mng gpon-onu_{ponPath}:{onuId}</code>.</td>
  </tr>
  <tr>
    <th scope="row">Pengaturan port LAN ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">interface eth eth_0/{port} {pengaturan}</code></td>
    <td>Kecepatan dan negosiasi, kontrol daya, filter PPPoE, dan deteksi loop. Pada mode pengelolaan ONU.</td>
  </tr>
  <tr>
    <th scope="row">VLAN dan DHCP port LAN ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">vlan port eth_0/{port} ...</code> / <code class="text-break">dhcp-ip ethuni eth_0/{port} ...</code></td>
    <td>Mode VLAN, daftar VLAN, dan kebijakan DHCP. Pada mode pengelolaan ONU.</td>
  </tr>
  <tr>
    <th scope="row">Reboot / reset ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">reboot</code> / <code class="text-break">restore</code></td>
    <td>Di mode <code>pon-onu-mng gpon-onu_{ponPath}:{onuId}</code>.</td>
  </tr>
  <tr>
    <th scope="row">Registrasi / hapus ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">onu {onuId} type {type} sn {serial}</code> / <code class="text-break">no onu {onuId}</code></td>
    <td>Daftarkan, ubah tipe, atau hapus ONU di mode <code>interface gpon-olt_{ponPath}</code>.</td>
  </tr>
  <tr>
    <th scope="row">Pengaturan ONU lainnya</th>
    <td>Telnet</td>
    <td><code class="text-break">tr069-mgmt</code>, <code class="text-break">security-mgmt</code>, <code class="text-break">wan-ip</code>, <code class="text-break">veip</code>, <code class="text-break">interface wifi</code></td>
    <td>TR-069, akses jarak jauh, WAN, VEIP, dan Wi-Fi di mode pengelolaan ONU.</td>
  </tr>
  <tr>
    <th scope="row">Status Wi-Fi / VEIP ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">interface wifi wifi_0/{port} state {lock|unlock}</code> / <code class="text-break">veip {port} state {lock|unlock}</code></td>
    <td>Aktifkan atau nonaktifkan antarmuka di mode pengelolaan ONU.</td>
  </tr>
  <tr>
    <th scope="row">VLAN dan profil</th>
    <td>Telnet</td>
    <td><code class="text-break">vlan {vlanId}</code>, <code class="text-break">no vlan {vlanId}</code>, <code class="text-break">profile {traffic|tcont} ...</code>, <code class="text-break">onu profile {vlan|ip} ...</code></td>
    <td>Buat atau hapus VLAN; kelola profil layanan pada mode <code>gpon</code>.</td>
  </tr>
  <tr>
    <th scope="row">Port uplink</th>
    <td>Telnet / SNMP SET</td>
    <td><code class="text-break">interface {portRef}</code> / <code class="text-break">1.3.6.1.2.1.2.2.1.7.{ifIndex}</code></td>
    <td>Atur status, kecepatan, duplex, flow control, deskripsi, dan VLAN. Status juga dapat diubah via SNMP.</td>
  </tr>
</tbody>
</table>
            </div>
          </div>
        </details>
        <details class="manual-details" id="hioso">
          <summary><span><strong>HIOSO</strong><small>EPON · 2 / 4 port</small></span><i class="bi bi-chevron-down" aria-hidden="true"></i></summary>
          <div class="manual-details-body">
            <div class="manual-table-wrap" tabindex="0" role="region" aria-label="Tabel pemetaan data HIOSO">
              <table class="table table-sm align-top mb-0 manual-table">
<caption class="visually-hidden">Pemetaan data perangkat HIOSO</caption>
<thead><tr><th scope="col">Data</th><th scope="col">Sumber</th><th scope="col">OID / perintah</th><th scope="col">Deskripsi</th></tr></thead>
<tbody>
  <tr>
    <th scope="row">Nama perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.1.5.0</code></td>
    <td>Nama sistem perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Uptime</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.1.3.0</code></td>
    <td>Waktu aktif perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Waktu perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.25.1.2.0</code></td>
    <td>Tanggal dan waktu perangkat.</td>
  </tr>
  <tr>
    <th scope="row">MAC perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.2.2.1.6.2</code></td>
    <td>Alamat MAC perangkat pada interface 2.</td>
  </tr>
  <tr>
    <th scope="row">MAC perangkat (alternatif)</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.2.2.1.6</code></td>
    <td>Alamat MAC perangkat dari daftar interface.</td>
  </tr>
  <tr>
    <th scope="row">Versi firmware, model, dan serial perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.1.8.1.1.2.1</code></td>
    <td>Satu respons berisi versi firmware, model, dan nomor seri, dipisahkan tanda <code>/</code>.</td>
  </tr>
  <tr>
    <th scope="row">CPU perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.25.3.3.1.2.768</code></td>
    <td>Persentase penggunaan CPU perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Kapasitas memori</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.25.2.3.1.5.1</code></td>
    <td>Total kapasitas memori perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Memori terpakai</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.25.2.3.1.6.1</code></td>
    <td>Jumlah memori yang digunakan perangkat.</td>
  </tr>
  <tr>
    <th scope="row">MAC ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.11.1.{pon}.{onuId}</code></td>
    <td>Alamat MAC ONU.</td>
  </tr>
  <tr>
    <th scope="row">Nama ONU</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.37.1.{pon}.{onuId}</code></td>
    <td>Baca dan ubah nama ONU.</td>
  </tr>
  <tr>
    <th scope="row">Status ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.39.1.{pon}.{onuId}</code></td>
    <td>Status operasional ONU.</td>
  </tr>
  <tr>
    <th scope="row">RX ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.14.2.1.8.1.{pon}.{onuId}</code></td>
    <td>Daya terima pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">TX ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.14.2.1.4.1.{pon}.{onuId}</code></td>
    <td>Daya kirim pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">Suhu ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.14.2.1.7.1.{pon}.{onuId}</code></td>
    <td>Suhu pada ONU.</td>
  </tr>
  <tr>
    <th scope="row">Status port LAN ONU</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.1.2.1.5.1.{pon}.{onuId}.{port}</code></td>
    <td>Baca status; ubah enable/disable port dan auto-negotiation melalui nilai kontrol tujuh byte. Byte ke-6 untuk status port, byte ke-4 untuk auto-negotiation.</td>
  </tr>
  <tr>
    <th scope="row">Port uplink</th>
    <td>SNMP GET</td>
    <td><code class="text-break">1.3.6.1.2.1.31.1.1.1.1.{ifIndex}</code>, <code class="text-break">1.3.6.1.2.1.2.2.1.{7|8}.{ifIndex}</code>, <code class="text-break">1.3.6.1.2.1.31.1.1.1.15.{ifIndex}</code></td>
    <td>Nama, status admin dan link, serta kecepatan uplink.</td>
  </tr>
  <tr>
    <th scope="row">Trafik PON</th>
    <td>Telnet</td>
    <td><code class="text-break">show olt {oltId} rate pon {pon}</code></td>
    <td>Laju trafik pada port PON.</td>
  </tr>
  <tr>
    <th scope="row">Informasi modul optik PON</th>
    <td>Telnet</td>
    <td><code class="text-break">show optical-ddm pon {oltId}/{pon}</code></td>
    <td>Informasi DDM modul optik PON.</td>
  </tr>
  <tr><th scope="row" colspan="4">Status dan pengaturan HIOSO</th></tr>
  <tr>
    <th scope="row">Status port PON</th>
    <td>SNMP GET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.1.1.1.{kolom}.1.1.{pon}</code></td>
    <td>Kolom 1–6: enable, link, auto-negotiation, kecepatan, duplex, dan flow control.</td>
  </tr>
  <tr>
    <th scope="row">Enable / Disable PON</th>
    <td>SNMP SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.1.4.1.1.1.{pon}</code></td>
    <td>Nilai 1 untuk enable; 0 untuk disable.</td>
  </tr>
  <tr>
    <th scope="row">Flow control PON</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.1.4.1.4.1.{pon}</code></td>
    <td>Nilai 1 untuk enable; 0 untuk disable.</td>
  </tr>
  <tr>
    <th scope="row">Mode autentikasi ONU</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.35.1.{pon}.{onuId}</code></td>
    <td>Undef = 0; Pass = 1; Deny = 2.</td>
  </tr>
  <tr>
    <th scope="row">Reboot ONU</th>
    <td>SNMP SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.22.1.{pon}.{onuId}</code></td>
    <td>Kirim nilai 1 untuk menjalankan aksi.</td>
  </tr>
  <tr>
    <th scope="row">Enable / Disable ONU</th>
    <td>SNMP SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.{23|24}.1.{pon}.{onuId}</code></td>
    <td>Kolom 23 untuk enable; kolom 24 untuk disable. Keduanya menerima nilai 1.</td>
  </tr>
  <tr>
    <th scope="row">Reset ONU</th>
    <td>SNMP SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.40.1.{pon}.{onuId}</code></td>
    <td>Kirim nilai 1 untuk menjalankan aksi restore.</td>
  </tr>
  <tr>
    <th scope="row">Hapus ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">delete onu {oltId}/{pon}:{onuId}</code></td>
    <td>Dijalankan di mode EPON setelah alamat MAC ONU diverifikasi.</td>
  </tr>
</tbody>
</table>
            </div>
          </div>
        </details>
        <p class="manual-note">Penanda dalam kurung kurawal diganti sesuai indeks, jalur PON, port, atau identitas ONU pada perangkat. Nilai dengan tanda <code>|</code> menunjukkan pilihan.</p>
      </section>
      <?php endif; ?>
      <?php if ($docSection === 'changelog'): ?>
      <section class="manual-section" id="changelog" aria-labelledby="changelog-title">
        <h2 id="changelog-title">Changelog</h2>
        <details class="manual-details manual-release" name="changelog" open>
          <summary><strong>v1.0.3</strong><i class="bi bi-chevron-down" aria-hidden="true"></i></summary>
          <div class="manual-details-body"><ul class="manual-changes">
          <li>fix: Service kapaabilitas</li>
          <li>fix: Scanning coverage</li>
          <li>fix: Bug view OLT ZTE, Switch</li>
          <li>Add: flexsibilitas setting admin</li>
          <li>Add: Worker change</li>
        </ul></div>
        </details>
        <details class="manual-details manual-release" name="changelog">
          <summary><strong>v1.0.2</strong><i class="bi bi-chevron-down" aria-hidden="true"></i></summary>
          <div class="manual-details-body"><ul class="manual-changes">
          <li>fix: Service WaGateway</li>
          <li>fix: Service Workers</li>
          <li>fix: Trafik Networking</li>
          <li>fix: Monitoring Event</li>
          <li>Update Format pesan group notifikasi</li>
          <li>Update riwayat notifikasi</li>
          <li>Optimasi Edit Delete Device</li>
        </ul></div>
        </details>
        <details class="manual-details manual-release" name="changelog">
          <summary><strong>v1.0.0</strong><i class="bi bi-chevron-down" aria-hidden="true"></i></summary>
          <div class="manual-details-body"><h4>Perangkat yang didukung</h4>
        <h5>OLT · Read &amp; Write</h5>
        <ul class="manual-changes">
          <li>ZTE C300 (GPON)</li>
          <li>ZTE C320 (GPON)</li>
          <li>Hioso 2 Port (EPON)</li>
          <li>Hioso 4 Port (EPON)</li>
          <li>Hisfocus 2 Port (EPON)</li>
          <li>Hisfocus 4 Port (EPON)</li>
        </ul>
        <h5>OLT · Read Only</h5>
        <ul class="manual-changes">
          <li>ZTE 6xx Series</li>
          <li>ZTE EPON</li>
          <li>HSGQ (GPON / EPON)</li>
          <li>C-Data (GPON / EPON)</li>
          <li>VSOL (GPON / EPON)</li>
          <li>FiberHome (GPON)</li>
        </ul>
        <h5>Router &amp; Switch · Read Only</h5>
        <ul class="manual-changes">
          <li>MikroTik</li>
          <li>Cisco Catalyst S Series</li>
        </ul>
        <h4>Notifikasi</h4>
        <ul class="manual-changes">
          <li>WhatsApp Gateway</li>
          <li>Telegram Bot</li>
        </ul>
        <h5>WhatsApp Gateway yang didukung</h5>
        <ul class="manual-changes">
          <li>Fonnte</li>
          <li>StarSender</li>
          <li>WAGate</li>
          <li>WPPConnect</li>
        </ul></div>
        </details>
      </section>
      <?php endif; ?>
    </article>
  </div>
</main>
