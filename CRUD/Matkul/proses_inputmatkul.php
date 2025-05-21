<?php
include '../koneksi.php';

if (isset($_POST['input'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $query = "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("isii", $kodeMK, $namaMK, $sks, $jam);
    $stmt->execute();
}

header("Location: viewmatkul.php");
exit;
?>
