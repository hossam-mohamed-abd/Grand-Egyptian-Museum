<?php

class Auth
{
    private const ALLOWED_PATHS = ['/', '/login'];

    public static function check(string $path): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $normalizedPath = self::normalizePath(parse_url($path, PHP_URL_PATH) ?? '/');

        if (in_array($normalizedPath, self::ALLOWED_PATHS, true)) {
            return;
        }

        if (empty($_SESSION['user'])) {
            header('Location: /GEM_mvc/public/login');
            exit;
        }
    }

    private static function normalizePath(string $path): string
    {
        $path = '/' . ltrim($path, '/');
        $basePath = defined('BASE_URL') ? rtrim(BASE_URL, '/') : '';

        if ($basePath !== '' && $basePath !== '/' && str_starts_with($path, $basePath)) {
            $path = substr($path, strlen($basePath));
            $path = '/' . ltrim($path, '/');
        }

        return rtrim($path, '/') ?: '/';
    }
}
