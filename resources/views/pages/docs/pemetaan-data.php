<main id="main">
  <header class="documentation-head shell container-xl">
    <nav class="crumb" aria-label="Breadcrumb"><a href="/">Beranda</a><span>/</span><a href="/dokumentasi">Dokumentasi</a><span>/</span>Pemetaan Data Perangkat</nav>
    <h1>Pemetaan Data Perangkat</h1>
    <p>Asal informasi sistem, identitas ONU, status, dan nilai optik yang dibaca LINNMS pada perangkat ZTE dan HIOSO.</p>
  </header>
  <div class="shell container-xl documentation-content">
<details class="vendor-panel" id="zte" open><summary><div><h2>ZTE</h2><span>GPON · C300 / C320</span></div><div class="vendor-protocols"><span>SNMP</span><span>Telnet</span><i class="bi bi-chevron-down" aria-hidden="true"></i></div></summary><div class="vendor-content"><p class="vendor-intro">Informasi dasar dan identitas ONU dibaca melalui SNMP. CLI Telnet melengkapi pembacaan seperti CPU, memori, card, dan detail ONU. Nilai optik memiliki jalur pembacaan SNMP serta CLI sesuai operasi yang dijalankan.</p>
<p class="data-table-hint">Geser tabel untuk melihat seluruh kolom.</p>
<div class="table-responsive data-table-scroll" tabindex="0" role="region" aria-label="Tabel pemetaan data ZTE">
<table class="table table-bordered table-striped align-middle mb-0 data-source-table">
<caption class="visually-hidden">Data, sumber pembacaan, OID atau perintah, dan deskripsi untuk ZTE</caption>
<colgroup><col class="data-col-name"><col class="data-col-source"><col class="data-col-value"><col class="data-col-description"></colgroup>
<thead><tr><th scope="col">Data</th><th scope="col">Source</th><th scope="col">Value</th><th scope="col">Deskripsi</th></tr></thead>
<tbody>
  <tr>
    <th scope="row">Nama perangkat</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.1.5.0</code></td>
    <td>Nama sistem perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Uptime</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.1.3.0</code></td>
    <td>Waktu aktif perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Deskripsi sistem</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.1.1.0</code></td>
    <td>Deskripsi perangkat, termasuk informasi model dan versi.</td>
  </tr>
  <tr>
    <th scope="row">Model perangkat</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.47.1.1.1.1.13</code></td>
    <td>Model perangkat dari inventaris fisik.</td>
  </tr>
  <tr>
    <th scope="row">Serial perangkat</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.47.1.1.1.1.11.1</code></td>
    <td>Nomor seri chassis perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Waktu perangkat</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.25.1.2.0</code></td>
    <td>Tanggal dan waktu perangkat melalui SNMP.</td>
  </tr>
  <tr>
    <th scope="row">Waktu perangkat</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show clock</code></td>
    <td>Tanggal dan waktu perangkat melalui Telnet.</td>
  </tr>
  <tr>
    <th scope="row">Nama ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.3902.1012.3.28.1.1.2.{ponIndex}.{onuId}</code></td>
    <td>Nama ONU.</td>
  </tr>
  <tr>
    <th scope="row">Deskripsi ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.3902.1012.3.28.1.1.3.{ponIndex}.{onuId}</code></td>
    <td>Keterangan ONU.</td>
  </tr>
  <tr>
    <th scope="row">Vendor ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.3902.1012.3.28.1.1.4.{ponIndex}.{onuId}</code></td>
    <td>Nama vendor ONU.</td>
  </tr>
  <tr>
    <th scope="row">Serial ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.3902.1012.3.28.1.1.5.{ponIndex}.{onuId}</code></td>
    <td>Nomor seri ONU.</td>
  </tr>
  <tr>
    <th scope="row">Status ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.3902.1012.3.28.2.1.2.{ponIndex}.{onuId}</code></td>
    <td>Status operasional ONU.</td>
  </tr>
  <tr>
    <th scope="row">RX ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.3902.1082.500.20.2.2.2.1.10.{ifIndex}.{onuId}.1</code></td>
    <td>Daya terima ONU, dalam dBm.</td>
  </tr>
  <tr>
    <th scope="row">TX ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.3902.1082.500.20.2.2.2.1.14.{ifIndex}.{onuId}.1</code></td>
    <td>Daya kirim ONU, dalam dBm.</td>
  </tr>
  <tr>
    <th scope="row">Suhu ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.3902.1082.500.20.2.2.2.1.19.{ifIndex}.{onuId}.1</code></td>
    <td>Suhu ONU, dalam derajat Celsius.</td>
  </tr>
  <tr>
    <th scope="row">CPU perangkat</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show processor</code></td>
    <td>Persentase penggunaan CPU perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Memori perangkat</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show processor</code></td>
    <td>Penggunaan memori perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Suhu card</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show card-temperature</code></td>
    <td>Suhu pada card perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Kipas</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show fan</code></td>
    <td>Kondisi kipas perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Inventaris card</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show card</code></td>
    <td>Daftar card pada perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Versi firmware</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show version-running</code></td>
    <td>Versi firmware yang berjalan pada perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Daya optik per ONU</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show pon power attenuation gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Nilai daya optik pada ONU tertentu.</td>
  </tr>
  <tr>
    <th scope="row">RX ONU</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show pon power onu-rx gpon-olt_{ponPath}</code></td>
    <td>Daya terima pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">TX ONU</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show pon power onu-tx gpon-olt_{ponPath}</code></td>
    <td>Daya kirim pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">RX OLT</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show pon power olt-rx gpon-olt_{ponPath}</code></td>
    <td>Daya terima pada sisi OLT.</td>
  </tr>
  <tr>
    <th scope="row">Detail ONU</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show gpon onu detail-info gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Informasi detail ONU.</td>
  </tr>
  <tr>
    <th scope="row">Port Ethernet ONU</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show gpon remote-onu interface eth gpon-onu_{ponPath}:{onuId}</code></td>
    <td>Informasi port Ethernet pada ONU.</td>
  </tr>
</tbody>
</table>
</div>
</div></details>
<details class="vendor-panel" id="hioso"><summary><div><h2>HIOSO</h2><span>EPON · 2 / 4 port</span></div><div class="vendor-protocols"><span>SNMP</span><span>Telnet</span><i class="bi bi-chevron-down" aria-hidden="true"></i></div></summary><div class="vendor-content"><p class="vendor-intro">Nama, MAC, status ONU, serta nilai optik ONU dibaca melalui SNMP. Trafik PON dan informasi modul optik PON menggunakan Telnet sesuai konfigurasi driver.</p>
<p class="data-table-hint">Geser tabel untuk melihat seluruh kolom.</p>
<div class="table-responsive data-table-scroll" tabindex="0" role="region" aria-label="Tabel pemetaan data HIOSO">
<table class="table table-bordered table-striped align-middle mb-0 data-source-table">
<caption class="visually-hidden">Data, sumber pembacaan, OID atau perintah, dan deskripsi untuk HIOSO</caption>
<colgroup><col class="data-col-name"><col class="data-col-source"><col class="data-col-value"><col class="data-col-description"></colgroup>
<thead><tr><th scope="col">Data</th><th scope="col">Source</th><th scope="col">Value</th><th scope="col">Deskripsi</th></tr></thead>
<tbody>
  <tr>
    <th scope="row">Nama perangkat</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.1.5.0</code></td>
    <td>Nama sistem perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Uptime</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.1.3.0</code></td>
    <td>Waktu aktif perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Waktu perangkat</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.25.1.2.0</code></td>
    <td>Tanggal dan waktu perangkat.</td>
  </tr>
  <tr>
    <th scope="row">MAC perangkat</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.2.2.1.6.2</code></td>
    <td>Alamat MAC perangkat pada interface 2.</td>
  </tr>
  <tr>
    <th scope="row">MAC perangkat (alternatif)</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.2.2.1.6</code></td>
    <td>Alamat MAC valid dari daftar interface perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Versi firmware</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.25355.3.1.8.1.1.2.1</code></td>
    <td>Versi perangkat lunak; bagian pertama respons.</td>
  </tr>
  <tr>
    <th scope="row">Model perangkat</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.25355.3.1.8.1.1.2.1</code></td>
    <td>Model perangkat; bagian kedua respons.</td>
  </tr>
  <tr>
    <th scope="row">Serial perangkat</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.25355.3.1.8.1.1.2.1</code></td>
    <td>Nomor seri perangkat; bagian ketiga respons.</td>
  </tr>
  <tr>
    <th scope="row">CPU perangkat</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.25.3.3.1.2.768</code></td>
    <td>Persentase penggunaan CPU perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Kapasitas memori</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.25.2.3.1.5.1</code></td>
    <td>Kapasitas memori untuk perhitungan penggunaan memori.</td>
  </tr>
  <tr>
    <th scope="row">Memori terpakai</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.2.1.25.2.3.1.6.1</code></td>
    <td>Jumlah memori terpakai untuk perhitungan persentase penggunaan.</td>
  </tr>
  <tr>
    <th scope="row">MAC ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.25355.3.2.6.3.2.1.11.1.{pon}.{onuId}</code></td>
    <td>Alamat MAC ONU.</td>
  </tr>
  <tr>
    <th scope="row">Nama ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.25355.3.2.6.3.2.1.37.1.{pon}.{onuId}</code></td>
    <td>Nama ONU.</td>
  </tr>
  <tr>
    <th scope="row">Status ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.25355.3.2.6.3.2.1.39.1.{pon}.{onuId}</code></td>
    <td>Status operasional ONU.</td>
  </tr>
  <tr>
    <th scope="row">RX ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.25355.3.2.6.14.2.1.8.1.{pon}.{onuId}</code></td>
    <td>Daya terima pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">TX ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.25355.3.2.6.14.2.1.4.1.{pon}.{onuId}</code></td>
    <td>Daya kirim pada sisi ONU.</td>
  </tr>
  <tr>
    <th scope="row">Suhu ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.25355.3.2.6.14.2.1.7.1.{pon}.{onuId}</code></td>
    <td>Suhu pada ONU.</td>
  </tr>
  <tr>
    <th scope="row">Status port LAN ONU</th>
    <td><span class="data-protocol protocol-snmp">SNMP</span></td>
    <td><code>1.3.6.1.4.1.25355.3.2.6.1.2.1.5.1.{pon}.{onuId}.{port}</code></td>
    <td>Status port LAN ONU.</td>
  </tr>
  <tr>
    <th scope="row">Trafik PON</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show olt {oltId} rate pon {pon}</code></td>
    <td>Laju trafik pada port PON.</td>
  </tr>
  <tr>
    <th scope="row">Informasi modul optik PON</th>
    <td><span class="data-protocol protocol-cli">Telnet</span></td>
    <td><code>show optical-ddm pon {oltId}/{pon}</code></td>
    <td>Informasi DDM modul optik PON.</td>
  </tr>
</tbody>
</table>
</div>
</div></details>
    <div class="documentation-note"><i class="bi bi-info-circle" aria-hidden="true"></i><p>Bagian di dalam tanda kurung kurawal adalah indeks yang diisi driver, bukan angka OID tetap. Respons yang tidak tersedia atau gagal dibaca tidak dianggap sebagai nilai pengukuran yang valid.</p></div>
  </div>
</main>
