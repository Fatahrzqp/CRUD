<?php
if (isset($_POST['edit'])) {
    include ("../koneksi.php");

    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHp = $_POST['noHp'];

    $query = "UPDATE t_mahasiswa SET namaMhs = '$namaMhs', prodi= '$prodi', alamat= '$alamat', noHp = '$noHp' WHERE npm = '$npm'";
    $result = mysqli_query($koneksi, $query);

    if(!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
}

header("location:viewMahasiswa.php");
exit;
?>
