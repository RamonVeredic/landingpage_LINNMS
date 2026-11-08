<?php require BASE_PATH . '/public/views/partials/docs-open.php'; ?>
      <section class="manual-section" id="pemetaan-data" aria-labelledby="pemetaan-title">
        <h2 id="pemetaan-title">Pemetaan Data</h2>
        <details class="manual-details" id="zte">
          <summary><span><strong>ZTE</strong><small>GPON · C300 / C320</small></span><i class="bi bi-chevron-down" aria-hidden="true"></i></summary>
          <div class="manual-details-body">
            <div class="manual-table-wrap" tabindex="0" role="region" aria-label="Tabel pemetaan data ZTE">
              <table class="table table-sm align-top mb-0 manual-table">
<caption class="visually-hidden">Pemetaan data perangkat ZTE</caption>
<thead><tr><th scope="col">Data</th><th scope="col">Sumber</th><th scope="col">OID / perintah</th><th scope="col">Deskripsi</th></tr></thead>
<tbody>
  <tr>
    <th scope="row">Nama perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.1.5.0</code></td>
    <td>Nama sistem perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Uptime</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.1.3.0</code></td>
    <td>Waktu aktif perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Deskripsi sistem</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.1.1.0</code></td>
    <td>Deskripsi perangkat, termasuk informasi model dan versi.</td>
  </tr>
  <tr>
    <th scope="row">Model perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.47.1.1.1.1.13</code></td>
    <td>Model perangkat dari inventaris fisik.</td>
  </tr>
  <tr>
    <th scope="row">Serial perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.47.1.1.1.1.11.1</code></td>
    <td>Nomor seri chassis perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Waktu perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.25.1.2.0</code></td>
    <td>Tanggal dan waktu perangkat melalui SNMP.</td>
  </tr>
  <tr>
    <th scope="row">Waktu perangkat</th>
    <td>Telnet</td>
    <td><code class="text-break">show clock</code></td>
    <td>Tanggal dan waktu perangkat melalui Telnet.</td>
  </tr>
  <tr>
    <th scope="row">Nama ONU</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1012.3.28.1.1.2.{ponIndex}.{onuId}</code></td>
    <td>Baca dan ubah nama ONU.</td>
  </tr>
  <tr>
    <th scope="row">Deskripsi ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1012.3.28.1.1.3.{ponIndex}.{onuId}</code></td>
    <td>Keterangan ONU.</td>
  </tr>
  <tr>
    <th scope="row">Vendor ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1012.3.28.1.1.4.{ponIndex}.{onuId}</code></td>
    <td>Nama vendor ONU.</td>
  </tr>
  <tr>
    <th scope="row">Serial ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1012.3.28.1.1.5.{ponIndex}.{onuId}</code></td>
    <td>Nomor seri ONU.</td>
  </tr>
  <tr>
    <th scope="row">Status ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1012.3.28.2.1.2.{ponIndex}.{onuId}</code></td>
    <td>Status operasional ONU.</td>
  </tr>
  <tr>
    <th scope="row">RX ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1082.500.20.2.2.2.1.10.{ifIndex}.{onuId}.1</code></td>
    <td>Daya terima ONU, dalam dBm.</td>
  </tr>
  <tr>
    <th scope="row">TX ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1082.500.20.2.2.2.1.14.{ifIndex}.{onuId}.1</code></td>
    <td>Daya kirim ONU, dalam dBm.</td>
  </tr>
  <tr>
    <th scope="row">Suhu ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1082.500.20.2.2.2.1.19.{ifIndex}.{onuId}.1</code></td>
    <td>Suhu ONU, dalam derajat Celsius.</td>
  </tr>
  <tr>
    <th scope="row">CPU dan memori perangkat</th>
    <td>Telnet</td>
    <td><code class="text-break">show processor</code></td>
    <td>Satu keluaran berisi persentase penggunaan CPU dan memori.</td>
  </tr>
  <tr>
    <th scope="row">Suhu card</th>
    <td>Telnet</td>
    <td><code class="text-break">show card-temperature</code></td>
    <td>Suhu pada card perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Kipas</th>
    <td>Telnet</td>
    <td><code class="text-break">show fan</code></td>
    <td>Kondisi kipas perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Inventaris card</th>
    <td>Telnet</td>
    <td><code class="text-break">show card</code></td>
    <td>Daftar card pada perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Versi firmware</th>
    <td>Telnet</td>
    <td><code class="text-break">show version-running</code></td>
    <td>Versi firmware yang berjalan pada perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Daya optik per ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show pon power attenuation gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Nilai daya optik pada ONU tertentu.</td>
  </tr>
  <tr>
    <th scope="row">RX ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show pon power onu-rx gpon-olt_{ponPath}</code></td>
    <td>Daya terima pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">TX ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show pon power onu-tx gpon-olt_{ponPath}</code></td>
    <td>Daya kirim pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">RX OLT</th>
    <td>Telnet</td>
    <td><code class="text-break">show pon power olt-rx gpon-olt_{ponPath}</code></td>
    <td>Daya terima pada sisi OLT.</td>
  </tr>
  <tr>
    <th scope="row">Detail ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon onu detail-info gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Informasi detail ONU.</td>
  </tr>
  <tr>
    <th scope="row">Port Ethernet ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon remote-onu interface eth gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Status dan pengaturan port LAN. VLAN dan DHCP dibaca melalui perintah terpisah di bawah.</td>
  </tr>
  <tr>
    <th scope="row">VLAN port LAN ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon remote-onu vlan eth gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Mode dan VLAN tiap port LAN.</td>
  </tr>
  <tr>
    <th scope="row">DHCP port LAN ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon remote-onu dhcp-ip ethuni gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Pengaturan DHCP tiap port LAN.</td>
  </tr>
  <tr>
    <th scope="row">Wi-Fi dan VEIP ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon remote-onu interface {wifi|veip} gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Status dan konfigurasi antarmuka Wi-Fi atau VEIP.</td>
  </tr>
  <tr>
    <th scope="row">TR-069 dan akses jarak jauh ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show gpon remote-onu tr069-mgmt gpon-onu_{ponPath}:{onuId}</code> / <code class="text-break">show gpon remote-onu security-mgmt gpon-onu_{ponPath}:{onuId} {index}</code></td>
    <td>Konfigurasi TR-069 atau aturan akses jarak jauh.</td>
  </tr>
  <tr>
    <th scope="row">Konfigurasi layanan ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">show running-config</code></td>
    <td>Sumber konfigurasi VLAN, WAN, VEIP, Wi-Fi, dan layanan ONU lainnya.</td>
  </tr>
  <tr><th scope="row" colspan="4">Pengaturan ZTE</th></tr>
  <tr>
    <th scope="row">Status PON</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.2.1.2.2.1.7.{ifIndex}</code></td>
    <td>Baca dan ubah status admin: Enable = 1; Disable = 2.</td>
  </tr>
  <tr>
    <th scope="row">Link PON</th>
    <td>SNMP GET</td>
    <td><code class="text-break">1.3.6.1.2.1.2.2.1.8.{ifIndex}</code></td>
    <td>Status operasional port PON.</td>
  </tr>
  <tr>
    <th scope="row">Keterangan PON</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.2.1.31.1.1.1.18.{ifIndex}</code></td>
    <td>Baca dan ubah deskripsi port PON.</td>
  </tr>
  <tr>
    <th scope="row">Aktifkan / nonaktifkan ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">action active</code> / <code class="text-break">action deactive</code></td>
    <td>Di mode <code>interface gpon-onu_{ponPath}:{onuId}</code>.</td>
  </tr>
  <tr>
    <th scope="row">Port LAN ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">interface eth eth_0/{port} state {unlock|lock}</code></td>
    <td>Enable / Disable. Jalankan di mode <code>pon-onu-mng gpon-onu_{ponPath}:{onuId}</code>.</td>
  </tr>
  <tr>
    <th scope="row">Pengaturan port LAN ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">interface eth eth_0/{port} {pengaturan}</code></td>
    <td>Kecepatan dan negosiasi, kontrol daya, filter PPPoE, dan deteksi loop. Pada mode pengelolaan ONU.</td>
  </tr>
  <tr>
    <th scope="row">VLAN dan DHCP port LAN ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">vlan port eth_0/{port} ...</code> / <code class="text-break">dhcp-ip ethuni eth_0/{port} ...</code></td>
    <td>Mode VLAN, daftar VLAN, dan kebijakan DHCP. Pada mode pengelolaan ONU.</td>
  </tr>
  <tr>
    <th scope="row">Reboot / reset ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">reboot</code> / <code class="text-break">restore</code></td>
    <td>Di mode <code>pon-onu-mng gpon-onu_{ponPath}:{onuId}</code>.</td>
  </tr>
  <tr>
    <th scope="row">Registrasi / hapus ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">onu {onuId} type {type} sn {serial}</code> / <code class="text-break">no onu {onuId}</code></td>
    <td>Daftarkan, ubah tipe, atau hapus ONU di mode <code>interface gpon-olt_{ponPath}</code>.</td>
  </tr>
  <tr>
    <th scope="row">Pengaturan ONU lainnya</th>
    <td>Telnet</td>
    <td><code class="text-break">tr069-mgmt</code>, <code class="text-break">security-mgmt</code>, <code class="text-break">wan-ip</code>, <code class="text-break">veip</code>, <code class="text-break">interface wifi</code></td>
    <td>TR-069, akses jarak jauh, WAN, VEIP, dan Wi-Fi di mode pengelolaan ONU.</td>
  </tr>
  <tr>
    <th scope="row">Status Wi-Fi / VEIP ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">interface wifi wifi_0/{port} state {lock|unlock}</code> / <code class="text-break">veip {port} state {lock|unlock}</code></td>
    <td>Aktifkan atau nonaktifkan antarmuka di mode pengelolaan ONU.</td>
  </tr>
  <tr>
    <th scope="row">VLAN dan profil</th>
    <td>Telnet</td>
    <td><code class="text-break">vlan {vlanId}</code>, <code class="text-break">no vlan {vlanId}</code>, <code class="text-break">profile {traffic|tcont} ...</code>, <code class="text-break">onu profile {vlan|ip} ...</code></td>
    <td>Buat atau hapus VLAN; kelola profil layanan pada mode <code>gpon</code>.</td>
  </tr>
  <tr>
    <th scope="row">Port uplink</th>
    <td>Telnet / SNMP SET</td>
    <td><code class="text-break">interface {portRef}</code> / <code class="text-break">1.3.6.1.2.1.2.2.1.7.{ifIndex}</code></td>
    <td>Atur status, kecepatan, duplex, flow control, deskripsi, dan VLAN. Status juga dapat diubah via SNMP.</td>
  </tr>
</tbody>
</table>
            </div>
          </div>
        </details>
        <details class="manual-details" id="hioso">
          <summary><span><strong>HIOSO</strong><small>EPON · 2 / 4 port</small></span><i class="bi bi-chevron-down" aria-hidden="true"></i></summary>
          <div class="manual-details-body">
            <div class="manual-table-wrap" tabindex="0" role="region" aria-label="Tabel pemetaan data HIOSO">
              <table class="table table-sm align-top mb-0 manual-table">
<caption class="visually-hidden">Pemetaan data perangkat HIOSO</caption>
<thead><tr><th scope="col">Data</th><th scope="col">Sumber</th><th scope="col">OID / perintah</th><th scope="col">Deskripsi</th></tr></thead>
<tbody>
  <tr>
    <th scope="row">Nama perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.1.5.0</code></td>
    <td>Nama sistem perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Uptime</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.1.3.0</code></td>
    <td>Waktu aktif perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Waktu perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.25.1.2.0</code></td>
    <td>Tanggal dan waktu perangkat.</td>
  </tr>
  <tr>
    <th scope="row">MAC perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.2.2.1.6.2</code></td>
    <td>Alamat MAC perangkat pada interface 2.</td>
  </tr>
  <tr>
    <th scope="row">MAC perangkat (alternatif)</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.2.2.1.6</code></td>
    <td>Alamat MAC perangkat dari daftar interface.</td>
  </tr>
  <tr>
    <th scope="row">Versi firmware, model, dan serial perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.1.8.1.1.2.1</code></td>
    <td>Satu respons berisi versi firmware, model, dan nomor seri, dipisahkan tanda <code>/</code>.</td>
  </tr>
  <tr>
    <th scope="row">CPU perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.25.3.3.1.2.768</code></td>
    <td>Persentase penggunaan CPU perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Kapasitas memori</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.25.2.3.1.5.1</code></td>
    <td>Total kapasitas memori perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Memori terpakai</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.2.1.25.2.3.1.6.1</code></td>
    <td>Jumlah memori yang digunakan perangkat.</td>
  </tr>
  <tr>
    <th scope="row">MAC ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.11.1.{pon}.{onuId}</code></td>
    <td>Alamat MAC ONU.</td>
  </tr>
  <tr>
    <th scope="row">Nama ONU</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.37.1.{pon}.{onuId}</code></td>
    <td>Baca dan ubah nama ONU.</td>
  </tr>
  <tr>
    <th scope="row">Status ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.39.1.{pon}.{onuId}</code></td>
    <td>Status operasional ONU.</td>
  </tr>
  <tr>
    <th scope="row">RX ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.14.2.1.8.1.{pon}.{onuId}</code></td>
    <td>Daya terima pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">TX ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.14.2.1.4.1.{pon}.{onuId}</code></td>
    <td>Daya kirim pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">Suhu ONU</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.14.2.1.7.1.{pon}.{onuId}</code></td>
    <td>Suhu pada ONU.</td>
  </tr>
  <tr>
    <th scope="row">Status port LAN ONU</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.1.2.1.5.1.{pon}.{onuId}.{port}</code></td>
    <td>Baca status; ubah enable/disable port dan auto-negotiation melalui nilai kontrol tujuh byte. Byte ke-6 untuk status port, byte ke-4 untuk auto-negotiation.</td>
  </tr>
  <tr>
    <th scope="row">Port uplink</th>
    <td>SNMP GET</td>
    <td><code class="text-break">1.3.6.1.2.1.31.1.1.1.1.{ifIndex}</code>, <code class="text-break">1.3.6.1.2.1.2.2.1.{7|8}.{ifIndex}</code>, <code class="text-break">1.3.6.1.2.1.31.1.1.1.15.{ifIndex}</code></td>
    <td>Nama, status admin dan link, serta kecepatan uplink.</td>
  </tr>
  <tr>
    <th scope="row">Trafik PON</th>
    <td>Telnet</td>
    <td><code class="text-break">show olt {oltId} rate pon {pon}</code></td>
    <td>Laju trafik pada port PON.</td>
  </tr>
  <tr>
    <th scope="row">Informasi modul optik PON</th>
    <td>Telnet</td>
    <td><code class="text-break">show optical-ddm pon {oltId}/{pon}</code></td>
    <td>Informasi DDM modul optik PON.</td>
  </tr>
  <tr><th scope="row" colspan="4">Status dan pengaturan HIOSO</th></tr>
  <tr>
    <th scope="row">Status port PON</th>
    <td>SNMP GET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.1.1.1.{kolom}.1.1.{pon}</code></td>
    <td>Kolom 1–6: enable, link, auto-negotiation, kecepatan, duplex, dan flow control.</td>
  </tr>
  <tr>
    <th scope="row">Enable / Disable PON</th>
    <td>SNMP SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.1.4.1.1.1.{pon}</code></td>
    <td>Nilai 1 untuk enable; 0 untuk disable.</td>
  </tr>
  <tr>
    <th scope="row">Flow control PON</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.1.4.1.4.1.{pon}</code></td>
    <td>Nilai 1 untuk enable; 0 untuk disable.</td>
  </tr>
  <tr>
    <th scope="row">Mode autentikasi ONU</th>
    <td>SNMP GET/SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.35.1.{pon}.{onuId}</code></td>
    <td>Undef = 0; Pass = 1; Deny = 2.</td>
  </tr>
  <tr>
    <th scope="row">Reboot ONU</th>
    <td>SNMP SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.22.1.{pon}.{onuId}</code></td>
    <td>Kirim nilai 1 untuk menjalankan aksi.</td>
  </tr>
  <tr>
    <th scope="row">Enable / Disable ONU</th>
    <td>SNMP SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.{23|24}.1.{pon}.{onuId}</code></td>
    <td>Kolom 23 untuk enable; kolom 24 untuk disable. Keduanya menerima nilai 1.</td>
  </tr>
  <tr>
    <th scope="row">Reset ONU</th>
    <td>SNMP SET</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.40.1.{pon}.{onuId}</code></td>
    <td>Kirim nilai 1 untuk menjalankan aksi restore.</td>
  </tr>
  <tr>
    <th scope="row">Hapus ONU</th>
    <td>Telnet</td>
    <td><code class="text-break">delete onu {oltId}/{pon}:{onuId}</code></td>
    <td>Dijalankan di mode EPON setelah alamat MAC ONU diverifikasi.</td>
  </tr>
</tbody>
</table>
            </div>
          </div>
        </details>
        <p class="manual-note">Penanda dalam kurung kurawal diganti sesuai indeks, jalur PON, port, atau identitas ONU pada perangkat. Nilai dengan tanda <code>|</code> menunjukkan pilihan.</p>
      </section>
    </article>
  </div>
</main>
