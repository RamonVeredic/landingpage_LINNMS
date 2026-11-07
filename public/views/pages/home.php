<main id="main">
  <section class="hero hero-product">
    <div class="shell hero-grid container-xl">
      <div class="hero-copy">
        <div class="home-eyebrow">LINNMS · NETWORK MANAGEMENT SYSTEM</div>
        <h1 class="hero-title">Pantau perangkat jaringan Anda.<br><span class="home-accent">Kelola dari satu tempat.</span></h1>
        <div class="hero-description">
          <p class="hero-lead">LINNMS membantu Anda memantau OLT, ONU, router, dan switch, melihat trafik, serta menerima notifikasi perubahan kondisi jaringan.</p>
        </div>
        <div class="hero-actions">
          <a class="btn btn-sm btn-brand" href="#">Coba Gratis</a>
          <a class="btn btn-sm btn-brand-outline" href="#">Pesan Sekarang</a>
        </div>
        <ul class="home-highlights" aria-label="Fungsi utama LINNMS">
          <li><i class="bi bi-speedometer2" aria-hidden="true"></i>Pantau perangkat</li>
          <li><i class="bi bi-sliders" aria-hidden="true"></i>Kelola ONU</li>
          <li><i class="bi bi-chat-dots" aria-hidden="true"></i>Terima notifikasi</li>
        </ul>
      </div>
          <div class="auth-preview-wrap" id="dashboard-preview">
            <div class="auth-preview-header">
              <div class="preview-window-dots" aria-hidden="true">
                <span></span><span></span><span></span>
              </div>
            </div>
            <div class="auth-preview-scroll">
              <div
                class="auth-dashboard"
                role="img" aria-label="Ilustrasi dashboard LINNMS dengan data contoh">
                <aside class="auth-sidebar">
                  <div class="auth-app-brand">
                    <img src="<?= asset('linnms-logo.png') ?>" alt="" width="26" height="26" />
                    <span><b>LINNMS
                    </b><small>Network Management</small></span
                    >
                  </div>
                  <div class="auth-side-section">DASHBOARD</div>
                  <div class="auth-side-item active">
                    <i class="bi bi-speedometer2" aria-hidden="true"></i><span>Dashboard</span>
                  </div>
                  <div class="auth-side-section">MANAGEMENT</div>
                  <div class="auth-side-item">
                    <i class="bi bi-plus-circle" aria-hidden="true"></i><span>Add ONU</span>
                  </div>
                  <div class="auth-side-item">
                    <i class="bi bi-router" aria-hidden="true"></i><span>All ONU</span>
                  </div>
                  <div class="auth-side-section">NOTIFIKASI</div>
                  <div class="auth-side-item">
                    <i class="bi bi-bell" aria-hidden="true"></i><span>Notifikasi</span>
                  </div>
                  <div class="auth-side-section">AKUN</div>
                  <div class="auth-side-item">
                    <i class="bi bi-sliders" aria-hidden="true"></i><span>Pengaturan</span>
                  </div>
                </aside>
                <div class="auth-app-content">
                  <div class="auth-topbar">
                    <span></span
                    ><span class="auth-user-symbol"
                      ><i class="bi bi-person-circle" aria-hidden="true"></i
                    ></span>
                  </div>
                  <div class="auth-page">
                    <div class="auth-title">
                      <small>LINNMS / Dashboard</small
                      ><strong>DASHBOARD</strong>
                    </div>
                    <div class="auth-rule"></div>
                    <div class="auth-stat-grid">
                      <div class="auth-stat info">
                        <span>Total Perangkat</span><strong>48</strong>
                      </div>
                      <div class="auth-stat accent">
                        <span>Total ONU</span><strong>1.286</strong>
                      </div>
                      <div class="auth-stat success">
                        <span>Online</span><strong>1.231</strong>
                      </div>
                      <div class="auth-stat warning">
                        <span>Offline</span><strong>25</strong>
                      </div>
                      <div class="auth-stat lost">
                        <span>Lost</span><strong>9</strong>
                      </div>
                      <div class="auth-stat danger">
                        <span>Bermasalah</span><strong>21</strong>
                      </div>
                    </div>
                    <section class="auth-panel">
                      <div class="auth-device-toolbar">
                        <div class="auth-search">
                          <i class="bi bi-search" aria-hidden="true"></i>
                          <span>Cari...</span>
                        </div>
                        <span class="auth-add"
                          ><i class="bi bi-plus-circle" aria-hidden="true"></i>
                          Add</span
                        >
                      </div>
                      <div class="auth-table-scroll">
                        <table>
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Jenis</th>
                              <th>Nama</th>
                              <th>Model</th>
                              <th>Sync</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>01</td>
                              <td><span class="auth-device-type">OLT</span></td>
                              <td>
                                <strong>OLT-JKT-01</strong
                                ><small>10.10.10.2</small>
                              </td>
                              <td>ZTE C320</td>
                              <td>
                                <span>18:32:15</span
                                ><small class="auth-sync">● SNMP · OK</small>
                              </td>
                              <td>
                                <span class="auth-row-actions"
                                  ><i
                                    class="bi bi-search"
                                    aria-hidden="true"
                                  ></i
                                  ><i
                                    class="bi bi-three-dots"
                                    aria-hidden="true"
                                  ></i
                                ></span>
                              </td>
                            </tr>
                            <tr>
                              <td>02</td>
                              <td><span class="auth-device-type">OLT</span></td>
                              <td>
                                <strong>OLT-BDG-02</strong
                                ><small>10.10.20.2</small>
                              </td>
                              <td>ZTE C300</td>
                              <td>
                                <span>18:31:48</span
                                ><small class="auth-sync">● SNMP · OK</small>
                              </td>
                              <td>
                                <span class="auth-row-actions"
                                  ><i
                                    class="bi bi-search"
                                    aria-hidden="true"
                                  ></i
                                  ><i
                                    class="bi bi-three-dots"
                                    aria-hidden="true"
                                  ></i
                                ></span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </section>
                  </div>
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
      <div class="col-md-6 col-lg-4"><div class="home-benefit-panel">
        <i class="bi bi-speedometer2" aria-hidden="true"></i>
        <h3>Status perangkat</h3>
        <p>Lihat ringkasan perangkat dan status ONU untuk mengetahui kondisi jaringan.</p>
      </div></div>
      <div class="col-md-6 col-lg-4"><div class="home-benefit-panel">
        <i class="bi bi-clock-history" aria-hidden="true"></i>
        <h3>Interval pembaruan</h3>
        <p>Sesuaikan interval pembaruan data dengan kebutuhan pemantauan Anda.</p>
      </div></div>
      <div class="col-md-6 col-lg-4"><div class="home-benefit-panel">
        <i class="bi bi-diagram-3" aria-hidden="true"></i>
        <h3>Pengelolaan OLT dan ONU</h3>
        <p>Periksa informasi OLT dan ONU, lalu gunakan fungsi pengelolaan yang didukung perangkat.</p>
      </div></div>
      <div class="col-md-6 col-lg-4"><div class="home-benefit-panel">
        <i class="bi bi-graph-up" aria-hidden="true"></i>
        <h3>Grafik trafik</h3>
        <p>Amati penggunaan dan perubahan trafik perangkat melalui grafik.</p>
      </div></div>
      <div class="col-md-6 col-lg-4"><div class="home-benefit-panel">
        <i class="bi bi-bell" aria-hidden="true"></i>
        <h3>Notifikasi kejadian</h3>
        <p>Terima pemberitahuan untuk perangkat dan kejadian yang Anda pilih.</p>
      </div></div>
      <div class="col-md-6 col-lg-4"><div class="home-benefit-panel">
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
    <ul class="home-vendors" aria-label="Vendor perangkat yang didukung">
      <li>ZTE</li>
      <li>HIOSO</li>
      <li>Hisfocus</li>
      <li>HSGQ</li>
      <li>C-Data</li>
      <li>VSOL</li>
      <li>FiberHome</li>
      <li>MikroTik</li>
      <li>Cisco</li>
    </ul>
  </section>
  <section class="home-feature-detail home-notifications shell container-xl">
    <figure class="home-notification-visual">
      <figcaption>Integrasi notifikasi</figcaption>
      <div class="home-channel"><i class="bi bi-whatsapp" aria-hidden="true"></i><div><strong>WhatsApp Gateway</strong><span>Pengiriman notifikasi melalui gateway WhatsApp.</span></div></div>
      <div class="home-channel"><i class="bi bi-telegram" aria-hidden="true"></i><div><strong>Telegram Bot</strong><span>Pengiriman notifikasi melalui bot Telegram.</span></div></div>
      <div class="home-channel-event"><i class="bi bi-bell" aria-hidden="true"></i><span>Riwayat notifikasi<small>Telusuri pemberitahuan yang telah dikirim.</small></span></div>
    </figure>
    <div class="home-detail-copy">
      <h2>Notifikasi melalui WhatsApp dan Telegram.</h2>
      <p>Terima pemberitahuan perubahan kondisi jaringan melalui saluran yang Anda gunakan. Pilih perangkat dan jenis kejadian yang ingin dipantau, lalu telusuri pemberitahuannya melalui riwayat notifikasi.</p>
      <p>Pilihan WhatsApp Gateway:</p>
      <ul class="home-integration-list" aria-label="Gateway WhatsApp"><li>Fonnte</li><li>StarSender</li><li>WAGate</li><li>WPPConnect</li></ul>
    </div>
  </section>
  <section class="home-cta-section shell container-xl">
    <div class="home-cta">
      <div><h2>Coba LINNMS untuk jaringan Anda.</h2><p>Mulai dengan uji coba atau hubungi kami untuk pemesanan.</p></div>
      <div class="home-cta-actions"><a class="btn btn-sm btn-brand" href="#">Coba Gratis</a><a class="btn btn-sm btn-brand-outline" href="#">Pesan Sekarang</a></div>
    </div>
    <a class="home-install-link" href="/dokumentasi/instalasi">Panduan instalasi LINNMS <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
  </section>
</main>
