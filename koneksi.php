<?php
// koneksi.php

// 1. Parameter koneksi
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'uas_ecommerseif23h');

// 2. Buat koneksi
$koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// 3. Cek koneksi
if (!$koneksi) {
    // Gagal koneksi: hentikan skrip dan tampilkan pesan
    die('Koneksi gagal: ' . mysqli_connect_error());
}

// 4. (Opsional) Set charset agar text handling lebih aman
mysqli_set_charset($koneksi, 'utf8mb4');
