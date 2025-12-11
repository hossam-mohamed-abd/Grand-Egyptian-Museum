<?php

class Router
{
    private array $routes = [];
    private string $basePath;

    public function __construct(string $basePath = '/')
    {
        $this->basePath = rtrim($basePath, '/');
    }

    public function get(string $path, callable $handler): void
    {
        $this->addRoute('GET', $path, $handler);
    }

    public function post(string $path, callable $handler): void
    {
        $this->addRoute('POST', $path, $handler);
    }

    private function addRoute(string $method, string $path, callable $handler): void
    {
        $normalizedPath = $this->normalizePath($path);
        $this->routes[$method][$normalizedPath] = $handler;
    }

    public function dispatch(string $uri, string $method = 'GET'): void
    {
        $method = strtoupper($method);
        $path = $this->normalizePath(parse_url($uri, PHP_URL_PATH) ?? '/');

        if (isset($this->routes[$method][$path])) {
            ($this->routes[$method][$path])();
            return;
        }

        http_response_code(404);
        echo '404 Not Found';
    }

    private function normalizePath(string $path): string
    {
        $path = '/' . ltrim($path, '/');

        if ($this->basePath !== '' && $this->basePath !== '/' && str_starts_with($path, $this->basePath)) {
            $path = substr($path, strlen($this->basePath));
            $path = '/' . ltrim($path, '/');
        }

        return rtrim($path, '/') ?: '/';
    }
}
