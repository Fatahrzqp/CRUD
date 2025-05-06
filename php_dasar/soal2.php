<?php
$jumlah_uang = 1387500;
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);
echo "Jumlah uang: Rp " . number_format($jumlah_uang, 0, ',', '.') . "<br><br>";

foreach ($pecahan as $uang) {
    $jumlah_pecahan = floor($jumlah_uang / $uang);
    echo "Rp " . number_format($uang, 0, ',', '.') . " : " . $jumlah_pecahan . " lembar<br>";
    $jumlah_uang %= $uang;
}
?>
