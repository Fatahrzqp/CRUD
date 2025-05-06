<?php
$data = array(
    array("no" => 1, "poin" => 75, "siswa" => "Adi"),
    array("no" => 2, "poin" => 80, "siswa" => "Joni"),
    array("no" => 3, "poin" => 65, "siswa" => "Jihan"),
    array("no" => 4, "poin" => 70, "siswa" => "Aya"),
    array("no" => 5, "poin" => 85, "siswa" => "Ita"),
    array("no" => 6, "poin" => 90, "siswa" => "Budi"),
    array("no" => 7, "poin" => 95, "siswa" => "Tini"),
    array("no" => 8, "poin" => 65, "siswa" => "Sari")
);

// a) Tampilkan poin siswa dengan nomor urut 5
foreach ($data as $d) {
    if ($d['no'] == 5) {
        echo "a) Poin siswa nomor urut 5: " . $d['poin'] . "<br>";
        break;
    }
}

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "b) Siswa dengan poin 90:<br>";
$found = false;
foreach ($data as $d) {
    if ($d['poin'] == 90) {
        echo "- " . $d['siswa'] . "<br>";
        $found = true;
    }
}
if (!$found) echo "Tidak ada siswa dengan poin 90.<br>";

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "c) Siswa dengan poin 100:<br>";
$found = false;
foreach ($data as $d) {
    if ($d['poin'] == 100) {
        echo "- " . $d['siswa'] . "<br>";
        $found = true;
    }
}
if (!$found) echo "Tidak ada siswa dengan poin 100.<br>";
?>
