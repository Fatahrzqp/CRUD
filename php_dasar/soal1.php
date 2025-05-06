<?php
$gaji_pokok = 3250000;
$tunjangan = 1200000;
$gaji_kotor = $gaji_pokok + $tunjangan;
$pajak = 0.10 * $gaji_kotor;
$gaji_bersih = $gaji_kotor - $pajak;

echo "Gaji bersih yang diterima Obi: Rp " . number_format($gaji_bersih, 0, ',', '.');
?>
