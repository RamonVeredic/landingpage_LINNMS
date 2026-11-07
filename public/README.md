# LINNMS — Network Management System Landing Page

Landing page khusus **LINNMS** dalam folder mandiri `linnms-landingpage-tamplat/` di repository `RamonVeredic/LandingPage:main`. Template ini berdampingan dengan `Tech-Netnms/` dan tidak mengubah template pertama.

## Struktur situs

- `index.php` — landing page produk: hero, contoh dashboard LINNMS, fitur utama, profil singkat dan CTA dokumentasi.
- `fitur.php` — detail fitur pemantauan, pengelolaan OLT/ONU, dan aktivitas sinkronisasi.
- `about.php` — profil produk, tujuan, dan sasaran pengguna LINNMS.
- `docs.php` — indeks dokumentasi.
- `instalasi.php` — panduan instalasi LINNMS Production (Docker Compose / CasaOS).
- `oid.php` — dokumentasi OID yang digunakan LINNMS, dipisahkan per vendor ZTE dan HIOSO.
- `changelog.php` — catatan perubahan versi yang tercatat pada `LINNMS-Staging/config/README.md`.

Navigasi utama: **Beranda · Fitur · Dokumentasi · Tentang · Masuk / Daftar**. Fitur membuka halaman khusus `fitur.php` dengan detail setiap kemampuan; kartu fitur di beranda membuka bagian yang sesuai. Instalasi, OID, dan catatan perubahan diakses dari pusat dokumentasi.

Desain responsive dark navy dengan aksen **hijau → cyan → biru** mengikuti **logo LINNMS resmi**, bukan logo generik. Aset `assets/linnms-logo.png` dan `assets/favicon.ico` bersumber dari `RamonVeredic/icon` pada `LINNMS/LINNMS_icon_cropped.png` dan `LINNMS/LINNMS_icon.ico`. Sub-brand konsisten: **NETWORK MANAGEMENT SYSTEM**.

Mockup ringkasan jaringan pada beranda adalah ilustrasi konsep (bukan data perangkat asli atau klaim performa). Tidak ada logo atau foto stok.

## Cara melihat

Buka situs melalui server PHP dari folder proyek:

```bash
cd linnms-landingpage-tamplat
php -S 127.0.0.1:8000
```

Lalu buka `http://localhost:8000`.

Tidak membutuhkan bundler, backend, atau dependensi npm. Google Fonts opsional dengan fallback sistem. Layout dan interaksi utama tetap memakai `assets/css/styles.css` serta `assets/js/script.js` lokal. Ikon menggunakan stylesheet **Bootstrap Icons 1.13.1 melalui jsDelivr CDN** pada semua halaman; Google Fonts dimuat dari CDN dengan fallback sistem. Jika offline, teks navigasi tetap tersedia tetapi ikon CDN tidak tampil. Tidak memerlukan bundler.

## Konfigurasi dan keamanan

Nama image rujukan: `ghcr.io/ramonveredic/linnms`. Hanya gunakan tag yang sudah tersedia. Contoh deployment mengacu pada `RamonVeredic/LINNMS/deploy/`; periksa kredensial database dan batas akses sebelum dipakai.

OID untuk ZTE dan HIOSO didokumentasikan sesuai penggunaannya pada driver `LINNMS-Staging`, masing-masing dalam satu tabel per vendor. Changelog mengikuti catatan pada `LINNMS-Staging/config/README.md`.

## Penyesuaian tampilan

Hero beranda menggunakan tipografi dan spacing yang konsisten, dua CTA berukuran tetap, dan contoh dashboard ringkas dengan hanya dua baris perangkat. Preview merupakan data ilustrasi, bukan live monitor. Navigasi desktop memakai area klik berukuran tetap, hover, active, dan focus-visible; mobile tetap memakai menu responsif. CSS khusus tampilan tetap lokal untuk memudahkan perubahan desain tanpa build step.

## Dropdown Masuk / Daftar

Edit konstanta `AUTH_URLS` pada awal `assets/js/script.js` untuk memasukkan URL autentikasi resmi:

```js
const AUTH_URLS={login:'https://domain-aplikasi.example/login',register:'https://domain-aplikasi.example/register'};
```

Alamat di atas hanyalah **contoh format**, bukan endpoint resmi LINNMS yang sudah diverifikasi. Jika nilai tetap kosong, menu dapat dibuka tetapi tautan Masuk dan Daftar nonaktif, sehingga tidak mengarahkan pengguna ke URL palsu. Hanya URL HTTP/HTTPS yang diterima.
