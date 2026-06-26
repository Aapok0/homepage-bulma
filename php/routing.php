<?php

function app_path_from_request(): string
{
    $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $path = trim($uri, '/');

    return preg_replace('#^v2/?#', '', $path);
}

function current_page(): string
{
    $path = app_path_from_request();

    if ($path === '' || $path === 'index.php') {
        return 'index';
    }

    return basename($path, '.php');
}

function resolve_page_file(string $root, string $page): ?string
{
    if (!preg_match('/^\w+$/', $page)) {
        return null;
    }

    $file = $root . '/' . $page . '.php';

    return is_file($file) ? $file : null;
}
