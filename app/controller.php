<?php
declare(strict_types=1);

final class PageController
{
    public function home(): void
    {
        $this->render('pages.home', [
            'pageTitle' => 'LINNMS | Pemantauan Jaringan dan Pengelolaan OLT/ONU',
            'pageDescription' => 'LINNMS membantu memantau perangkat jaringan dan mengelola OLT serta ONU dari satu tempat.',
            'activePage' => 'home',
            'bodyClass' => 'home-page',
        ]);
    }

    public function about(): void
    {
        $this->render('pages.about', [
            'pageTitle' => 'Tentang LINNMS',
            'pageDescription' => 'Tentang LINNMS dan pengembangnya, RamonVeredic.',
            'activePage' => 'about',
            'bodyClass' => 'about-page',
        ]);
    }

    public function docs(): void
    {
        $this->render('pages.docs.index', [
            'pageTitle' => 'Docs | LINNMS',
            'pageDescription' => 'Instalasi, pemetaan data, dan changelog LINNMS.',
            'activePage' => 'docs',
            'bodyClass' => 'docs-page',
            'docSection' => 'installation',
        ]);
    }

    public function dataMapping(): void
    {
        $this->render('pages.docs.index', [
            'pageTitle' => 'Pemetaan Data | LINNMS Docs',
            'pageDescription' => 'OID SNMP dan perintah Telnet untuk perangkat ZTE dan HIOSO.',
            'activePage' => 'docs',
            'bodyClass' => 'docs-page',
            'docSection' => 'mapping',
        ]);
    }

    public function changelog(): void
    {
        $this->render('pages.docs.index', [
            'pageTitle' => 'Changelog | LINNMS Docs',
            'pageDescription' => 'Riwayat versi LINNMS.',
            'activePage' => 'docs',
            'bodyClass' => 'docs-page',
            'docSection' => 'changelog',
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
