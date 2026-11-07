<?php
declare(strict_types=1);

namespace App\View;

final class View
{
    public static function render(string $view, array $data = []): void
    {
        $template = BASE_PATH . '/resources/views/' . str_replace('.', '/', $view) . '.php';
        if (!is_file($template)) {
            throw new \RuntimeException('View not found: ' . $view);
        }

        extract($data, EXTR_SKIP);
        ob_start();
        try {
            require $template;
            $content = ob_get_clean();
        } catch (\Throwable $exception) {
            ob_end_clean();
            throw $exception;
        }
        require BASE_PATH . '/resources/views/layouts/app.php';
    }
}
