<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\View\View;

final class PageController
{
    public function home(): void
    {
        View::render('pages.home', [
            'pageTitle' => 'LINNMS | Pemantauan Jaringan dan Pengelolaan OLT/ONU',
            'pageDescription' => 'Pantau status perangkat, kelola OLT dan ONU, serta telusuri aktivitas jaringan melalui LINNMS.',
            'activePage' => 'home',
            'bodyClass' => 'home-page',
        ]);
    }

    public function about(): void
    {
        View::render('pages.about', [
            'pageTitle' => 'Tentang LINNMS',
            'pageDescription' => 'Tentang LINNMS, aplikasi manajemen jaringan yang dikembangkan oleh RamonVeredic dengan bantuan AI.',
            'activePage' => 'about',
            'bodyClass' => 'about-page',
        ]);
    }

    public function docs(): void
    {
        View::render('pages.docs.index', [
            'pageTitle' => 'Dokumentasi | LINNMS',
            'pageDescription' => 'Dokumentasi LINNMS: instalasi, OID perangkat, dan changelog.',
            'activePage' => 'docs',
            'bodyClass' => 'docs-index-page',
        ]);
    }

    public function installation(): void
    {
        View::render('pages.docs.installation', [
            'pageTitle' => 'Instalasi LINNMS | Dokumentasi',
            'pageDescription' => 'Panduan instalasi LINNMS menggunakan berkas Docker Compose resmi atau CasaOS.',
            'activePage' => 'docs',
            'bodyClass' => '',
        ]);
    }

    public function oid(): void
    {
        View::render('pages.docs.oid', [
            'pageTitle' => 'OID perangkat | Dokumentasi LINNMS',
            'pageDescription' => 'OID yang digunakan LINNMS untuk membaca data perangkat melalui SNMP.',
            'activePage' => 'docs',
            'bodyClass' => '',
        ]);
    }

    public function changelog(): void
    {
        View::render('pages.docs.changelog', [
            'pageTitle' => 'Changelog | LINNMS',
            'pageDescription' => 'Changelog LINNMS v1.0.2 dan v1.0.3.',
            'activePage' => 'docs',
            'bodyClass' => '',
        ]);
    }

    public function error(int $status): void
    {
        http_response_code($status);
        $messages = [
            400 => ['Permintaan tidak valid', 'Alamat yang diminta tidak dapat diproses.'],
            404 => ['Halaman tidak ditemukan', 'Halaman yang Anda cari tidak tersedia.'],
            405 => ['Metode tidak didukung', 'Halaman ini hanya dapat dibuka melalui GET atau HEAD.'],
            500 => ['Halaman belum dapat dimuat', 'Silakan coba kembali beberapa saat lagi.'],
        ];
        [$heading, $message] = $messages[$status];
        View::render('errors.http', [
            'pageTitle' => $heading . ' | LINNMS',
            'pageDescription' => $message,
            'activePage' => '',
            'bodyClass' => '',
            'status' => $status,
            'heading' => $heading,
            'message' => $message,
        ]);
    }
}
