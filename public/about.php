<!doctype html>
<html lang="id" data-bs-theme="dark">
<?php
$pageTitle = 'Tentang LINNMS';
$pageDescription = 'Tentang LINNMS, aplikasi manajemen jaringan yang dikembangkan oleh RamonVeredic dengan bantuan AI.';
$activePage = 'about';
include __DIR__ . '/assets/parsial/head.php';
?>
<body class="about-page">
<?php include __DIR__ . '/assets/parsial/navbar.php'; ?>
<main id="main">
  <div class="page-head shell container-xl about-head">
    <div class="crumb"><a href="index.php">Beranda</a><span>/</span>Tentang</div>
    <h1>Tentang LINNMS</h1>
    <p>LINNMS adalah aplikasi manajemen jaringan untuk operator yang memantau dan mengelola perangkat jaringan.</p>
  </div>
  <div class="shell container-xl about-content">
    <article class="about-story">
      <p>Dalam satu antarmuka, LINNMS menyajikan informasi perangkat, OLT, ONU, aktivitas jaringan, dan notifikasi. Operator dapat melihat gambaran kondisi jaringan lalu menelusuri perangkat yang perlu diperiksa.</p>
      <p>LINNMS dikembangkan oleh RamonVeredic dengan bantuan AI. Pengembangannya berfokus pada informasi jaringan yang mudah dibaca dan pekerjaan pengelolaan perangkat sehari-hari.</p>
    </article>
  </div>
</main>
<?php include __DIR__ . '/assets/parsial/foother.php'; ?>
<script src="assets/js/script.js" defer></script>
</body>
</html>
