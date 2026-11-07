<footer class="footer">
  <div class="shell container-xl footer-inner">
    <a class="footer-mark" href="<?= route('home') ?>"><img src="<?= asset('linnms-logo.png') ?>" alt="" width="28" height="28"><span>LINNMS</span></a>
    <nav class="footer-nav" aria-label="Navigasi footer">
      <a href="<?= route('home') ?>#fitur">Fitur</a>
      <a href="<?= route('docs.index') ?>">Dokumentasi</a>
      <a href="<?= route('docs.installation') ?>">Instalasi</a>
      <a href="<?= route('docs.changelog') ?>">Changelog</a>
      <a href="<?= route('about') ?>">Tentang</a>
      <a href="https://github.com/RamonVeredic/LINNMS" target="_blank" rel="noopener noreferrer">GitHub</a>
    </nav>
    <span class="footer-copy">© <?= date('Y') ?> LINNMS</span>
  </div>
</footer>
