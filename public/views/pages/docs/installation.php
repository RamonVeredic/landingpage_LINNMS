<main id="main">
  <div class="page-head shell container-xl">
    <nav class="mb-4" aria-label="Breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a class="link-body-emphasis" href="/">Beranda</a></li>
        <li class="breadcrumb-item"><a class="link-body-emphasis" href="/dokumentasi">Dokumentasi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Instalasi</li>
      </ol>
    </nav>
    <h1>Instalasi LINNMS</h1>
    <p>Panduan pemasangan LINNMS melalui Docker Compose atau CasaOS.</p>
  </div>
  <div class="shell docs-layout container-xl">
    <aside class="doc-aside">
      <nav class="aside-sticky" aria-label="Daftar isi instalasi">
        <a class="sidebar-back" href="/dokumentasi"><i class="bi bi-arrow-left" aria-hidden="true"></i> Semua dokumentasi</a>
        <div class="aside-title">DAFTAR ISI</div>
        <a href="#sebelum-mulai">Persiapan</a>
        <a href="#docker-compose">Docker Compose</a>
        <a href="#casaos">CasaOS</a>
        <a href="#periksa">Periksa instalasi</a>
      </nav>
    </aside>
    <article class="doc-body">
      <section class="doc-section" id="sebelum-mulai">
        <h2>Persiapan</h2>
        <p>Untuk Docker Compose, siapkan Docker Engine, plugin Docker Compose, dan Git. Jika memakai CasaOS, gunakan berkas Compose khusus CasaOS. Host harus dapat mengunduh image <code>ghcr.io/ramonveredic/linnms:latest</code> dan <code>mariadb:11.4</code>.</p>
        <p>Periksa port HTTP yang akan digunakan: contoh Docker Compose memakai <code>84</code>, sedangkan contoh CasaOS memakai <code>88</code>. Keduanya juga memetakan port <code>4143</code> ke port 443 container. Sesuaikan port pada berkas Compose apabila sudah dipakai layanan lain.</p>
      </section>
      <section class="doc-section" id="docker-compose">
        <h2>Docker Compose</h2>
        <p>Gunakan <a href="https://github.com/RamonVeredic/LINNMS/blob/main/docker/docker-compose.yml" target="_blank" rel="noopener noreferrer">docker/docker-compose.yml</a> dari repository LINNMS. Berkas ini menjalankan aplikasi dan MariaDB. Konfigurasi aplikasi disimpan dalam volume <code>linnms-state</code>, data MariaDB dalam <code>linnms-db</code>, dan socket database dipakai bersama melalui <code>linnms-run</code>.</p>
        <div class="card snippet my-4 overflow-hidden">
          <div class="card-header snippet-head d-flex align-items-center justify-content-between gap-2"><span><i class="bi bi-terminal text-primary me-1" aria-hidden="true"></i> Jalankan dari direktori repository</span><button type="button" class="btn btn-sm btn-outline-primary copy-btn d-inline-flex align-items-center gap-2 flex-shrink-0" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
          <pre class="p-3 mb-0 overflow-auto"><code>git clone https://github.com/RamonVeredic/LINNMS.git
cd LINNMS
docker compose -f docker/docker-compose.yml config
docker compose -f docker/docker-compose.yml up -d
docker compose -f docker/docker-compose.yml ps</code></pre>
        </div>
        <p>Setelah aplikasi dan database berjalan, buka <code>http://IP_SERVER:84/</code>. Ganti <code>IP_SERVER</code> dengan alamat server Anda.</p>
      </section>
      <section class="doc-section" id="casaos">
        <h2>CasaOS</h2>
        <p>Gunakan <a href="https://github.com/RamonVeredic/LINNMS/blob/main/docker/casaos-compose.yaml" target="_blank" rel="noopener noreferrer">docker/casaos-compose.yaml</a> dari repository LINNMS. Impor berkas tersebut menggunakan fitur pemasangan Compose di CasaOS.</p>
        <div class="list-group step-list my-4">
          <div class="list-group-item d-flex gap-3 p-3"><span>01</span><div><strong>Periksa lokasi data</strong><p>Contoh resmi menggunakan <code>/DATA/AppData/LINNMS/state</code> untuk konfigurasi dan <code>/DATA/AppData/LINNMS/database</code> untuk MariaDB. Folder <code>/DATA/AppData/LINNMS/run</code> dipakai bersama oleh kedua container untuk socket database.</p></div></div>
          <div class="list-group-item d-flex gap-3 p-3"><span>02</span><div><strong>Sesuaikan port</strong><p>Contoh CasaOS memakai port HTTP <code>88</code> dan memetakan port <code>4143</code> ke port 443 container. Jika perlu mengubah lokasi data atau port, lakukan pada berkas Compose sebelum menjalankannya.</p></div></div>
          <div class="list-group-item d-flex gap-3 p-3"><span>03</span><div><strong>Buka LINNMS</strong><p>Setelah aplikasi dan MariaDB berjalan, buka <code>http://IP_SERVER:88/</code>.</p></div></div>
        </div>
      </section>
      <section class="doc-section" id="periksa">
        <h2>Periksa instalasi</h2>
        <p>Pastikan container aplikasi dan MariaDB berjalan, lalu buka alamat HTTP sesuai metode yang dipilih. Pada Docker Compose, gunakan perintah berikut untuk melihat status dan log jika halaman belum terbuka.</p>
        <div class="card snippet my-4 overflow-hidden">
          <div class="card-header snippet-head d-flex align-items-center justify-content-between gap-2"><span><i class="bi bi-terminal text-primary me-1" aria-hidden="true"></i> Status dan log Docker Compose</span><button type="button" class="btn btn-sm btn-outline-primary copy-btn d-inline-flex align-items-center gap-2 flex-shrink-0" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
          <pre class="p-3 mb-0 overflow-auto"><code>docker compose -f docker/docker-compose.yml ps
docker compose -f docker/docker-compose.yml logs --tail=50 app db</code></pre>
        </div>
        <p>Pada CasaOS, buka detail aplikasi untuk memeriksa status dan log container.</p>
      </section>
    </article>
  </div>
</main>
