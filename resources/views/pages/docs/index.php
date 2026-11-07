<main id="main">
  <div class="page-head docs-index-head shell container-xl">
    <div class="crumb"><a href="<?= route('home') ?>">Beranda</a><span>/</span>Dokumentasi</div>
    <h1>Dokumentasi</h1>
  </div>
  <nav class="docs-index shell container-xl" aria-label="Halaman dokumentasi">
    <a class="docs-index-row" href="<?= route('docs.installation') ?>">
      <span><strong>Instalasi</strong><small>Persyaratan dan langkah pemasangan LINNMS.</small></span>
      <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
    </a>
    <a class="docs-index-row" href="<?= route('docs.oid') ?>">
      <span><strong>OID perangkat</strong><small>OID yang digunakan LINNMS, disusun menurut vendor perangkat.</small></span>
      <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
    </a>
    <a class="docs-index-row" href="<?= route('docs.changelog') ?>">
      <span><strong>Changelog</strong><small>Daftar perubahan LINNMS menurut versi.</small></span>
      <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
    </a>
  </nav>
</main>
