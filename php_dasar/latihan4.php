<?php
/* Operator Logika yang bisa digunakan
 * == Sama Dengan          $x == $y
 * === Identical           $x === $y
 * != Tidak sama dengan    $x != $y
 * <> Tidak sama dengan    $x <> $y
 * !== Not identical       $x !== $y
 * > Lebih Besar dari      $x > $y
 * < Kurang Dari           $x < $y
 * >= Lebih besar atau Sama dengan $x >= $y
 * <= Kurang dari atau sama dengan $x <= $y
 * <=> Spaceship           $x <=> $y
*/

// IF
$t = date("H"); // mendapatkan jam dengan format 1–24
echo "IF<br>";
if ($t < 16) {
    echo "Selamat siang!";
}

// IF ELSE
$t = date("H"); // mendapatkan jam dengan format 1–24
echo "<br>IF dan ELSE<br>";
if ($t < 20) {
    echo "Selamat sore!";
} else {
    echo "Selamat malam!";
}

// Nested IF
echo "<br>Nested IF<br>";
if ($t < 10) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat sore!";
} else {
    echo "Selamat Malam!";
}
?>
