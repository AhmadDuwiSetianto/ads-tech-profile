<?php
// 1. Tampilkan error jika ada
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Cek apakah Composer benar-benar sudah jalan
if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
    die('ERROR: Folder vendor tidak ditemukan. Composer gagal dijalankan oleh Vercel.');
}

// 3. Belokkan folder storage dan cache ke /tmp (karena Vercel read-only)
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_EVENTS_CACHE'] = '/tmp/events.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';
$_ENV['CACHE_DRIVER'] = 'array';
$_ENV['SESSION_DRIVER'] = 'cookie';
$_ENV['LOG_CHANNEL'] = 'stderr';

// 4. Jalankan Laravel
require __DIR__ . '/../public/index.php';