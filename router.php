<?php
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $url;

if (file_exists($file) && is_file($file)) {
    return false;
}


$_GET['url'] = ltrim($url, '/');
include __DIR__ . '/index.php';
