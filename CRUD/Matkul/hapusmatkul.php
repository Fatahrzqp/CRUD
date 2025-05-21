<?php
include '../koneksi.php';

if (isset($_GET['kodeMk'])) {
    $kodeMK = $_GET['kodeMk'];

    $stmt = $koneksi->prepare("DELETE FROM t_matakuliah WHERE kodeMK = ?");
    $stmt->bind_param("i", $kodeMK);
    $stmt->execute();
}

header("Location: viewmatkul.php");
exit;
?>
