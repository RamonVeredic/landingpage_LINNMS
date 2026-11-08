<main id="main">
  <header class="documentation-head shell container-xl">
    <nav class="mb-4" aria-label="Breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a class="link-body-emphasis" href="/">Beranda</a></li>
        <li class="breadcrumb-item"><a class="link-body-emphasis" href="/dokumentasi">Docs</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pemetaan Data Perangkat</li>
      </ol>
    </nav>
    <h1>Pemetaan Data Perangkat</h1>
    <p>OID SNMP dan perintah Telnet yang digunakan LINNMS untuk membaca data perangkat ZTE dan HIOSO.</p>
  </header>
  <div class="shell container-xl documentation-content">
    <div class="accordion linnms-accordion" id="device-vendors">
      <section class="accordion-item vendor-panel border rounded-3 overflow-hidden mb-3" id="zte">
        <h2 class="accordion-header" id="zte-heading">
          <button class="accordion-button collapsed accordion-toggle gap-3" type="button" data-bs-toggle="collapse" data-bs-target="#zte-data" aria-expanded="false" aria-controls="zte-data">
            <span class="vendor-name d-grid gap-2"><strong>ZTE</strong><span>GPON · C300 / C320</span></span>
            <span class="d-none d-sm-inline ms-auto small text-body-secondary">SNMP · Telnet</span>
            <i class="bi bi-chevron-down ms-auto ms-sm-0" aria-hidden="true"></i>
          </button>
        </h2>
        <div class="accordion-collapse collapse" id="zte-data" role="region" aria-labelledby="zte-heading" data-bs-parent="#device-vendors">
          <div class="accordion-body"><p class="mb-3">Data perangkat dan ONU dibaca melalui SNMP. Telnet digunakan untuk melengkapi informasi sistem dan detail ONU.</p>
<p class="d-lg-none small text-body-secondary mb-3">Geser ke samping untuk melihat seluruh tabel.</p>
<div class="table-responsive border rounded" tabindex="0" role="region" aria-label="Tabel pemetaan data ZTE">
<table class="table table-bordered table-striped table-hover align-top mb-0 data-source-table">
<caption class="visually-hidden">Pemetaan data perangkat ZTE</caption>
<colgroup><col class="data-col-name"><col class="data-col-source"><col class="data-col-value"><col class="data-col-description"></colgroup>
<thead class="table-active"><tr><th scope="col">Data</th><th scope="col">Source</th><th scope="col">Value</th><th scope="col">Deskripsi</th></tr></thead>
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
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.3902.1012.3.28.1.1.2.{ponIndex}.{onuId}</code></td>
    <td>Nama ONU.</td>
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
    <th scope="row">CPU perangkat</th>
    <td>Telnet</td>
    <td><code class="text-break">show processor</code></td>
    <td>Persentase penggunaan CPU perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Memori perangkat</th>
    <td>Telnet</td>
    <td><code class="text-break">show processor</code></td>
    <td>Penggunaan memori perangkat.</td>
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
    <td>Informasi port Ethernet pada ONU.</td>
  </tr>
</tbody>
</table>
</div>
          </div>
        </div>
      </section>
      <section class="accordion-item vendor-panel border rounded-3 overflow-hidden mb-3" id="hioso">
        <h2 class="accordion-header" id="hioso-heading">
          <button class="accordion-button collapsed accordion-toggle gap-3" type="button" data-bs-toggle="collapse" data-bs-target="#hioso-data" aria-expanded="false" aria-controls="hioso-data">
            <span class="vendor-name d-grid gap-2"><strong>HIOSO</strong><span>EPON · 2 / 4 port</span></span>
            <span class="d-none d-sm-inline ms-auto small text-body-secondary">SNMP · Telnet</span>
            <i class="bi bi-chevron-down ms-auto ms-sm-0" aria-hidden="true"></i>
          </button>
        </h2>
        <div class="accordion-collapse collapse" id="hioso-data" role="region" aria-labelledby="hioso-heading" data-bs-parent="#device-vendors">
          <div class="accordion-body"><p class="mb-3">Data perangkat dan ONU dibaca melalui SNMP. Trafik dan informasi modul optik PON dibaca melalui Telnet.</p>
<p class="d-lg-none small text-body-secondary mb-3">Geser ke samping untuk melihat seluruh tabel.</p>
<div class="table-responsive border rounded" tabindex="0" role="region" aria-label="Tabel pemetaan data HIOSO">
<table class="table table-bordered table-striped table-hover align-top mb-0 data-source-table">
<caption class="visually-hidden">Pemetaan data perangkat HIOSO</caption>
<colgroup><col class="data-col-name"><col class="data-col-source"><col class="data-col-value"><col class="data-col-description"></colgroup>
<thead class="table-active"><tr><th scope="col">Data</th><th scope="col">Source</th><th scope="col">Value</th><th scope="col">Deskripsi</th></tr></thead>
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
    <th scope="row">Versi firmware</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.1.8.1.1.2.1</code></td>
    <td>Versi perangkat lunak.</td>
  </tr>
  <tr>
    <th scope="row">Model perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.1.8.1.1.2.1</code></td>
    <td>Model perangkat.</td>
  </tr>
  <tr>
    <th scope="row">Serial perangkat</th>
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.1.8.1.1.2.1</code></td>
    <td>Nomor seri perangkat.</td>
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
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.3.2.1.37.1.{pon}.{onuId}</code></td>
    <td>Nama ONU.</td>
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
    <td>SNMP</td>
    <td><code class="text-break">1.3.6.1.4.1.25355.3.2.6.1.2.1.5.1.{pon}.{onuId}.{port}</code></td>
    <td>Status port LAN ONU.</td>
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
</tbody>
</table>
</div>
          </div>
        </div>
      </section>
    </div>
    <div class="documentation-note"><i class="bi bi-info-circle" aria-hidden="true"></i><p>Penanda seperti {ponIndex}, {ifIndex}, dan {onuId} menunjukkan indeks perangkat atau ONU pada OID dan perintah.</p></div>
  </div>
</main>
