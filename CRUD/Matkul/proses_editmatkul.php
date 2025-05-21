<?php
include '../koneksi.php';

if (isset($_POST['edit'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $query = "UPDATE t_matakuliah
              SET namaMK = '$namaMK', sks = '$sks', jam = '$jam'
              WHERE kodeMK = '$kodeMK'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Gagal update data: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi ));
    }

    header("Location: viewmatkul.php");
}
?>
