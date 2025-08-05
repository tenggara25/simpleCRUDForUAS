<?php
// delete.php

// 1. Load koneksi database
require_once 'koneksi.php';

// 2. Validasi parameter delete
if (isset($_GET['delete']) && $_GET['delete'] !== '') {
    // Sanitasi input untuk cegah SQL injection
    $deleteId = mysqli_real_escape_string($koneksi, $_GET['delete']);

    // 3. Eksekusi query hapus
    $sql = "DELETE FROM warga WHERE NIK = '$deleteId'";
    $deleted = mysqli_query($koneksi, $sql);

    // 4. Tutup koneksi
    mysqli_close($koneksi);

    // 5. Redirect kembali ke halaman list dengan notifikasi
    header("Location: inputdatawarga.php?deleted=" . ($deleted ? "1" : "0"));
    exit;
}

// Kalau akses tanpa parameter, balik lagi
header("Location: inputdatawarga.php");
exit;


