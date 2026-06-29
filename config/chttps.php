<?php
if (getenv('APP_ENV') === 'local') {
    return;
}

$hosts = include __DIR__ . '/hosts.php';

function request_host(array $hosts): string
{
    $host = $_SERVER['HTTP_HOST'] ?? '';
    $host = strtolower(preg_replace('/:\d+$/', '', $host));

    if (in_array($host, $hosts['allowed'], true)) {
        return $host;
    }

    foreach ($hosts['allowed_suffixes'] ?? [] as $suffix) {
        if (str_ends_with($host, $suffix)) {
            return $host;
        }
    }

    http_response_code(400);
    exit('Invalid host');
}

function is_https(): bool
{
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
        return true;
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
        return true;
    }

    return false;
}

$host = request_host($hosts);

if (!is_https() && !in_array($host, $hosts['local'], true)) {
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    header('Location: https://' . $host . $uri, true, 301);
    exit;
}
