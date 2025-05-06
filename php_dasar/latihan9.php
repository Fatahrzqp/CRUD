<?php
// Contoh fungsi
function writeMsg($nama) {
    echo "Selamat datang, " . $nama . "<br>";
}

// Fungsi dengan return
function tambah($angka1, $angka2) {
    $a = $angka1;
    $b = $angka2;
    return $a + $b; // mengembalikan hasil ke pemanggil
}

$hasil = tambah(angka1: 5, angka2: 5);
echo $hasil;
?>
