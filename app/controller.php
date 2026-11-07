<?php
declare(strict_types=1);

final class PageController
{
    public function home(): void
    {
        $this->render('pages.home', [
            'pageTitle' => 'LINNMS | Pemantauan Jaringan dan Pengelolaan OLT/ONU',
            'pageDescription' => 'Pantau status perangkat, kelola OLT dan ONU, serta telusuri aktivitas jaringan melalui LINNMS.',
            'activePage' => 'home',
            'bodyClass' => 'home-page',
        ]);
    }

    public function about(): void
    {
        $this->render('pages.about', [
            'pageTitle' => 'Tentang LINNMS',
            'pageDescription' => 'Tentang LINNMS, aplikasi manajemen jaringan yang dikembangkan oleh RamonVeredic dengan bantuan AI.',
            'activePage' => 'about',
            'bodyClass' => 'about-page',
        ]);
    }

    public function docs(): void
    {
        $this->render('pages.docs.index', [
            'pageTitle' => 'Dokumentasi | LINNMS',
            'pageDescription' => 'Panduan instalasi, pemetaan data perangkat, dan changelog LINNMS.',
            'activePage' => 'docs',
            'bodyClass' => 'docs-index-page',
        ]);
    }

    public function installation(): void
    {
        $this->render('pages.docs.installation', [
            'pageTitle' => 'Instalasi LINNMS | Dokumentasi',
            'pageDescription' => 'Panduan instalasi LINNMS menggunakan berkas Docker Compose resmi atau CasaOS.',
            'activePage' => 'docs',
            'bodyClass' => '',
        ]);
    }

    public function dataMapping(): void
    {
        $this->render('pages.docs.pemetaan-data', [
            'pageTitle' => 'Pemetaan Data Perangkat | Dokumentasi LINNMS',
            'pageDescription' => 'Pemetaan data ZTE dan HIOSO beserta OID SNMP dan perintah Telnet yang digunakan LINNMS.',
            'activePage' => 'docs',
            'bodyClass' => '',
        ]);
    }

    public function changelog(): void
    {
        $this->render('pages.docs.changelog', [
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
        $this->render('error', [
            'pageTitle' => $heading . ' | LINNMS',
            'pageDescription' => $message,
            'activePage' => '',
            'bodyClass' => '',
            'status' => $status,
            'heading' => $heading,
            'message' => $message,
        ]);
    }

    private function render(string $view, array $data): void
    {
        $template = BASE_PATH . '/public/views/' . str_replace('.', '/', $view) . '.php';
        if (!is_file($template)) {
            throw new RuntimeException('View not found: ' . $view);
        }

        extract($data, EXTR_SKIP);
        ob_start();
        try {
            require $template;
            $content = ob_get_clean();
        } catch (Throwable $exception) {
            ob_end_clean();
            throw $exception;
        }
        require BASE_PATH . '/public/views/layout.php';
    }
}
