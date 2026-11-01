<!doctype html>
<html lang="id">

<?php
$pageTitle = 'Referensi OID & SNMP | LINNMS';
$pageDescription = 'Daftar OID standar IF-MIB/MIB-II dan cabang OID ZTE/HIOSO yang muncul pada driver LINNMS.';
$activePage = 'docs';
include __DIR__ . '/assets/parsial/head.php';
?>
<body>
<?php include __DIR__ . '/assets/parsial/navbar.php'; ?>

    <main id="main">
        <div class="page-head shell">
            <div class="crumb"><a href="index.php">Beranda</a><span>/</span><a href="docs.php">Dokumentasi</a><span>/</span>Referensi OID</div><span class="kicker">LINNMS / DOKUMENTASI</span>
            <h1>Referensi <span class='gradient-text'>OID dan SNMP.</span></h1>
            <p>Kumpulan OID standar dan vendor yang dapat Anda gunakan sebagai referensi untuk memeriksa perangkat jaringan, baik dengan LINNMS maupun alat SNMP lainnya.</p>
            <div class="header-pills"><span class="pill">MIB-II</span><span class="pill">IF-MIB</span><span class="pill">ZTE · HIOSO</span></div>
        </div>
        <div class="shell docs-layout">
            <aside class="doc-aside">
                <div class="aside-sticky"><a class="sidebar-back" href="docs.php"><i class="bi bi-arrow-left" aria-hidden="true"></i> Semua dokumentasi</a>
                    <div class="aside-title">DAFTAR ISI</div><a href="#before">01 Cara membaca OID</a><a href="#reference">02 Tabel referensi</a><a href="#vendor">03 OID vendor</a><a href="#examples">04 Contoh perintah</a><a href="#results">05 Interpretasi hasil</a>
                    <div class="doc-sidebar-links"><strong>Dokumentasi lainnya</strong><a href="instalasi.php">Instalasi LINNMS</a></div>
                </div>
            </aside>
            <article class="doc-body">
                <section class="doc-section" id="before">
                    <div class="section-number">01 / SNMP BASICS</div>
                    <h2>Cara membaca OID</h2>
                    <p>OID scalar umumnya berakhir dengan <code>.0</code> (contoh <code>sysUpTime.0</code>). Tabel OID interface memerlukan indeks baris, misalnya <code>ifOperStatus.1</code>. Indeks dapat berubah menurut perangkat.</p>
                    <div class="detail-pair">
                        <div><strong>Contoh scalar</strong><code>1.3.6.1.2.1.1.3.0</code><small>Mengembalikan waktu aktif agen SNMP.</small></div>
                        <div><strong>Contoh kolom</strong><code>1.3.6.1.2.1.2.2.1.8.IFINDEX</code><small>Ganti IFINDEX dengan indeks dari hasil walk.</small></div>
                    </div>
                    <div class="callout warning"><span>!</span>
                        <p>SNMPv2c mengirim community tanpa enkripsi. Untuk jaringan manajemen yang tidak terisolasi, gunakan SNMPv3 bila perangkat dan prosedur operasional mendukungnya.</p>
                    </div>
                </section>
                <section class="doc-section" id="reference">
                    <div class="section-number">02 / REFERENCE TABLE</div>
                    <h2>Daftar OID yang sering diperiksa</h2>
                    <p>Cari nama OID, angka, kategori, atau vendor. Entri vendor ini merupakan contoh cabang yang digunakan dalam driver LINNMS, bukan daftar lengkap atau jaminan kompatibilitas untuk semua model.</p>
                    <div class="filter-toolbar"><label class="search-field"><span><i class="bi bi-search" aria-hidden="true"></i></span><input type="search" id="oid-search" placeholder="Cari OID, sysName, 3902, IF-MIB..." aria-label="Cari dalam daftar OID"></label>
                        <div class="filter-buttons" aria-label="Jenis OID"><button class="filter-btn" data-oid-filter="all" aria-pressed="true">Semua</button><button class="filter-btn" data-oid-filter="standard" aria-pressed="false">Standar</button><button class="filter-btn" data-oid-filter="vendor" aria-pressed="false">Vendor</button></div>
                    </div>
                    <p class="table-count" id="oid-count" aria-live="polite"></p>
                    <div class="table-scroller">
                        <table class="oid-table" id="oid-table">
                            <thead>
                                <tr>
                                    <th>Jenis</th>
                                    <th>MIB / Vendor</th>
                                    <th>Kategori</th>
                                    <th>Nama / branch</th>
                                    <th>OID</th>
                                    <th>Fungsi / catatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-type="standard">
                                    <td><span class="oid-type ">STANDARD</span></td>
                                    <td>MIB-II</td>
                                    <td>System</td>
                                    <td><strong>sysDescr.0</strong></td>
                                    <td><code>1.3.6.1.2.1.1.1.0</code></td>
                                    <td>Deskripsi sistem (teks)</td>
                                </tr>
                                <tr data-type="standard">
                                    <td><span class="oid-type ">STANDARD</span></td>
                                    <td>MIB-II</td>
                                    <td>System</td>
                                    <td><strong>sysObjectID.0</strong></td>
                                    <td><code>1.3.6.1.2.1.1.2.0</code></td>
                                    <td>Identitas objek enterprise</td>
                                </tr>
                                <tr data-type="standard">
                                    <td><span class="oid-type ">STANDARD</span></td>
                                    <td>MIB-II</td>
                                    <td>System</td>
                                    <td><strong>sysUpTime.0</strong></td>
                                    <td><code>1.3.6.1.2.1.1.3.0</code></td>
                                    <td>Uptime agen SNMP</td>
                                </tr>
                                <tr data-type="standard">
                                    <td><span class="oid-type ">STANDARD</span></td>
                                    <td>MIB-II</td>
                                    <td>System</td>
                                    <td><strong>sysName.0</strong></td>
                                    <td><code>1.3.6.1.2.1.1.5.0</code></td>
                                    <td>Nama sistem</td>
                                </tr>
                                <tr data-type="standard">
                                    <td><span class="oid-type ">STANDARD</span></td>
                                    <td>IF-MIB</td>
                                    <td>Interface</td>
                                    <td><strong>ifDescr</strong></td>
                                    <td><code>1.3.6.1.2.1.2.2.1.2</code></td>
                                    <td>Deskripsi; tambahkan indeks interface</td>
                                </tr>
                                <tr data-type="standard">
                                    <td><span class="oid-type ">STANDARD</span></td>
                                    <td>IF-MIB</td>
                                    <td>Interface</td>
                                    <td><strong>ifAdminStatus</strong></td>
                                    <td><code>1.3.6.1.2.1.2.2.1.7</code></td>
                                    <td>Status administratif; tambah ifIndex</td>
                                </tr>
                                <tr data-type="standard">
                                    <td><span class="oid-type ">STANDARD</span></td>
                                    <td>IF-MIB</td>
                                    <td>Interface</td>
                                    <td><strong>ifOperStatus</strong></td>
                                    <td><code>1.3.6.1.2.1.2.2.1.8</code></td>
                                    <td>Status operasional; tambah ifIndex</td>
                                </tr>
                                <tr data-type="standard">
                                    <td><span class="oid-type ">STANDARD</span></td>
                                    <td>IF-MIB</td>
                                    <td>Interface</td>
                                    <td><strong>ifName</strong></td>
                                    <td><code>1.3.6.1.2.1.31.1.1.1.1</code></td>
                                    <td>Nama interface; tambah ifIndex</td>
                                </tr>
                                <tr data-type="standard">
                                    <td><span class="oid-type ">STANDARD</span></td>
                                    <td>IF-MIB</td>
                                    <td>Interface</td>
                                    <td><strong>ifHighSpeed</strong></td>
                                    <td><code>1.3.6.1.2.1.31.1.1.1.15</code></td>
                                    <td>Kecepatan nominal (Mbps); tambah ifIndex</td>
                                </tr>
                                <tr data-type="standard">
                                    <td><span class="oid-type ">STANDARD</span></td>
                                    <td>IF-MIB</td>
                                    <td>Traffic</td>
                                    <td><strong>ifHCInOctets</strong></td>
                                    <td><code>1.3.6.1.2.1.31.1.1.1.6</code></td>
                                    <td>Counter RX 64-bit; tambah ifIndex</td>
                                </tr>
                                <tr data-type="standard">
                                    <td><span class="oid-type ">STANDARD</span></td>
                                    <td>IF-MIB</td>
                                    <td>Traffic</td>
                                    <td><strong>ifHCOutOctets</strong></td>
                                    <td><code>1.3.6.1.2.1.31.1.1.1.10</code></td>
                                    <td>Counter TX 64-bit; tambah ifIndex</td>
                                </tr>
                                <tr data-type="vendor">
                                    <td><span class="oid-type vendor">VENDOR</span></td>
                                    <td>ZTE</td>
                                    <td>Enterprise</td>
                                    <td><strong>ZTE 3902</strong></td>
                                    <td><code>1.3.6.1.4.1.3902</code></td>
                                    <td>Prefix enterprise; sub-OID bervariasi per OLT</td>
                                </tr>
                                <tr data-type="vendor">
                                    <td><span class="oid-type vendor">VENDOR</span></td>
                                    <td>ZTE</td>
                                    <td>Vendor branch</td>
                                    <td><strong>ZTE example branch</strong></td>
                                    <td><code>1.3.6.1.4.1.3902.1012.3.28.1.1</code></td>
                                    <td>Cabang ditemukan pada driver; butuh MIB/indeks perangkat</td>
                                </tr>
                                <tr data-type="vendor">
                                    <td><span class="oid-type vendor">VENDOR</span></td>
                                    <td>ZTE</td>
                                    <td>Vendor branch</td>
                                    <td><strong>ZTE 1082 branch</strong></td>
                                    <td><code>1.3.6.1.4.1.3902.1082.500.20.2.2.2.1</code></td>
                                    <td>Cabang driver; arti kolom berbeda menurut model</td>
                                </tr>
                                <tr data-type="vendor">
                                    <td><span class="oid-type vendor">VENDOR</span></td>
                                    <td>HIOSO</td>
                                    <td>Enterprise</td>
                                    <td><strong>HIOSO 25355</strong></td>
                                    <td><code>1.3.6.1.4.1.25355</code></td>
                                    <td>Prefix enterprise; cek model/firmware</td>
                                </tr>
                                <tr data-type="vendor">
                                    <td><span class="oid-type vendor">VENDOR</span></td>
                                    <td>HIOSO</td>
                                    <td>Vendor branch</td>
                                    <td><strong>HIOSO example branch</strong></td>
                                    <td><code>1.3.6.1.4.1.25355.3.2.6.3.2.1</code></td>
                                    <td>Cabang driver; periksa MIB sebelum interpretasi</td>
                                </tr>
                                <tr data-type="vendor">
                                    <td><span class="oid-type vendor">VENDOR</span></td>
                                    <td>HIOSO</td>
                                    <td>Vendor branch</td>
                                    <td><strong>HIOSO status branch</strong></td>
                                    <td><code>1.3.6.1.4.1.25355.3.2.6.1.2.1.5</code></td>
                                    <td>Contoh dari driver; indeks dan hasil model-dependent</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="empty-state" id="oid-empty">Tidak ada OID yang cocok dengan pencarian.</div>
                </section>
                <section class="doc-section" id="vendor">
                    <div class="section-number">03 / VENDOR OIDS</div>
                    <h2>ZTE & HIOSO: periksa MIB dan firmware</h2>
                    <p>Driver LINNMS mencakup cabang enterprise ZTE <code>1.3.6.1.4.1.3902</code> serta HIOSO <code>1.3.6.1.4.1.25355</code>. OID pada tabel adalah titik awal pemeriksaan. Tidak semua cabang mendukung operasi <code>GET</code> secara langsung karena sebagian merupakan akar tabel/kolom.</p>
                    <div class="callout"><span>i</span>
                        <p>Gunakan <code>snmpwalk</code> pada cabang yang tepat untuk menemukan instance OID dan indeks. Cocokkan hasil dengan dokumentasi MIB perangkat. Jangan menganggap label atau nilai setiap vendor sama dengan MIB standar.</p>
                    </div>
                </section>
                <section class="doc-section" id="examples">
                    <div class="section-number">04 / COMMANDS</div>
                    <h2>Contoh snmpget & snmpwalk</h2>
                    <p>Jalankan perintah pada host yang punya akses ke jaringan manajemen. Ganti <code>DEVICE_IP</code> dan <code>COMMUNITY</code> sesuai data yang valid.</p>
                    <div class="snippet">
                        <div class="snippet-head"><span><span class="terminal-dot"></span> Identitas dan uptime perangkat</span><button type="button" class="copy-btn" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
                        <pre><code>snmpget -v2c -c 'COMMUNITY' DEVICE_IP 1.3.6.1.2.1.1.5.0
snmpget -v2c -c 'COMMUNITY' DEVICE_IP 1.3.6.1.2.1.1.3.0</code></pre>
                    </div>
                    <div class="snippet">
                        <div class="snippet-head"><span><span class="terminal-dot"></span> Cari indeks interface</span><button type="button" class="copy-btn" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
                        <pre><code>snmpwalk -v2c -c 'COMMUNITY' DEVICE_IP 1.3.6.1.2.1.31.1.1.1.1
snmpwalk -v2c -c 'COMMUNITY' DEVICE_IP 1.3.6.1.2.1.2.2.1.8</code></pre>
                    </div>
                    <div class="snippet">
                        <div class="snippet-head"><span><span class="terminal-dot"></span> Walk enterprise OID vendor (jika didukung)</span><button type="button" class="copy-btn" data-copy>Salin <i class="bi bi-copy" aria-hidden="true"></i></button></div>
                        <pre><code>snmpwalk -v2c -c 'COMMUNITY' DEVICE_IP 1.3.6.1.4.1.3902
snmpwalk -v2c -c 'COMMUNITY' DEVICE_IP 1.3.6.1.4.1.25355</code></pre>
                    </div>
                    <div class="callout warning"><span>!</span>
                        <p>Walk pada akar enterprise dapat menghasilkan data sangat besar. Pada perangkat produksi sebaiknya gunakan sub-cabang yang relevan serta pertimbangkan interval, timeout, dan beban agen SNMP.</p>
                    </div>
                </section>
                <section class="doc-section" id="results">
                    <div class="section-number">05 / INTERPRETASI</div>
                    <h2>Arti respons umum</h2>
                    <div class="prereq-grid">
                        <div class="prereq"><span class="check-icon">✓</span>
                            <div>
                                <h3>Response valid</h3>
                                <p>OID tersedia dan community punya izin membaca. Catat angka instance yang berhasil untuk referensi.</p>
                            </div>
                        </div>
                        <div class="prereq"><span class="check-icon">!</span>
                            <div>
                                <h3>noSuchObject / noSuchInstance</h3>
                                <p>Cek sub-OID, indeks, MIB, firmware dan apakah tabel memang ada pada model perangkat.</p>
                            </div>
                        </div>
                        <div class="prereq"><span class="check-icon">!</span>
                            <div>
                                <h3>Timeout</h3>
                                <p>Periksa IP, rute, UDP 161, ACL, versi SNMP, community dan sumber request.</p>
                            </div>
                        </div>
                        <div class="prereq"><span class="check-icon">!</span>
                            <div>
                                <h3>Empty walk</h3>
                                <p>Periksa apakah cabang ada; pastikan OID bukan scalar yang lebih tepat diuji dengan GET.</p>
                            </div>
                        </div>
                    </div>
                    <p>Jika masih gagal, simpan keluaran perintah beserta model dan versi firmware untuk ditinjau bersama administrator jaringan.</p>
                </section>
            </article>
        </div>
    </main>
    <?php include __DIR__ . '/assets/parsial/foother.php'; ?>
    <script src="assets/js/script.js" defer></script>
</body>

</html>