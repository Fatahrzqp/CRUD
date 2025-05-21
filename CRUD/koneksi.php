<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// koneksi.php

// Konfigurasi koneksi
$host = "localhost";      // Server database (default: localhost)
$user = "root";           // Username MySQL (default: root)
$password = "";           // Password MySQL (default XAMPP kosong)
$database = "db_kampus";  // Nama database yang sudah dibuat

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi berhasil atau gagal
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
</body>
</html>