<?php
declare(strict_types=1);

use App\Http\Controllers\PageController;
use App\Routing\Router;

define('BASE_PATH', dirname(__DIR__));

spl_autoload_register(static function (string $class): void {
    $prefix = 'App\\';
    if (!str_starts_with($class, $prefix)) {
        return;
    }
    $path = BASE_PATH . '/app/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
    if (is_file($path)) {
        require $path;
    }
});

require BASE_PATH . '/app/helpers.php';

return new Router(web_routes(), require BASE_PATH . '/routes/redirects.php', new PageController());
