<!doctype html>
<html lang="id">
<?php
$pageTitle = 'Beranda | LINNMS';
$pageDescription = 'LINNMS membantu memantau OLT, ONU, dan perangkat jaringan dari satu dashboard.';
$activePage = 'home';
include __DIR__ . '/assets/parsial/head.php';
?>
<body>
<?php include __DIR__ . '/assets/parsial/navbar.php'; ?>

   
    <main id="main">
      <section class="hero hero-product">
        <div class="shell hero-grid">
          <div class="hero-copy">
            <div class="eyebrow">
              <span class="eyebrow-line" aria-hidden="true"></span>NETWORK MANAGEMENT SYSTEM
            </div>
            <h1 class="hero-title">
              <span class="hero-title-line hero-title-main"
                >Kondisi jaringan,</span
              ><span class="hero-title-line hero-title-accent gradient-text"
                >lebih mudah dipahami.</span
              >
            </h1>
            <div class="hero-description">
              <p class="hero-lead">
                Pantau OLT, ONU, dan perangkat jaringan dari satu dashboard
                LINNMS.
              </p>
              <p class="hero-support">
                Ringkasan status, informasi perangkat, dan hasil sinkronisasi
                tersusun rapi untuk membantu pemeriksaan sehari-hari.
              </p>
            </div>
            <div class="hero-actions">
              <a class="btn btn-primary" href="fitur.php">Jelajahi fitur</a
              ><a class="btn btn-ghost" href="docs.php">Baca dokumentasi</a>
            </div>

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
                role="img">
                <aside class="auth-sidebar">
                  <div class="auth-app-brand">
                    <img src="assets/linnms-logo.png" alt="" width="26" height="26" />
                    <span><b>LINNMS
                    </b><small>Network Management</small></span
                    >
                  </div>
                  <div class="auth-side-section">DASHBOARD</div>
                  <div class="auth-side-item active">
                    <svg
                      viewBox="0 0 24 24"
                      width="15"
                      height="15"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <path d="M4.2 17a9 9 0 1 1 15.6 0" />
                      <path d="M12 14l4-5" />
                      <circle cx="12" cy="14" r="1.3" /></svg
                    ><span>Dashboard</span>
                  </div>
                  <div class="auth-side-section">MANAGEMENT</div>
                  <div class="auth-side-item">
                    <svg
                      viewBox="0 0 24 24"
                      width="15"
                      height="15"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <circle cx="12" cy="12" r="9" />
                      <path d="M12 7v10M7 12h10" /></svg
                    ><span>Add ONU</span>
                  </div>
                  <div class="auth-side-item">
                    <svg
                      viewBox="0 0 24 24"
                      width="15"
                      height="15"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <rect x="3" y="8" width="18" height="12" rx="2" />
                      <path d="M7 8V4m10 4V4M7 16h.01M11 16h.01M15 16h3" /></svg
                    ><span>All ONU</span>
                  </div>
                  <div class="auth-side-item">
                    <svg
                      viewBox="0 0 24 24"
                      width="15"
                      height="15"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                  </div>
                  <div class="auth-side-section">NOTIFIKASI</div>
                  <div class="auth-side-item">
                    <svg
                      viewBox="0 0 24 24"
                      width="15"
                      height="15"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <path
                        d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4"
                      /></svg
                    ><span>Notifikasi</span>
                  </div>
                  <div class="auth-side-section">AKUN</div>
                  <div class="auth-side-item">
                    <svg
                      viewBox="0 0 24 24"
                      width="15"
                      height="15"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <path d="M4 7h16M4 17h16" />
                      <circle cx="9" cy="7" r="2" />
                      <circle cx="15" cy="17" r="2" /></svg
                    ><span>Pengaturan</span>
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
                      <div class="auth-stat blue">
                        <span>Total Perangkat</span><strong>48</strong>
                      </div>
                      <div class="auth-stat teal">
                        <span>Total ONU</span><strong>1.286</strong>
                      </div>
                      <div class="auth-stat green">
                        <span>Online</span><strong>1.231</strong>
                      </div>
                      <div class="auth-stat yellow">
                        <span>Offline</span><strong>25</strong>
                      </div>
                      <div class="auth-stat orange">
                        <span>Lost</span><strong>9</strong>
                      </div>
                      <div class="auth-stat red">
                        <span>Bermasalah</span><strong>21</strong>
                      </div>
                    </div>
                    <section class="auth-panel">
                      <div class="auth-device-toolbar">
                        <div class="auth-search">
                          <svg
                            viewBox="0 0 24 24"
                            width="15"
                            height="15"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                          >
                            <circle cx="10.5" cy="10.5" r="6.5" />
                            <path d="m16 16 5 5" />
                          </svg>
                          <span>Cari...</span>
                        </div>
                        <span class="auth-add"
                          ><svg
                            viewBox="0 0 24 24"
                            width="15"
                            height="15"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.7"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                          >
                            <circle cx="12" cy="12" r="9" />
                            <path d="M12 7v10M7 12h10" />
                          </svg>
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
      <section class="section-block shell" id="fitur">
        <div class="section-intro">
          <div>
            <span class="kicker">FITUR UTAMA</span>
            <h2>
              Informasi yang Anda butuhkan,<br />tanpa tampilan berlebihan.
            </h2>
          </div>
          <p>
            Kenali cara LINNMS menyajikan kondisi jaringan, data OLT dan ONU,
            serta aktivitas sinkronisasi dalam alur kerja yang lebih jelas.
          </p>
        </div>
        <div class="topic-grid product-feature-grid">
          <a class="topic-card product-feature" href="fitur.php#pemantauan"
            ><div class="topic-icon">
              <i class="bi bi-speedometer2" aria-hidden="true"></i>
            </div>
            <h3>Pemantauan perangkat</h3>
            <p>
              Lihat ringkasan perangkat dan indikator status untuk mengenali
              kondisi jaringan.
            </p>
            <span class="feature-card-footer">Pelajari pemantauan</span></a
          ><a class="topic-card product-feature" href="fitur.php#perangkat"
            ><div class="topic-icon">
              <i class="bi bi-diagram-3" aria-hidden="true"></i>
            </div>
            <h3>Pengelolaan OLT &amp; ONU</h3>
            <p>
              Telusuri informasi perangkat berdasarkan dukungan model dan
              firmware yang digunakan.
            </p>
            <span class="feature-card-footer">Pelajari pengelolaan</span></a
          ><a class="topic-card product-feature" href="fitur.php#sinkronisasi"
            ><div class="topic-icon">
              <i class="bi bi-activity" aria-hidden="true"></i>
            </div>
            <h3>Aktivitas &amp; sinkronisasi</h3>
            <p>
              Periksa pembaruan dan aktivitas perangkat untuk mendukung
              penelusuran masalah.
            </p>
            <span class="feature-card-footer">Pelajari sinkronisasi</span></a
          >
        </div>
        <div class="section-footer-link">
          <a class="text-link" href="fitur.php"
            >Lihat penjelasan seluruh fitur</a
          >
        </div>
      </section>
      <section class="section-block shell product-about">
        <div class="feature-split">
          <div>
            <span class="kicker">TENTANG LINNMS</span>
            <h2>Dirancang untuk kebutuhan pengelolaan jaringan.</h2>
            <p>
              LINNMS mengutamakan informasi perangkat dan kondisi jaringan yang
              dibutuhkan saat pemantauan sehari-hari, terutama untuk lingkungan
              OLT dan ONU.
            </p>
            <a class="text-link" href="about.php"
              >Kenali LINNMS lebih lanjut</a
            >
          </div>
        </div>
      </section>

    </main>

    <?php include __DIR__ . '/assets/parsial/foother.php'; ?>

    <script src="assets/js/script.js" defer></script>
  </body>
</html>
