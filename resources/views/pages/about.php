<main id="main">
  <div class="page-head shell container-xl about-head">
    <div class="crumb"><a href="<?= route('home') ?>">Beranda</a><span>/</span>Tentang</div>
    <h1>Tentang LINNMS</h1>
    <p>LINNMS adalah aplikasi manajemen jaringan untuk operator yang memantau dan mengelola perangkat jaringan.</p>
  </div>
  <div class="shell container-xl about-content">
    <article class="about-story">
      <p>Dalam satu antarmuka, LINNMS menyajikan informasi perangkat, OLT, ONU, aktivitas jaringan, dan notifikasi. Operator dapat melihat gambaran kondisi jaringan lalu menelusuri perangkat yang perlu diperiksa.</p>
      <p>LINNMS dikembangkan oleh RamonVeredic dengan bantuan AI. Pengembangannya berfokus pada informasi jaringan yang mudah dibaca dan pekerjaan pengelolaan perangkat sehari-hari.</p>
    </article>
    <section class="about-contact" id="kontak" aria-labelledby="about-contact-title">
      <h2 id="about-contact-title">Hubungi LINNMS</h2>
      <p>Hubungi kami untuk informasi mengenai LINNMS, uji coba, atau pemesanan.</p>
      <div class="contact-links"><?php require BASE_PATH . '/resources/views/partials/contact-links.php'; ?></div>
    </section>
  </div>
</main>
