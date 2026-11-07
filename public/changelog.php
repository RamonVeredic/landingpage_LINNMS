<!doctype html>
<html lang="id" data-bs-theme="dark">
<?php
$pageTitle = 'Changelog | LINNMS';
$pageDescription = 'Changelog LINNMS v1.0.2 dan v1.0.3.';
$activePage = 'docs';
include __DIR__ . '/assets/parsial/head.php';
?>
<body>
<?php include __DIR__ . '/assets/parsial/navbar.php'; ?>
<main id="main">
  <div class="page-head changelog-page-head shell container-xl">
    <div class="crumb"><a href="index.php">Beranda</a><span>/</span><a href="docs.php">Dokumentasi</a><span>/</span>Changelog</div>
    <h1>Changelog</h1>
  </div>
  <div class="changelog-feed shell container-xl">
    <details class="changelog-release">
      <summary><span>v1.0.3</span><i class="bi bi-chevron-down" aria-hidden="true"></i></summary>
      <div class="changelog-release-content">
        <ul>
          <li>Perbaikan kesalahan 500 pada layanan.</li>
          <li>Perbaikan scanning coverage.</li>
        </ul>
      </div>
    </details>
    <details class="changelog-release">
      <summary><span>v1.0.2</span><i class="bi bi-chevron-down" aria-hidden="true"></i></summary>
      <div class="changelog-release-content">
        <ul>
          <li>Perbaikan layanan WaGateway.</li>
          <li>Perbaikan layanan Workers.</li>
          <li>Perbaikan trafik jaringan.</li>
          <li>Perbaikan Monitoring Event.</li>
          <li>Pembaruan format pesan grup notifikasi.</li>
          <li>Pembaruan riwayat notifikasi.</li>
          <li>Optimasi edit dan hapus perangkat.</li>
        </ul>
      </div>
    </details>
  </div>
</main>
<?php include __DIR__ . '/assets/parsial/foother.php'; ?>
<script src="assets/js/script.js" defer></script>
</body>
</html>
