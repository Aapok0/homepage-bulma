<?php
// Local dev router — use: APP_ENV=local php -S localhost:8080 router.php

require __DIR__ . '/php/routing.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $uri;

if ($uri !== '/' && is_file($file)) {
    return false;
}

if (preg_match('#^/(config|components|php)/#', $uri)) {
    http_response_code(403);
    echo 'Forbidden';
    return true;
}

$path = app_path_from_request();

if ($path === '' || $path === 'index.php') {
    require __DIR__ . '/index.php';
    return true;
}

$pageFile = resolve_page_file(__DIR__, basename($path, '.php'));

if ($pageFile !== null) {
    require $pageFile;
    return true;
}

http_response_code(404);
echo '404 Not Found';
return true;
