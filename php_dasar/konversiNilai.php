<?php
$nilai = 85;

if ($nilai >= 90 && $nilai <= 100) {
    echo "A";
} elseif ($nilai >= 80 && $nilai < 90) {
    echo "AB";
} elseif ($nilai >= 70 && $nilai < 80) {
    echo "B";
} elseif ($nilai >= 60 && $nilai < 70) {
    echo "BC";
} elseif ($nilai >= 0 && $nilai < 60) {
    echo "C";
} else {
    echo "Nilai tidak valid!";
}
?>
