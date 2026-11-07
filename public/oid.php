<!doctype html>
<html lang="id" data-bs-theme="dark">
<?php
$pageTitle = 'OID perangkat | Dokumentasi LINNMS';
$pageDescription = 'OID yang digunakan LINNMS untuk membaca data perangkat melalui SNMP.';
$activePage = 'docs';
include __DIR__ . '/assets/parsial/head.php';
?>
<body>
<?php include __DIR__ . '/assets/parsial/navbar.php'; ?>
<main id="main">
  <div class="container-xl py-5">
    <nav aria-label="Breadcrumb">
      <ol class="breadcrumb small mb-4">
        <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
        <li class="breadcrumb-item"><a href="docs.php">Dokumentasi</a></li>
        <li class="breadcrumb-item active" aria-current="page">OID perangkat</li>
      </ol>
    </nav>
    <div class="row">
      <div class="col-lg-9">
        <h1 class="h2 fw-bold mb-3">OID perangkat</h1>
        <p class="text-body-secondary mb-0">Daftar OID yang digunakan LINNMS untuk membaca informasi perangkat melalui SNMP, disusun menurut vendor.</p>
      </div>
    </div>
  </div>
  <div class="container-xl pb-5 oid-page">
    <div class="oid-vendor-list">
      <label class="visually-hidden" for="oid-vendor-search">Cari vendor</label>
      <input class="form-control oid-vendor-search" id="oid-vendor-search" type="search" placeholder="Cari vendor" autocomplete="off" data-oid-search>
      <p class="oid-search-empty" data-oid-empty hidden>Vendor tidak ditemukan.</p>
      <details class="oid-vendor" id="zte" data-oid-vendor="zte" open>
        <summary><span>ZTE</span><i class="bi bi-chevron-down" aria-hidden="true"></i></summary>
        <div class="oid-vendor-content">
        <p>LINNMS membaca identitas dan kondisi perangkat, data ONU, serta nilai optik ONU melalui OID berikut.</p>
        <div class="table-responsive rounded-3 border border-secondary-subtle" tabindex="0" role="region" aria-label="Tabel OID ZTE">
          <table class="table table-hover align-middle mb-0 oid-document-table">
            <thead><tr><th>Informasi</th><th>OID</th><th>Digunakan LINNMS untuk</th></tr></thead>
            <tbody>
              <tr><td>Deskripsi perangkat</td><td><code>1.3.6.1.2.1.1.1.0</code></td><td>Membaca deskripsi sistem.</td></tr>
              <tr><td>Identitas perangkat</td><td><code>1.3.6.1.2.1.1.2.0</code></td><td>Membaca identitas objek perangkat.</td></tr>
              <tr><td>Waktu aktif</td><td><code>1.3.6.1.2.1.1.3.0</code></td><td>Membaca uptime perangkat.</td></tr>
              <tr><td>Nama perangkat</td><td><code>1.3.6.1.2.1.1.5.0</code></td><td>Membaca nama sistem.</td></tr>
              <tr><td>Nama interface</td><td><code>1.3.6.1.2.1.31.1.1.1.1</code></td><td>Membaca nama interface berdasarkan indeksnya.</td></tr>
              <tr><td>Status interface</td><td><code>1.3.6.1.2.1.2.2.1.8</code></td><td>Membaca status operasional interface.</td></tr>
              <tr><td>Identitas ONU</td><td><code>1.3.6.1.4.1.3902.1012.3.28.1.1</code></td><td>Membaca nama, deskripsi, vendor, dan nomor seri ONU.</td></tr>
              <tr><td>Status ONU</td><td><code>1.3.6.1.4.1.3902.1012.3.28.2.1</code></td><td>Membaca status dinamis ONU.</td></tr>
              <tr><td>Nilai optik ONU</td><td><code>1.3.6.1.4.1.3902.1082.500.20.2.2.2.1</code></td><td>Membaca daya RX, daya TX, dan suhu ONU.</td></tr>
            </tbody>
          </table>
        </div>
        <p>OID untuk interface dan ONU adalah alamat tabel. LINNMS menambahkan indeks atau nomor kolom saat membaca nilai perangkat tertentu.</p>
        </div>
      </details>
      <details class="oid-vendor" id="hioso" data-oid-vendor="hioso">
        <summary><span>HIOSO</span><i class="bi bi-chevron-down" aria-hidden="true"></i></summary>
        <div class="oid-vendor-content">
        <p>LINNMS membaca identitas dan kondisi perangkat, data ONU, status port LAN ONU, serta informasi firmware melalui OID berikut.</p>
        <div class="table-responsive rounded-3 border border-secondary-subtle" tabindex="0" role="region" aria-label="Tabel OID HIOSO">
          <table class="table table-hover align-middle mb-0 oid-document-table">
            <thead><tr><th>Informasi</th><th>OID</th><th>Digunakan LINNMS untuk</th></tr></thead>
            <tbody>
              <tr><td>Identitas perangkat</td><td><code>1.3.6.1.2.1.1.2.0</code></td><td>Membaca identitas objek perangkat.</td></tr>
              <tr><td>Waktu aktif</td><td><code>1.3.6.1.2.1.1.3.0</code></td><td>Membaca uptime perangkat.</td></tr>
              <tr><td>Nama perangkat</td><td><code>1.3.6.1.2.1.1.5.0</code></td><td>Membaca nama sistem.</td></tr>
              <tr><td>Nama interface</td><td><code>1.3.6.1.2.1.31.1.1.1.1</code></td><td>Membaca nama interface berdasarkan indeksnya.</td></tr>
              <tr><td>Status interface</td><td><code>1.3.6.1.2.1.2.2.1.8</code></td><td>Membaca status operasional interface.</td></tr>
              <tr><td>Data ONU</td><td><code>1.3.6.1.4.1.25355.3.2.6.3.2.1</code></td><td>Membaca MAC, nama, dan status ONU.</td></tr>
              <tr><td>Port LAN ONU</td><td><code>1.3.6.1.4.1.25355.3.2.6.1.2.1.5</code></td><td>Membaca status port LAN ONU.</td></tr>
              <tr><td>Firmware</td><td><code>1.3.6.1.4.1.25355.3.1.8.1.1.2.1</code></td><td>Membaca versi perangkat lunak, model, dan nomor seri.</td></tr>
            </tbody>
          </table>
        </div>
        <p>OID untuk interface, ONU, dan port LAN adalah alamat tabel. LINNMS menambahkan indeks sesuai perangkat dan port yang dibaca.</p>
        </div>
      </details>
    </div>
  </div>
</main>
<?php include __DIR__ . '/assets/parsial/foother.php'; ?>
<script src="assets/js/script.js" defer></script>
</body>
</html>
