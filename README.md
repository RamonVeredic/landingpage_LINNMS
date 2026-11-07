# LINNMS Landing Page

Situs produk dan dokumentasi LINNMS berbasis PHP, dengan satu front controller dan pemisahan route, controller, serta view. Susunan folder mengikuti pola yang umum digunakan Laravel; proyek ini tidak menggunakan framework Laravel atau Composer.

## Struktur

```text
app/
  Http/Controllers/PageController.php
  Routing/Router.php
  View/View.php
  helpers.php
bootstrap/app.php
routes/
  web.php
  redirects.php
resources/views/
  layouts/app.php
  partials/
  pages/
    home.php
    about.php
    docs/
  errors/http.php
public/
  index.php
  assets/
nginx/site-confs/default.conf
server.php
tests/routes.php
```

`public/` adalah document root. Hanya entry point dan aset statis yang tersedia melalui web. Controller memilih halaman dan metadata; view halaman hanya memuat kontennya. Layout menyatukan head, navigasi, konten, footer, dan JavaScript.

## Route

| Nama | URL |
| --- | --- |
| `home` | `/` |
| `about` | `/tentang` |
| `docs.index` | `/dokumentasi` |
| `docs.installation` | `/dokumentasi/instalasi` |
| `docs.oid` | `/dokumentasi/oid` |
| `docs.changelog` | `/dokumentasi/changelog` |

Fitur merupakan bagian `/#fitur` pada beranda. Tombol Coba Gratis dan Pesan Sekarang masih menggunakan `#` sampai alamat WhatsApp diisi.

Daftar route berada di `routes/web.php`. Helper `route('docs.oid')` menghasilkan URL berdasarkan nama route. Helper `asset('css/styles.css')` menghasilkan `/assets/css/styles.css`, sehingga aset tetap benar pada URL bertingkat.

Alamat lama seperti `/oid.php` dialihkan permanen ke URL baru. Pengalihan juga mempertahankan query string. Route yang tidak dikenal menampilkan 404; metode selain GET dan HEAD pada halaman yang tersedia menghasilkan 405.

## Menjalankan lokal

Gunakan PHP 8.1 atau lebih baru. Jalankan dari direktori proyek:

```bash
php -S 127.0.0.1:8000 -t public server.php
```

Buka `http://127.0.0.1:8000`.

## Nginx Docker

Instalasi server saat ini memasang direktori proyek ke `/config` dalam container `Nginx`. Konfigurasi yang disertakan memakai `/config/public` sebagai document root dan PHP-FPM pada `127.0.0.1:9000`.

```bash
docker exec Nginx nginx -t
docker exec Nginx nginx -s reload
```

Hanya `/index.php` yang dieksekusi oleh PHP-FPM. Permintaan halaman lainnya diteruskan ke front controller; aset yang tidak ditemukan menghasilkan 404.

## Pemeriksaan route

Dengan server lokal aktif:

```bash
php tests/routes.php http://127.0.0.1:8000
```

Untuk instalasi Docker saat ini:

```bash
docker exec Nginx php /config/tests/routes.php http://127.0.0.1
```

Pemeriksaan mencakup halaman, tautan internal, aset, pengalihan alamat lama, query string, trailing slash, HEAD, 404, dan 405.

Bootstrap dan Bootstrap Icons dimuat dari CDN. CSS tema dan JavaScript aplikasi berada di `public/assets/`. Tidak diperlukan npm atau proses build.
