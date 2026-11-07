<!doctype html>
<html lang="id" data-bs-theme="dark">
<?php
$pageTitle = 'Dokumentasi | LINNMS';
$pageDescription = 'Dokumentasi LINNMS: instalasi, OID perangkat, dan changelog.';
$activePage = 'docs';
include __DIR__ . '/assets/parsial/head.php';
?>
<body class="docs-index-page">
<?php include __DIR__ . '/assets/parsial/navbar.php'; ?>
<main id="main">
  <div class="page-head docs-index-head shell container-xl">
    <div class="crumb"><a href="index.php">Beranda</a><span>/</span>Dokumentasi</div>
    <h1>Dokumentasi</h1>
  </div>
  <nav class="docs-index shell container-xl" aria-label="Halaman dokumentasi">
    <a class="docs-index-row" href="instalasi.php">
      <span><strong>Instalasi</strong><small>Persyaratan dan langkah pemasangan LINNMS.</small></span>
      <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
    </a>
    <a class="docs-index-row" href="oid.php">
      <span><strong>OID perangkat</strong><small>OID yang digunakan LINNMS, disusun menurut vendor perangkat.</small></span>
      <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
    </a>
    <a class="docs-index-row" href="changelog.php">
      <span><strong>Changelog</strong><small>Daftar perubahan LINNMS menurut versi.</small></span>
      <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
    </a>
  </nav>
</main>
<?php include __DIR__ . '/assets/parsial/foother.php'; ?>
<script src="assets/js/script.js" defer></script>
</body>
</html>
