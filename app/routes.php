<?php
declare(strict_types=1);

return [
    'pages' => [
        '/' => 'home',
        '/tentang' => 'about',
        '/dokumentasi' => 'docs',
        '/dokumentasi/instalasi' => 'installation',
        '/dokumentasi/pemetaan-data' => 'dataMapping',
        '/dokumentasi/changelog' => 'changelog',
    ],
    'redirects' => [
        '/index.php' => '/',
        '/about.php' => '/tentang',
        '/about' => '/tentang',
        '/docs.php' => '/dokumentasi',
        '/docs' => '/dokumentasi',
        '/instalasi.php' => '/dokumentasi/instalasi',
        '/instalasi' => '/dokumentasi/instalasi',
        '/oid.php' => '/dokumentasi/pemetaan-data',
        '/oid' => '/dokumentasi/pemetaan-data',
        '/dokumentasi/oid' => '/dokumentasi/pemetaan-data',
        '/dokumentasi/sumber-data' => '/dokumentasi/pemetaan-data',
        '/changelog.php' => '/dokumentasi/changelog',
        '/changelog' => '/dokumentasi/changelog',
        '/fitur.php' => '/#fitur',
        '/fitur' => '/#fitur',
    ],
];
