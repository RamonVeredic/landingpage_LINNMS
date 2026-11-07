<!doctype html>
<html lang="id" data-bs-theme="dark">
<?php
$pageTitle = 'Instalasi LINNMS | Dokumentasi';
$pageDescription = 'Panduan instalasi LINNMS menggunakan berkas Docker Compose resmi atau CasaOS.';
$activePage = 'docs';
include __DIR__ . '/assets/parsial/head.php';
?>
<body>
<?php include __DIR__ . '/assets/parsial/navbar.php'; ?>
<main id="main">
  <div class="page-head shell container-xl">
    <div class="crumb"><a href="index.php">Beranda</a><span>/</span><a href="docs.php">Dokumentasi</a><span>/</span>Instalasi</div>
    <h1>Instalasi LINNMS</h1>
    <p>Pilih Docker Compose atau CasaOS. Keduanya memakai berkas yang tersedia di repository LINNMS.</p>
  </div>
  <div class="shell docs-layout container-xl">
    <aside class="doc-aside">
      <nav class="aside-sticky" aria-label="Daftar isi instalasi">
        <a class="sidebar-back" href="docs.php"><i class="bi bi-arrow-left" aria-hidden="true"></i> Semua dokumentasi</a>
        <div class="aside-title">DAFTAR ISI</div>
        <a href="#sebelum-mulai">Sebelum mulai</a>
        <a href="#docker-compose">Docker Compose</a>
        <a href="#casaos">CasaOS</a>
        <a href="#periksa">Periksa instalasi</a>
      </nav>
    </aside>
    <article class="doc-body">
      <section class="doc-section" id="sebelum-mulai">
        <h2>Sebelum mulai</h2>
        <p>Siapkan host dengan Docker Engine dan plugin Docker Compose, atau CasaOS yang dapat memasang aplikasi dari berkas Compose. Perintah Docker Compose di bawah juga memerlukan Git. Pastikan host dapat mengambil image <code>ghcr.io/ramonveredic/linnms:latest</code> dan <code>mariadb:11.4</code>.</p>
        <p>Periksa port HTTP yang akan digunakan: contoh Docker Compose memakai <code>84</code>, sedangkan contoh CasaOS memakai <code>88</code>. Keduanya juga memetakan port <code>4143</code> ke port 443 container. Sesuaikan port pada berkas Compose apabila sudah dipakai layanan lain.</p>
      </section>
      <section class="doc-section" id="docker-compose">
        <h2>Docker Compose</h2>
        <p>Gunakan <a href="https://github.com/RamonVeredic/LINNMS/blob/main/docker/docker-compose.yml" target="_blank" rel="noopener noreferrer">docker/docker-compose.yml</a> dari repository LINNMS. Berkas ini menjalankan aplikasi dan MariaDB. Konfigurasi aplikasi disimpan dalam volume <code>linnms-state</code>, data MariaDB dalam <code>linnms-db</code>, dan socket database dipakai bersama melalui <code>linnms-run</code>.</p>
        <div class="snippet">
          <div class="snippet-head"><span><span class="terminal-dot"></span> Jalankan dari direktori repository</span><button type="button" class="copy-btn" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
          <pre><code>git clone https://github.com/RamonVeredic/LINNMS.git
cd LINNMS
docker compose -f docker/docker-compose.yml config
docker compose -f docker/docker-compose.yml up -d
docker compose -f docker/docker-compose.yml ps</code></pre>
        </div>
        <p>Setelah kedua container berjalan, buka <code>http://IP_SERVER:84/</code>. Ubah <code>IP_SERVER</code> menjadi alamat host Anda.</p>
      </section>
      <section class="doc-section" id="casaos">
        <h2>CasaOS</h2>
        <p>Gunakan <a href="https://github.com/RamonVeredic/LINNMS/blob/main/docker/casaos-compose.yaml" target="_blank" rel="noopener noreferrer">docker/casaos-compose.yaml</a> dari repository LINNMS. Impor isi berkas tersebut melalui pemasangan aplikasi dari Compose di CasaOS.</p>
        <div class="step-list">
          <div><span>01</span><div><strong>Periksa lokasi data</strong><p>Contoh resmi menggunakan <code>/DATA/AppData/LINNMS/state</code> untuk konfigurasi dan <code>/DATA/AppData/LINNMS/database</code> untuk MariaDB. Folder <code>/DATA/AppData/LINNMS/run</code> dipakai bersama oleh kedua container untuk socket database.</p></div></div>
          <div><span>02</span><div><strong>Periksa port lalu pasang</strong><p>Contoh CasaOS memakai port HTTP <code>88</code> dan memetakan port <code>4143</code> ke port 443 container. Jika perlu mengubah lokasi data atau port, lakukan pada berkas Compose sebelum menjalankannya.</p></div></div>
          <div><span>03</span><div><strong>Buka LINNMS</strong><p>Setelah aplikasi dan MariaDB berjalan, buka <code>http://IP_SERVER:88/</code>.</p></div></div>
        </div>
      </section>
      <section class="doc-section" id="periksa">
        <h2>Periksa instalasi</h2>
        <p>Pastikan container aplikasi dan MariaDB berjalan, lalu buka alamat HTTP sesuai metode yang dipilih. Pada Docker Compose, gunakan perintah berikut untuk melihat status dan log jika halaman belum terbuka.</p>
        <div class="snippet">
          <div class="snippet-head"><span><span class="terminal-dot"></span> Status dan log Docker Compose</span><button type="button" class="copy-btn" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
          <pre><code>docker compose -f docker/docker-compose.yml ps
docker compose -f docker/docker-compose.yml logs --tail=50 app db</code></pre>
        </div>
        <p>Untuk pemasangan melalui CasaOS, periksa status dan log kedua container pada aplikasi CasaOS.</p>
      </section>
    </article>
  </div>
</main>
<?php include __DIR__ . '/assets/parsial/foother.php'; ?>
<script src="assets/js/script.js" defer></script>
</body>
</html>
