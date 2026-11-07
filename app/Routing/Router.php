<?php
declare(strict_types=1);

namespace App\Routing;

use App\Http\Controllers\PageController;

final class Router
{
    public function __construct(
        private array $routes,
        private array $redirects,
        private PageController $controller,
    ) {
    }

    public function dispatch(string $method, string $uri): void
    {
        $path = parse_url($uri, PHP_URL_PATH);
        if (!is_string($path) || !str_starts_with($path, '/')) {
            $this->controller->error(400);
            return;
        }

        $canonical = rtrim($path, '/') ?: '/';
        $matched = null;
        foreach ($this->routes as $route) {
            if ($route['path'] === $canonical) {
                $matched = $route;
                break;
            }
        }

        if ($matched === null && !isset($this->redirects[$canonical])) {
            $this->controller->error(404);
            return;
        }

        if (!in_array($method, ['GET', 'HEAD'], true)) {
            header('Allow: GET, HEAD');
            $this->controller->error(405);
            return;
        }

        if (isset($this->redirects[$canonical]) || $canonical !== $path) {
            $target = $this->redirects[$canonical] ?? $canonical;
            $query = parse_url($uri, PHP_URL_QUERY);
            [$destination, $fragment] = array_pad(explode('#', $target, 2), 2, null);
            if (is_string($query) && $query !== '') {
                $destination .= '?' . $query;
            }
            if ($fragment !== null) {
                $destination .= '#' . $fragment;
            }
            header('Location: ' . $destination, true, 301);
            return;
        }

        header('Content-Type: text/html; charset=UTF-8');
        $this->controller->{$matched['action']}();
    }
}
