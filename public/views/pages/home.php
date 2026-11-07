<main id="main">
  <section class="hero hero-product">
    <div class="shell hero-grid container-xl d-flex flex-column align-items-center">
      <div class="hero-copy text-center w-100 mb-4">
        <div class="home-eyebrow">LINNMS · NETWORK MANAGEMENT SYSTEM</div>
        <h1 class="hero-title">Pantau perangkat jaringan Anda.<br><span class="home-accent">Kelola dari satu tempat.</span></h1>
        <div class="hero-description mx-auto mb-4">
          <p class="hero-lead mb-0">LINNMS membantu Anda memantau OLT, ONU, router, dan switch, melihat trafik, serta menerima notifikasi perubahan kondisi jaringan.</p>
        </div>
        <div class="hero-actions d-flex flex-wrap justify-content-center gap-2">
          <a class="btn btn-sm cta-button btn-brand" href="#">Coba Gratis</a>
          <a class="btn btn-sm cta-button btn-brand-outline" href="#">Pesan Sekarang</a>
        </div>
        <ul class="home-highlights list-unstyled d-flex flex-wrap justify-content-center gap-3 mt-4 mb-0" aria-label="Fungsi utama LINNMS">
          <li class="d-flex align-items-center gap-2"><i class="bi bi-speedometer2" aria-hidden="true"></i>Pantau perangkat</li>
          <li class="d-flex align-items-center gap-2"><i class="bi bi-sliders" aria-hidden="true"></i>Kelola ONU</li>
          <li class="d-flex align-items-center gap-2"><i class="bi bi-chat-dots" aria-hidden="true"></i>Terima notifikasi</li>
        </ul>
      </div>
      <div class="card auth-preview-wrap w-100 mx-auto overflow-hidden" id="dashboard-preview">
        <div class="card-header py-2 px-3">
          <div class="preview-window-dots d-flex align-items-center gap-1" aria-hidden="true"><span class="bg-danger rounded-circle"></span><span class="bg-warning rounded-circle"></span><span class="bg-success rounded-circle"></span></div>
        </div>
        <div class="auth-dashboard d-flex" role="img" aria-label="Ilustrasi dashboard LINNMS dengan data contoh">
          <aside class="auth-sidebar d-none d-md-block border-end p-2">
            <div class="d-flex align-items-center gap-2 px-2 py-3">
              <img src="<?= asset('linnms-logo.png') ?>" alt="" width="26" height="26" />
              <span class="d-grid"><b>LINNMS</b><small class="text-body-secondary">Network Management</small></span>
            </div>
            <div class="auth-side-section text-body-secondary text-uppercase fw-semibold px-2 pt-2 pb-1">DASHBOARD</div>
            <div class="nav nav-pills flex-column gap-1">
              <span class="nav-link active d-flex align-items-center gap-2"><i class="bi bi-speedometer2" aria-hidden="true"></i>Dashboard</span>
            </div>
            <div class="auth-side-section text-body-secondary text-uppercase fw-semibold px-2 pt-3 pb-1">MANAGEMENT</div>
            <div class="nav nav-pills flex-column gap-1">
              <span class="nav-link d-flex align-items-center gap-2"><i class="bi bi-plus-circle" aria-hidden="true"></i>Add ONU</span>
              <span class="nav-link d-flex align-items-center gap-2"><i class="bi bi-router" aria-hidden="true"></i>All ONU</span>
            </div>
            <div class="auth-side-section text-body-secondary text-uppercase fw-semibold px-2 pt-3 pb-1">NOTIFIKASI</div>
            <div class="nav nav-pills flex-column gap-1">
              <span class="nav-link d-flex align-items-center gap-2"><i class="bi bi-bell" aria-hidden="true"></i>Notifikasi</span>
            </div>
            <div class="auth-side-section text-body-secondary text-uppercase fw-semibold px-2 pt-3 pb-1">AKUN</div>
            <div class="nav nav-pills flex-column gap-1">
              <span class="nav-link d-flex align-items-center gap-2"><i class="bi bi-sliders" aria-hidden="true"></i>Pengaturan</span>
            </div>
          </aside>
          <div class="auth-app-content flex-grow-1 overflow-hidden">
            <div class="auth-topbar d-none d-md-flex justify-content-end align-items-center border-bottom px-3 py-2"><i class="bi bi-person-circle text-body-secondary" aria-hidden="true"></i></div>
            <div class="p-3">
              <div class="mb-3"><small class="text-body-secondary">LINNMS / Dashboard</small><h2 class="auth-title text-info fw-bold mt-1 mb-0">DASHBOARD</h2></div>
              <div class="row row-cols-3 row-cols-md-6 g-2 mb-3">
                <div class="col"><div class="card auth-stat info h-100"><div class="card-body p-2 d-grid gap-1"><span class="text-uppercase fw-semibold">Total Perangkat</span><strong class="text-body">48</strong></div></div></div>
                <div class="col"><div class="card auth-stat accent h-100"><div class="card-body p-2 d-grid gap-1"><span class="text-uppercase fw-semibold">Total ONU</span><strong class="text-body">1.286</strong></div></div></div>
                <div class="col"><div class="card auth-stat success h-100"><div class="card-body p-2 d-grid gap-1"><span class="text-uppercase fw-semibold">Online</span><strong class="text-body">1.231</strong></div></div></div>
                <div class="col"><div class="card auth-stat warning h-100"><div class="card-body p-2 d-grid gap-1"><span class="text-uppercase fw-semibold">Offline</span><strong class="text-body">25</strong></div></div></div>
                <div class="col"><div class="card auth-stat lost h-100"><div class="card-body p-2 d-grid gap-1"><span class="text-uppercase fw-semibold">Lost</span><strong class="text-body">9</strong></div></div></div>
                <div class="col"><div class="card auth-stat danger h-100"><div class="card-body p-2 d-grid gap-1"><span class="text-uppercase fw-semibold">Bermasalah</span><strong class="text-body">21</strong></div></div></div>
              </div>
              <section class="card overflow-hidden">
                <div class="d-flex align-items-center justify-content-between gap-2 p-2">
                  <div class="input-group input-group-sm auth-search"><span class="input-group-text"><i class="bi bi-search" aria-hidden="true"></i></span><span class="form-control text-body-secondary">Cari...</span></div>
                  <span class="btn btn-sm cta-button btn-brand d-inline-flex align-items-center gap-1"><i class="bi bi-plus-circle" aria-hidden="true"></i>Add</span>
                </div>
                <div class="table-responsive">
                  <table class="table table-sm table-striped align-middle mb-0 auth-table">
                    <thead><tr><th scope="col" class="d-none d-md-table-cell">No.</th><th scope="col">Jenis</th><th scope="col">Nama</th><th scope="col" class="d-none d-md-table-cell">Model</th><th scope="col" class="d-none d-md-table-cell">Sync</th><th scope="col"><span class="visually-hidden">Tindakan</span></th></tr></thead>
                    <tbody>
                      <tr><td class="d-none d-md-table-cell">01</td><td><span class="badge text-bg-info">OLT</span></td><td><strong class="d-block">OLT-JKT-01</strong><small class="d-block text-body-secondary">10.10.10.2</small></td><td class="d-none d-md-table-cell">ZTE C320</td><td class="d-none d-md-table-cell">18:32:15<small class="d-block text-success">● SNMP · OK</small></td><td><span class="d-inline-flex gap-2 text-info"><i class="bi bi-search" aria-hidden="true"></i><i class="bi bi-three-dots" aria-hidden="true"></i></span></td></tr>
                      <tr><td class="d-none d-md-table-cell">02</td><td><span class="badge text-bg-info">OLT</span></td><td><strong class="d-block">OLT-BDG-02</strong><small class="d-block text-body-secondary">10.10.20.2</small></td><td class="d-none d-md-table-cell">ZTE C300</td><td class="d-none d-md-table-cell">18:31:48<small class="d-block text-success">● SNMP · OK</small></td><td><span class="d-inline-flex gap-2 text-info"><i class="bi bi-search" aria-hidden="true"></i><i class="bi bi-three-dots" aria-hidden="true"></i></span></td></tr>
                    </tbody>
                  </table>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="home-benefits shell container-xl" id="fitur">
    <div class="home-section-heading">
      <h2>Pemantauan dan pengelolaan jaringan.</h2>
      <p>Sesuaikan interval pembaruan, pantau trafik, dan pilih notifikasi sesuai kebutuhan jaringan Anda.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4"><div class="card home-benefit-panel h-100 p-4">
        <i class="bi bi-speedometer2" aria-hidden="true"></i>
        <h3>Status perangkat</h3>
        <p>Lihat ringkasan perangkat dan status ONU untuk mengetahui kondisi jaringan.</p>
      </div></div>
      <div class="col-md-6 col-lg-4"><div class="card home-benefit-panel h-100 p-4">
        <i class="bi bi-clock-history" aria-hidden="true"></i>
        <h3>Interval pembaruan</h3>
        <p>Sesuaikan interval pembaruan data dengan kebutuhan pemantauan Anda.</p>
      </div></div>
      <div class="col-md-6 col-lg-4"><div class="card home-benefit-panel h-100 p-4">
        <i class="bi bi-diagram-3" aria-hidden="true"></i>
        <h3>Pengelolaan OLT dan ONU</h3>
        <p>Periksa informasi OLT dan ONU, lalu gunakan fungsi pengelolaan yang didukung perangkat.</p>
      </div></div>
      <div class="col-md-6 col-lg-4"><div class="card home-benefit-panel h-100 p-4">
        <i class="bi bi-graph-up" aria-hidden="true"></i>
        <h3>Grafik trafik</h3>
        <p>Amati penggunaan dan perubahan trafik perangkat melalui grafik.</p>
      </div></div>
      <div class="col-md-6 col-lg-4"><div class="card home-benefit-panel h-100 p-4">
        <i class="bi bi-bell" aria-hidden="true"></i>
        <h3>Notifikasi kejadian</h3>
        <p>Terima pemberitahuan untuk perangkat dan kejadian yang Anda pilih.</p>
      </div></div>
      <div class="col-md-6 col-lg-4"><div class="card home-benefit-panel h-100 p-4">
        <i class="bi bi-arrow-down-up" aria-hidden="true"></i>
        <h3>Impor dan ekspor ONU</h3>
        <p>Ekspor nama dan alamat ONU, atau impor berkas CSV dengan pratinjau perubahan.</p>
      </div></div>
    </div>
  </section>
  <section class="home-support shell container-xl" id="perangkat">
    <div class="home-section-heading">
      <h2>Vendor yang didukung</h2>
      <p>Dukungan OLT, router, dan switch untuk pemantauan melalui LINNMS.</p>
    </div>
    <ul class="home-vendors list-unstyled d-flex flex-wrap justify-content-center gap-2 mb-0 py-2" aria-label="Vendor perangkat yang didukung">
      <li class="badge rounded-pill border px-4 py-3 fw-semibold">ZTE</li>
      <li class="badge rounded-pill border px-4 py-3 fw-semibold">HIOSO</li>
      <li class="badge rounded-pill border px-4 py-3 fw-semibold">Hisfocus</li>
      <li class="badge rounded-pill border px-4 py-3 fw-semibold">HSGQ</li>
      <li class="badge rounded-pill border px-4 py-3 fw-semibold">C-Data</li>
      <li class="badge rounded-pill border px-4 py-3 fw-semibold">VSOL</li>
      <li class="badge rounded-pill border px-4 py-3 fw-semibold">FiberHome</li>
      <li class="badge rounded-pill border px-4 py-3 fw-semibold">MikroTik</li>
      <li class="badge rounded-pill border px-4 py-3 fw-semibold">Cisco</li>
    </ul>
  </section>
  <section class="home-feature-detail home-notifications shell container-xl">
    <div class="row g-4 align-items-center">
    <div class="col-md-6 order-2 order-md-1"><figure class="card home-notification-visual p-4 mb-0">
      <figcaption>Integrasi notifikasi</figcaption>
      <div class="home-channel d-flex align-items-center gap-3 border-top py-3"><i class="bi bi-whatsapp" aria-hidden="true"></i><div><strong>WhatsApp Gateway</strong><span>Pengiriman notifikasi melalui gateway WhatsApp.</span></div></div>
      <div class="home-channel d-flex align-items-center gap-3 border-top py-3"><i class="bi bi-telegram" aria-hidden="true"></i><div><strong>Telegram Bot</strong><span>Pengiriman notifikasi melalui bot Telegram.</span></div></div>
      <div class="home-channel-event d-flex align-items-start gap-2 border rounded p-3 mt-3"><i class="bi bi-bell" aria-hidden="true"></i><span>Riwayat notifikasi<small>Telusuri pemberitahuan yang telah dikirim.</small></span></div>
    </figure></div>
    <div class="col-md-6 order-1 order-md-2"><div class="home-detail-copy">
      <h2>Notifikasi melalui WhatsApp dan Telegram.</h2>
      <p>Terima pemberitahuan perubahan kondisi jaringan melalui saluran yang Anda gunakan. Pilih perangkat dan jenis kejadian yang ingin dipantau, lalu telusuri pemberitahuannya melalui riwayat notifikasi.</p>
      <p>Pilihan WhatsApp Gateway:</p>
      <ul class="home-integration-list list-unstyled d-flex flex-wrap gap-2 my-3" aria-label="Gateway WhatsApp"><li class="border rounded px-2 py-1">Fonnte</li><li class="border rounded px-2 py-1">StarSender</li><li class="border rounded px-2 py-1">WAGate</li><li class="border rounded px-2 py-1">WPPConnect</li></ul>
    </div></div>
    </div>
  </section>
  <section class="home-cta-section shell container-xl">
    <div class="home-cta d-flex align-items-center justify-content-between flex-wrap gap-4 p-4">
      <div><h2>Coba LINNMS untuk jaringan Anda.</h2><p>Mulai dengan uji coba atau hubungi kami untuk pemesanan.</p></div>
      <div class="home-cta-actions d-flex flex-wrap gap-2"><a class="btn btn-sm cta-button btn-brand" href="#">Coba Gratis</a><a class="btn btn-sm cta-button btn-brand-outline" href="#">Pesan Sekarang</a></div>
    </div>
    <a class="home-install-link d-block text-center mt-4" href="/dokumentasi/instalasi">Panduan instalasi LINNMS <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
  </section>
</main>
